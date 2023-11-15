<?php
include_once(__DIR__.'/../inc/secure.php');
$title = 'CureStatus | Engage with the path to a cure for 7,940 conditions and diseases.';
$description = 'Tracking the path of a cure for 9,734 conditions';
$description = 'Pre-register to our curestatus.ai app and stay inform when we launch';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
	<?php include_once(__DIR__.'/../inc/head.php'); ?>
</head>
<body>
	<main class="container my-5">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
				<p class="text-center"><img src="/img/curestatus.svg" class="img-fluid" alt="CureStatus"></p>
				<p id="tagline"><?php echo $description; ?></p>
				<div id="result1"></div>
				<form hx-post="register.php" hx-target="#result1" hx-indicator="#spinner1" method="POST" role="form" hx-replace-target="true" id="registerForm">
					<div class="form-group mb-3">
						<label class="form-control-label" for="name">Your Name:</label>
						<input type="text" name="name" id="name" class="form-control" required="required" minlength="3">
					</div>
					<div class="form-group mb-3">
						<label class="form-control-label" for="email">Your Email address:</label>
						<input type="email" name="email" id="email" class="form-control" required="required" minlength="5">
					</div>
					<button type="submit" class="btn btn-dark w250">Pre-Register<i class="bi bi-box-arrow-in-right"></i> <span id="spinner1" class="my-indicator">Sending... <i class="fas fa-spinner fa-spin"></i></span></button>
				</form>
			</div>
		</div>
	</main>
	<?php include_once(__DIR__.'/../inc/endScripts.php'); ?>
</body>
</html>
