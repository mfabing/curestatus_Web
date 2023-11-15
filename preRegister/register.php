<?php
date_default_timezone_set('America/Lima');
$outputFile = 'register.txt';
// Check if the file is writable
if (!is_writable($outputFile)) {
	exit('<div class="alert alert-danger" role="alert"><h3>Error!</h3><p>There was a problem, please contact us via email at: info@curestatus.ai</p></div>');
}
$log = date('Y-m-d H:i:s').' '.json_encode($_POST, JSON_NUMERIC_CHECK | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE).PHP_EOL;
file_put_contents($outputFile,$log,FILE_APPEND);
?>
<div class="alert alert-success" role="alert">
	<h3>Thank you!</h3><p>We register your details and we will keep you informed when we officially launch.</p>
</div>
<script>document.getElementById("registerForm").classList.add("d-none");</script>
