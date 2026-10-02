<?php

declare(strict_types=1);

$site = require __DIR__ . '/config/site.php';
$services = require __DIR__ . '/data/services.php';
$locations = require __DIR__ . '/data/locations.php';
$serviceAreas = require __DIR__ . '/data/service-areas.php';
$guides = require __DIR__ . '/data/guides.php';
require __DIR__ . '/includes/functions.php';

$path = current_path();

if ($path === '/') {
    require __DIR__ . '/pages/home.php';
    exit;
}
if ($path === '/hizmetler') {
    require __DIR__ . '/pages/services-index.php';
    exit;
}
if (preg_match('#^/hizmetler/([a-z0-9-]+)$#', $path, $m) && isset($services[$m[1]])) {
    $slug = $m[1];
    require __DIR__ . '/pages/service.php';
    exit;
}
if ($path === '/bolgeler') {
    require __DIR__ . '/pages/locations-index.php';
    exit;
}
if (preg_match('#^/bolgeler/([a-z0-9-]+)$#', $path, $m) && isset($locations[$m[1]])) {
    $slug = $m[1];
    require __DIR__ . '/pages/location.php';
    exit;
}
if ($path === '/rehber') {
    require __DIR__ . '/pages/guides-index.php';
    exit;
}
if (preg_match('#^/rehber/([a-z0-9-]+)$#', $path, $m) && isset($guides[$m[1]])) {
    $slug = $m[1];
    require __DIR__ . '/pages/guide.php';
    exit;
}
if ($path === '/hakkimizda') {
    require __DIR__ . '/pages/about.php';
    exit;
}
if ($path === '/iletisim') {
    require __DIR__ . '/pages/contact.php';
    exit;
}
if ($path === '/gizlilik') {
    require __DIR__ . '/pages/privacy.php';
    exit;
}
if ($path === '/kvkk-aydinlatma-metni') {
    require __DIR__ . '/pages/kvkk.php';
    exit;
}

require __DIR__ . '/pages/404.php';
