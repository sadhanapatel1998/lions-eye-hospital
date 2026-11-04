<?php
/**
 * Configuration & Environment Helper
 * Handles dynamic Base URL detection for Local and Production environments.
 */

if (!defined('LEH_CONFIG_LOADED')) {
    define('LEH_CONFIG_LOADED', true);

    // Production Domain (fallback canonical URL used in production)
    define('PRODUCTION_URL', 'https://lionseyehospital.net');

    /**
     * Determine if current execution is on a local/development environment
     *
     * @return bool
     */
    function isLocalEnvironment() {
        $host = $_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] ?? '');
        $hostname = preg_replace('/:\d+$/', '', strtolower(trim($host)));

        if (empty($hostname)) {
            // CLI or unset host defaults to local
            return true;
        }

        $localHosts = ['localhost', '127.0.0.1', '::1'];
        if (in_array($hostname, $localHosts, true)) {
            return true;
        }

        // Local development domains or private IP ranges
        if (
            preg_match('/^(localhost|127\.0\.0\.1|192\.168\.|10\.|172\.(1[6-9]|2[0-9]|3[0-1])\.)/', $hostname) ||
            preg_match('/\.(local|test|dev|xampp|example)$/i', $hostname)
        ) {
            return true;
        }

        return false;
    }

    /**
     * Get the dynamic base URL of the website
     * 
     * Local: e.g. http://localhost/dashboard/lions-eye-hospital
     * Production: e.g. https://lionseyehospital.net
     *
     * @return string
     */
    function getBaseUrl() {
        if (!isLocalEnvironment()) {
            $host = $_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] ?? '');
            $hostname = preg_replace('/:\d+$/', '', strtolower(trim($host)));

            // If on production host
            if (!empty($hostname)) {
                $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
                    || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)
                    || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
                    || (isset($_SERVER['HTTP_X_FORWARDED_SSL']) && strtolower($_SERVER['HTTP_X_FORWARDED_SSL']) === 'on');

                // Standardize production URLs on https
                $protocol = $isHttps ? 'https' : 'https';

                $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
                $scriptDir = preg_replace('#/(include|assets)$#i', '', $scriptDir);
                $subfolder = ($scriptDir === '/' || $scriptDir === '.') ? '' : rtrim($scriptDir, '/');

                return $protocol . '://' . $host . $subfolder;
            }

            return rtrim(PRODUCTION_URL, '/');
        }

        // Local environment
        $host = $_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] ?? 'localhost');
        $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)
            || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https');

        $protocol = $isHttps ? 'https' : 'http';

        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        $scriptDir = preg_replace('#/(include|assets)$#i', '', $scriptDir);
        $subfolder = ($scriptDir === '/' || $scriptDir === '.') ? '' : rtrim($scriptDir, '/');

        return $protocol . '://' . $host . $subfolder;
    }
}

