<?php
date_default_timezone_set('America/Lima');
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CureStatus | Engage with the path to a cure</title>
	<meta name="description" content="Engage with the path to a cure">
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index,follow">
	<meta name="author" content="CureStatus">
	<meta name="subject" content="CureStatus | Engage with the path to a cure">
	<meta name="rating" content="General">

	<!-- Canonical SEO -->
	<link rel="canonical" href="https://curestatus.ai/">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@CureStatus">
	<meta name="twitter:creator" content="@CureStatus">
	<meta name="twitter:url" content="https://curestatus.ai/">
	<meta name="twitter:title" content="CureStatus | Engage with the path to a cure">
	<meta name="twitter:description" content="Engage with the path to a cure">
	<meta name="twitter:image" content="https://curestatus.ai/img/bg.jpg">

	<!-- Open Graph data -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="CureStatus | Engage with the path to a cure">
	<meta property="og:url" content="https://curestatus.ai/">
	<meta property="og:image" content="https://curestatus.ai/img/bg.jpg">
	<meta property="og:description" content="Engage with the path to a cure">

	<!-- Add to Home Screen -->
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="application-name" content="CureStatus">
	<meta name="apple-mobile-web-app-title" content="CureStatus">
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
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/styles/custom.css?ver=<?php echo date('Ymd'); ?>">
</head>
<body>
	<main id="main" class="align-items-center justify-content-center text-center">
		<div class="p-tb-180 row">
			<div class="align-items-center col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-10 offset-1">
				<div class="text-center p-b-24"><a href="/"><img src="/img/icons/logo-dark.svg" class="img-fluid" alt="CureStatus Logo" style="width: 52px; height: auto;"></a></div>
				<div class="text-center"><a href="/"><img src="/img/icons/curestatus.svg" class="img-fluid" alt="CureStatus"></a></div>
				<p id="tagline" class="display-xs-regular">Engage with the path to a cure</p>
				<p class="my-5"><button class="btn btn-md btn-dark shadow-dark-lg" id="joinus">Join us</button></p>
				<div id="joinusForm" class="d-none">
					<div id="result1"></div>
					<form hx-post="/preRegister/register.php" hx-target="#result1" hx-indicator="#spinner1" method="POST" role="form" hx-replace-target="true" id="registerForm">
						<div class="form-group mb-3">
							<label class="form-control-label" for="name">Name:</label>
							<input type="text" name="name" id="name" class="form-control" required="required" minlength="3">
						</div>
						<div class="form-group mb-3">
							<label class="form-control-label" for="email">Email address:</label>
							<input type="email" name="email" id="email" class="form-control" required="required" minlength="5">
						</div>
						<button type="submit" class="btn btn-dark w250">Join Us<i class="bi bi-box-arrow-in-right"></i> <span id="spinner1" class="my-indicator">Sending... <i class="fas fa-spinner fa-spin"></i></span></button>
					</form>
				</div>
			</div>
		</div>
		<div class="justify-content-center p-tb-180 row row-alt">
			<div class="align-items-center col-xl-6 col-lg-8 col-md-8 col-10 justify-content-center">
				<p class="display-sm-regular p-b-32 text-center">Advancing the path to better treatment by connecting people with research.</p>
				<p class="text-lg-regular text-start">curestatus makes medical information accessible and understandable, improving how we understand our health and interact with and support research to find new treatments and cures.</p>
			</div>
		</div>
		<div class="justify-content-center p-tb-180 row">
			<div class="align-items-center col-xl-6 col-lg-8 col-md-8 col-10 justify-content-center">
				<p class="display-sm-regular p-b-32 text-center">95.7% of the global population has health problems.</p>
				<p class="col-12 p-b-8 text-start text-lg-regular">$244 Billion was invested in 2022 in research to combat thousands of diseases and health conditions.</p>
				<p class="col-12 p-b-16 text-start text-lg-regular">Still, the FDA only approves around 43 new treatments a year. 80% of clinical trials globally fail to enroll on time. Research is slow and expensive.</p>
				<blockquote class="text-lg-regular text-start">The curestatus mission is to <span class="text-lg-medium">advance humanities progress towards curing all conditions</span> by making it easy for people to engage with medical information and research.</blockquote>
			</div>
		</div>
		<div class="justify-content-center p-tb-180 row row-alt">
			<div class="align-items-center col-xl-6 col-lg-8 col-md-8 col-10 justify-content-center">
				<p class="display-sm-regular p-b-32 text-center">Built for everyone.</p>
				<p class="text-lg-regular text-start">curestatus is a free, easy-to-use resource for info on conditions, treatments, or clinical trials; built on top of a powerful enterprise-grade clinical research tool.</p>
			</div>
			<div class="align-items-center col-xl-8 col-lg-8 col-md-10 col-10 justify-content-center">	
				<img src="/img/ipad-capture.webp" class="p-t-24">
			</div>
		</div>
		<div class="justify-content-center p-tb-180 row">
			<div id="feature-container" class="align-items-center col-xl-10 col-lg-10 col-md-6 col-6 d-flex flex-wrap justify-content-center row">
				<div class="col-3 feature">
					<div class="justify-content-center row">
						<div class="align-items-center d-flex icon-container justify-content-center">
							<div id="sliders" class="icon-mask"></div>
						</div>
					</div>
					<div class="justify-content-center row text-xl-semibold">Complexity Sliders</div>
					<div class="justify-content-center row text-md-regular">Change the written complexity of any piece of content on curestatus to your level of understanding: Basic, Intermediate, or Advanced.</div>
				</div>
				<div class="col-3 feature">
					<div class="justify-content-center row">
						<div class="align-items-center d-flex icon-container justify-content-center">
							<div id="dashboard" class="icon-mask"></div>
						</div>
					</div>
					<div class="justify-content-center row text-xl-semibold">Fully Customizable</div>
					<div class="justify-content-center row text-md-regular text-justify">Create custom dashboards with content you curate, and subscribe to updates for any condition, treatment, or trial.</div>
				</div>
				<div class="col-3 feature">
					<div class="justify-content-center row">
						<div class="align-items-center d-flex icon-container justify-content-center">
							<div id="rating" class="icon-mask"></div>
						</div>
					</div>
					<div class="justify-content-center row text-xl-semibold">Grades</div>
					<div class="justify-content-center row text-md-regular">curestatus grades make it easy to understand key information at a glance, incl. Side Effect Score and Trial Quality.</div>
				</div>
			</div>
		</div>
		<div class="justify-content-center p-tb-180 row row-alt">
			<div class="align-items-center col-xl-6 col-lg-8 col-md-8 col-10 justify-content-center">
				<p class="display-sm-regular text-center">Become a part of the solution.</p>
				<p class="col-12 p-t-24 text-start text-lg-regular"><span class="text-lg-medium">curestatus members are the driving force behind our mission.</span> Our app and website is built to enable and support researchers, doctors, patients and their loved ones.</p>
				<p class="col-12 text-start text-lg-regular">We help people to find clinical trials, to understand what’s involved with participating, and in turn help research projects to find volunteers.</p>
				<p class="col-12 text-start text-lg-regular">We make it easy to share reliable, trustworthy information on cures, conditions, and treatments with patients, loved ones, or friends.</p>
				<p class="col-12 text-start text-lg-regular">We build community with built-in boards for interaction and discussion, creating local spaces for our members to engage with every condition, rare disease, treatment, or clinical trial.</p>
				<p class="col-12 text-start text-lg-regular">We help researchers, students, and professionals to engage with clinical trial information, and track, share, export, and follow studies, aggregating key information from sources like Clinicaltrials.gov, pharmaceutical company press releases, and trustworthy news sources.</p>
				<p class="col-12 text-start text-lg-regular">We give back. Each year we select non-profit research foundations, rare-disease communities, and advocacy groups. All curestatus members vote to select where we donate a percentage of our annual revenue.</p>
				<p class="col-12 text-start text-lg-regular">We hope you join us in improving the way we understand, connect with, and develop new cures.</p>
				<p class="col-12 p-t-24 text-center"><a href="/#main" class="btn btn-dark shadow-dark-lg">Join Us</a></p>
			</div>
		</div>
	</main>
	<footer>
		<div class="container d-flex flex-wrap p-lr-24 text-md-regular">
			<div id="footer-tagline" class="align-items-center col-12 col-lg-5 d-flex flex-wrap inner-container justify-content-center justify-content-lg-start order-2 order-lg-1">
				&copy; 2023 Curestatus, Inc. All rights reserved.
			</div>
			<div id="footer-logo" class="align-items-center col-12 col-lg-2 d-flex flex-wrap inner-container justify-content-center justify-content-lg-center order-1 order-lg-2">
				<a href="/"></a>
			</div>
			<div id="footer-links" class="align-items-center col-12 col-lg-5 d-flex flex-wrap inner-container justify-content-center justify-content-lg-end order-3 order-lg-3">
				<div class="align-items-center d-flex float-md-end links list-inline text-md-regular">
					<div><a href="/terms.php" class="text-decoration-none">Terms</a></div>
					<div><a href="/privacy.php" class="text-decoration-none">Privacy</a></div>
					<div><a href="/cookies.php" class="text-decoration-none">Cookies</a></div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/htmx.org@1/dist/htmx.min.js"></script>
	<script>
		const joinus = document.querySelector('#joinus');
		const joinusForm = document.getElementById('joinusForm');

		// Add event listener to button
		joinus.addEventListener('click', function() {
		   joinusForm.classList.remove('d-none');
		   joinus.classList.add('d-none');
		});
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KKVG6RLV');</script>
	<!-- End Google Tag Manager -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKVG6RLV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-65J2YBWPMH"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-65J2YBWPMH');
	</script>
</body>
</html>
