<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Loins Eye Hospital</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon//favicon-32x32.png">
    <!-- Android / Chrome -->
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon//android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/favicon//android-chrome-512x512.png">
    <!-- Apple -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon//apple-touch-icon.png">
    <!-- Web App Manifest -->
    <link rel="manifest" href="assets/favicon//site.webmanifest">
    <!-- CSS
            ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!--  Icon -->
    <link rel="stylesheet" href="assets/fonts/pbmit-ophtical-icon/pbmit_ophtical.css">
    <!-- Base Icons -->
    <link rel="stylesheet" href="assets/css/pbminfotech-base-icons.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- Magnific -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- AOS -->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="assets/css/shortcode.css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="assets/css/base.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <!-- page wrapper -->
    <div class="page-wrapper" id="page">
        <?php require_once("include/header.php"); ?>
        <?= $content ?? ''; ?>
        <?php require_once('include/footer.php') ?>
    </div>
    <!-- page wrapper End -->

    <!-- Search Box Start Here -->
    <div class="pbmit-header-search-form">
        <div class="pbmit-search-overlay"></div>
        <div class="pbmit-header-search-form-wrapper">
            <div class="pbmit-search-close">
                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163"
                    viewbox="0 0 26.163 26.163">
                    <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                    <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                </svg>
            </div>
            <form class="search-form">
                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                <button type="submit" class="search-submit " title="Search"></button>
                <div class="pbmit-search-line"></div>
            </form>
        </div>
    </div>
    <!-- Search Box End Here -->

    <!-- Scroll To Top -->
    <div class="pbmit-backtotop">
        <div class="pbmit-arrow">
            <i class="pbmit-base-icon-up-open-big"></i>
        </div>
        <div class="pbmit-hover-arrow">
            <i class="pbmit-base-icon-up-open-big"></i>
        </div>
    </div>
    <!-- Scroll To Top End -->

    <!-- JS
        ============================================ -->
    <!-- jQuery JS -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- jquery Waypoints JS -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- jquery Appear JS -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- Numinate JS -->
    <script src="assets/js/numinate.min.js"></script>
    <!-- Slick JS -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- Magnific JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Circle Progress JS -->
    <script src="js/circle-progress.js"></script>
    <!-- countdown JS -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- AOS -->
    <script src="assets/js/aos.js"></script>
    <!-- GSAP -->
    <script src='assets/js/gsap.js'></script>
    <!-- Scroll Trigger -->
    <script src='assets/js/ScrollTrigger.js'></script>
    <!-- Split Text -->
    <script src='assets/js/SplitText.js'></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src='assets/js/theia-sticky-sidebar.js'></script>
    <!-- GSAP Animation -->
    <script src='assets/js/gsap-animation.js'></script>
    <!-- Form Validator -->
    <script src="assets/js/jquery-validate/jquery.validate.min.js"></script>
    <!-- Scripts JS -->
    <script src="assets/js/scripts.js"></script>

    <script type="module" src="../beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092"
        integrity="sha512-UKNk8GbxkABxKcXYuLkO16EleLGUkcvJWtpSNmExE0Too3ZaFAxTscNWEc1OdAv5/BikHawapSCaiD2XCmp+Bw=="
        data-cf-beacon='{"version":"2024.11.0","token":"125856bf84ab44059737e93b01aa0fef","spa":2}'
        crossorigin="anonymous"></script>
    <script>
        window.addEventListener('load', function () {
            if (typeof Swiper !== 'undefined') {
                new Swiper('.pbmit-banner-slider', {
                    loop: true,
                    autoHeight: true,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    effect: 'slide',
                    speed: 800,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true
                    },
                    navigation: {
                        nextEl: '.pbmit-banner-btn-next',
                        prevEl: '.pbmit-banner-btn-prev'
                    },
                    pagination: {
                        el: '.pbmit-banner-pagination',
                        clickable: true
                    }
                });
            }
        });
    </script>
    <script>
        (function () {
            function c() {
                var b = a.contentDocument || (a.contentWindow && a.contentWindow.document);
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'a53041629da0a781',t:'MTc5MzQyNDQ5Nw=='};var l=window.parent.location,o;try{o=new URL(l.origin).origin}catch(e){try{o=new URL(new URL(l.href).origin).origin}catch(e){o=''}}var u='/cdn-cgi/challenge-platform/scripts/jsd/main.js?ray=a53041629da0a781',a=document.createElement('script');a.src=o?new URL(u,o).href:u;document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function () { };
                    document.onreadystatechange = function (b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
    <script>
        $(document).ready(function () {
            $('.image-popup-vertical-fit').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-with-zoom',
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out'
                }
            });
        });
    </script>
</body>

</html>