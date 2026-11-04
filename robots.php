<?php
/**
 * Dynamic Robots.txt Generator
 * Outputs dynamic robots.txt based on current environment (local vs production)
 */
require_once __DIR__ . '/include/config.php';

header("Content-Type: text/plain; charset=utf-8");
header("X-Robots-Tag: noindex, follow");

$baseUrl = getBaseUrl();
$sitemapUrl = $baseUrl . '/sitemap.xml';

echo "User-agent: *\n";
echo "Allow: /\n";
echo "Disallow: /include/\n";
echo "\n";
echo "Sitemap: " . $sitemapUrl . "\n";

?>

