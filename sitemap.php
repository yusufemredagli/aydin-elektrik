<?php

declare(strict_types=1);
header('Content-Type: application/xml; charset=utf-8');
$site = require __DIR__ . '/config/site.php';
$services = require __DIR__ . '/data/services.php';
$locations = require __DIR__ . '/data/locations.php';
$guides = require __DIR__ . '/data/guides.php';
$base = rtrim($site['site_url'], '/');

function modified_date(array $files): string {
    $times = array_map(static fn(string $f): int => is_file($f) ? (int) filemtime($f) : time(), $files);
    return date('Y-m-d', max($times));
}

$generalModified = modified_date([__DIR__.'/pages/home.php', __DIR__.'/config/site.php']);
$serviceModified = modified_date([__DIR__.'/data/services.php', __DIR__.'/pages/service.php']);
$locationModified = modified_date([__DIR__.'/data/locations.php', __DIR__.'/pages/location.php']);
$guideModified = modified_date([__DIR__.'/data/guides.php', __DIR__.'/pages/guide.php']);

$urls = [
    ['/', '1.0', 'weekly', $generalModified],
    ['/hizmetler', '0.9', 'monthly', $serviceModified],
    ['/bolgeler', '0.9', 'monthly', $locationModified],
    ['/rehber', '0.7', 'monthly', $guideModified],
    ['/hakkimizda', '0.6', 'monthly', $generalModified],
    ['/iletisim', '0.8', 'monthly', $generalModified],
    ['/gizlilik', '0.3', 'yearly', $generalModified],
    ['/kvkk-aydinlatma-metni', '0.3', 'yearly', $generalModified],
];
foreach (array_keys($services) as $slug) $urls[] = ['/hizmetler/'.$slug, '0.9', 'monthly', $serviceModified];
foreach (array_keys($locations) as $slug) $urls[] = ['/bolgeler/'.$slug, '0.9', 'monthly', $locationModified];
foreach (array_keys($guides) as $slug) $urls[] = ['/rehber/'.$slug, '0.7', 'monthly', $guideModified];

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach($urls as [$path,$priority,$changefreq,$lastmod]): ?>
  <url>
    <loc><?= htmlspecialchars($base.$path, ENT_XML1, 'UTF-8') ?></loc>
    <lastmod><?= $lastmod ?></lastmod>
    <changefreq><?= $changefreq ?></changefreq>
    <priority><?= $priority ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
