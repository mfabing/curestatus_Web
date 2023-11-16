<footer>
    <div class="container d-flex flex-wrap p-lr-24 text-md-regular">
        <div id="footer-tagline" class="align-items-center col-12 col-lg-5 d-flex flex-wrap inner-container justify-content-center justify-content-lg-start order-2 order-lg-1">
            &copy; <?php echo date('Y'); ?> Curestatus, Inc. All rights reserved.
        </div>
        <div id="footer-logo" class="align-items-center col-12 col-lg-2 d-flex flex-wrap inner-container justify-content-center justify-content-lg-center order-1 order-lg-2">
            <a href="/"></a>
        </div>
        <!-- <div id="footer-links" class="align-items-center col-12 col-lg-5 d-flex flex-wrap inner-container justify-content-center justify-content-lg-end order-3 order-lg-3">
            <div class="align-items-center d-flex float-md-end links list-inline text-md-regular">
                <div><a href="/terms.php" class="text-decoration-none">Terms</a></div>
                <div><a href="/privacy.php" class="text-decoration-none">Privacy</a></div>
                <div><a href="/cookies.php" class="text-decoration-none">Cookies</a></div>
            </div>
        </div> -->
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/htmx.org@1/dist/htmx.min.js"></script>
<?php
// code that can only be used on the server such as a GA and PWA...
if (stripos(__DIR__, '/var/www/')===0) { ?>
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
<?php } ?>
