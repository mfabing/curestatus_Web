<?php
if (stripos(__DIR__, '/Users/michaelfabing/')===0) {
	var_dump($_SESSION);
}
?>
<nav id="nav-top" class="shadow-dark-md">
	<div class="container d-flex max-width-1280 p-lr-24">
		<div class="align-items-center col-4 d-flex float-start justify-content-start">
			<div id="menu-container" class="align-items-center d-flex float-start justify-content-start">
				<button id="hamburger" onclick="toggleMobileMenu()"></button>
			</div>
		</div>
		<div class="align-items-center col-4 d-flex justify-content-center text-center">
			<a id="logo" href="/"></a>
		</div>
		<div class="align-items-center col-4 d-flex float-end justify-content-end">
			<div id="search-container" class="align-items-center d-flex float-end justify-content-end">
				<a href="/#search" id="search-sm" class="align-items-center d-flex"></a>
			</div>
		</div>
	</div>
	<div class="d-none d-lg-block">
		<div id="divider"></div>
		<div id="subnav" class="container d-flex justify-content-center max-width-1240 p-lr-24">
			<div id="inner-container" class="align-items-center d-flex display-4xs-medium">
				<div class="button">
					<a href="/feed/" class="text-decoration-none <?php if ($route == 'feed') {echo 'nav-active shadow-dark-md';} ?>">Feed</a>
				</div>
				<div class="button">
					<a href="/conditions/" class="text-decoration-none <?php if ($route == 'conditions') {echo 'nav-active shadow-dark-md';} ?>">Conditions</a>
				</div>
				<div class="button">
					<a href="/treatments/" class="text-decoration-none <?php if ($route == 'treatments') {echo 'nav-active shadow-dark-md';} ?>">Treatments</a>
				</div>
				<div class="button">
					<a href="/research/" class="text-decoration-none <?php if ($route == 'research') {echo 'nav-active shadow-dark-md';} ?>">Research</a>
				</div>
				<div class="button">
					<a href="/news/" class="text-decoration-none <?php if ($route == 'news') {echo 'nav-active shadow-dark-md';} ?>">News</a>
				</div>
			</div>
		</div>
	</div>
	<div class="d-none" id="mobileMenu">
		<div id="divider"></div>
		<div class="container-lg" style="height: 100%;  width: 100%; padding:10px 0px;">
			<div class="m-3">
				<ul class="navbar-nav ms-auto">
					<div class="button my-1"><a href="/feed/" class="text-decoration-none <?php if ($route == 'feed') {echo 'nav-active';} ?>">Feed</a></div>
					<div class="button my-1"><a href="/conditions/" class="text-decoration-none <?php if ($route == 'conditions') {echo 'nav-active';} ?>">Conditions</a></div>
					<div class="button my-1"><a href="/treatments/" class="text-decoration-none <?php if ($route == 'treatments') {echo 'nav-active';} ?>">Treatments</a></div>
					<div class="button my-1"><a href="/research/" class="text-decoration-none <?php if ($route == 'research') {echo 'nav-active';} ?>">Research</a></div>
					<div class="button my-1"><a href="/news/" class="text-decoration-none <?php if ($route == 'news') {echo 'nav-active';} ?>">News</a></div>
				</ul>
			</div>
		</div>
	</div>
</nav>
