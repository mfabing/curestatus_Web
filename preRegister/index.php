<?php
include_once(__DIR__.'/../inc/secure.php');
$title = 'CureStatus | Engage with the path to a cure for 7,940 conditions and diseases.';
$description = 'Tracking the path of a cure for 9,734 conditions';
$description = 'Sign up to pre-register for curestatus membership and get launch updates.';
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
				<div class="text-center mb-5"><a href="/"><img src="/img/icons/logo.svg" class="img-fluid" alt="CureStatus Logo" style="width: 64px; height: auto;"></a></div>
				<div class="text-center"><a href="/"><img src="/files/curestatus.svg" class="img-fluid" alt="CureStatus"></a></div>
				<p id="tagline"><?php echo $description; ?></p>
				<div id="result1"></div>
				<form hx-post="register.php" hx-target="#result1" hx-indicator="#spinner1" method="POST" role="form" hx-replace-target="true" id="registerForm">
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
	</main>
	<?php include_once(__DIR__.'/../inc/endScripts.php'); ?>
</body>
</html>
