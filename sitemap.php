<?php
/**
 * Dynamic XML Sitemap Generator
 * Outputs clean XML sitemap with dynamic URLs, modification dates, and priorities
 */
require_once __DIR__ . '/include/config.php';

header("Content-Type: application/xml; charset=utf-8");
header("X-Robots-Tag: noindex, follow");

$baseUrl = getBaseUrl();

// Define pages with clean slugs, file sources, change frequencies, and priorities
$pages = [
    [
        'slug' => '',
        'file' => 'index.php',
        'changefreq' => 'daily',
        'priority' => '1.0'
    ],
    [
        'slug' => 'about-us',
        'file' => 'about-us.php',
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ],
    [
        'slug' => 'services',
        'file' => 'services.php',
        'changefreq' => 'weekly',
        'priority' => '0.9'
    ],
    [
        'slug' => 'service-cataract',
        'file' => 'service-cataract.php',
        'changefreq' => 'weekly',
        'priority' => '0.9'
    ],
    [
        'slug' => 'service-retina-surgery',
        'file' => 'service-retina-surgery.php',
        'changefreq' => 'weekly',
        'priority' => '0.9'
    ],
    [
        'slug' => 'service-glaucoma-diagnosis',
        'file' => 'service-glaucoma-diagnosis.php',
        'changefreq' => 'weekly',
        'priority' => '0.9'
    ],
    [
        'slug' => 'service-diabetic-eye-care',
        'file' => 'service-diabetic-eye-care.php',
        'changefreq' => 'weekly',
        'priority' => '0.9'
    ],
    [
        'slug' => 'service-eye-check-up',
        'file' => 'service-eye-check-up.php',
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ],
    [
        'slug' => 'service-spectacles',
        'file' => 'service-spectacles.php',
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ],
    [
        'slug' => 'gallery',
        'file' => 'gallery.php',
        'changefreq' => 'monthly',
        'priority' => '0.7'
    ],
    [
        'slug' => 'blog',
        'file' => 'blog.php',
        'changefreq' => 'weekly',
        'priority' => '0.8'
    ],
    [
        'slug' => 'contact-us',
        'file' => 'contact-us.php',
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ],
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php foreach ($pages as $page): 
    $filePath = __DIR__ . '/' . $page['file'];
    $lastmod = file_exists($filePath) ? date('Y-m-d', filemtime($filePath)) : date('Y-m-d');
    $pageUrl = empty($page['slug']) ? $baseUrl . '/' : $baseUrl . '/' . $page['slug'];
?>
    <url>
        <loc><?= htmlspecialchars($pageUrl, ENT_QUOTES, 'UTF-8'); ?></loc>
        <lastmod><?= $lastmod; ?></lastmod>
        <changefreq><?= $page['changefreq']; ?></changefreq>
        <priority><?= $page['priority']; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>

