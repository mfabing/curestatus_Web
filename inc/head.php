<?php
date_default_timezone_set('America/Lima');
$brand = 'CureStatus';
if (!isset($title) OR strlen($title) < 3) {
	$title = 'CureStatus | Engage with the path to a cure';
}
if (!isset($description) OR strlen($description) < 3) {
	$description = 'CureStatus | Engage with the path to a cure';
}
$domain = 'https://curestatus.ai';
$img = 'https://curestatus.ai/img/bg.jpg';
$url = $domain.$_SERVER['REQUEST_URI'];
if (!isset($name)) {
	$name = '';
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index,follow">
<meta name="author" content="<?php echo $brand; ?>">
<meta name="subject" content="<?php echo $title; ?>">
<meta name="rating" content="General">

<!-- Canonical SEO -->
<link rel="canonical" href="<?php echo $domain.$_SERVER['PHP_SELF']; ?>">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@<?php echo $brand; ?>">
<meta name="twitter:creator" content="@<?php echo $brand; ?>">
<meta name="twitter:url" content="<?php echo $url; ?>">
<meta name="twitter:title" content="<?php echo $title; ?>">
<meta name="twitter:description" content="<?php echo $description; ?>">
<meta name="twitter:image" content="<?php echo $img; ?>">

<!-- Open Graph data -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:url" content="<?php echo $url; ?>">
<meta property="og:image" content="<?php echo $img; ?>">
<meta property="og:description" content="<?php echo $description; ?>">

<!-- Add to Home Screen -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="application-name" content="<?php echo $brand; ?>">
<meta name="apple-mobile-web-app-title" content="<?php echo $brand; ?>">
<meta name="apple-mobile-web-app-status-bar-style" content="#dcd6e9">
<meta name="msapplication-starturl" content="/">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#dcd6e9">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#dcd6e9">
<meta name="apple-mobile-web-app-status-bar" content="#dcd6e9">
<link rel="icon" href="/favicon/favicon.ico" sizes="any">
<link rel="icon" href="/favicon/favicon.svg" type="image/svg+xml">

<!-- Style -->
<link type="font/woff2" href="/fonts/AvenirNext-Regular-08.woff2">
<link type="font/woff2" href="/fonts/AvenirNext-Italic-05.woff2">
<link type="font/woff2" href="/fonts/AvenirNext-Medium-06.woff2'">
<link type="font/woff2" href="/fonts/AvenirNext-MediumItalic-07.woff2">
<link type="font/woff2" href="/fonts/AvenirNext-DemiBold-03.woff2">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/datatables.net-dt@1/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">
<?php
if (stripos(__DIR__, '/Users/')===0) {
	echo '<link rel="stylesheet" type="text/css" href="/styles/custom.css?ver='.date('ymdHi').'">';
} else {
	echo '<link rel="stylesheet" type="text/css" href="/styles/custom.css?ver='.date('ymdH').'">';
}
