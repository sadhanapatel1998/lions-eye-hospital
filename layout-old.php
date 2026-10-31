    <?php include 'seo.php'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- SEO Meta Tags -->
        <meta name="description" content="<?php echo htmlspecialchars($pageMeta['description']); ?>">
        <meta name="keywords" content="<?php echo htmlspecialchars($pageMeta['keywords']); ?>">
        <!-- Author -->
        <meta name="author" content="GoVacanzaDmc Travel & Tours">
        <!-- Robots -->
        <meta name="robots" content="<?php echo $pageMeta['robots']; ?>">
        <!-- Canonical URL (Optional) -->
        <?php if (!empty($pageMeta['canonical'])): ?>
            <link rel="canonical" href="<?php echo $pageMeta['canonical']; ?>">
        <?php endif; ?>
        <!-- Page Title -->
        <title><?php echo htmlspecialchars($pageMeta['title']); ?></title>

        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicons/site.webmanifest">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet"> -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/custom-animate.css">
        <link rel="stylesheet" href="assets/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome-all.css">
        <link rel="stylesheet" href="assets/css/jarallax.css">
        <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/twentytwenty.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/timePicker.css">

        <!-- template styles -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>

    <body>

        <!-- <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div> -->

        <!--Start Preloader-->
        <!-- <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div> -->
        <!--End Preloader-->


        <div class="page-wrapper">

            <?php require_once("include/header.php"); ?>
            <?= $content ?? ''; ?>
            <?php require_once('include/footer.php') ?>

        </div><!-- /.page-wrapper -->


        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="index.php" aria-label="logo image">
                        <img src="assets/images/logo/logo.png" alt="Poddar Nursing Home Hospital">
                    </a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:919958170476">+91 9958170476</a>
                    </li>
                    <li>
                        <i class="fab fa-whatsapp"></i>
                        <a href="https://wa.me/919318413696" target="_blank">
                            +91 9318413696
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:npoddarhospital@gmail.com">poddarhospital@gmail.com</a>
                    </li>
                    <li>
                        <i class="fa fa-location"></i>
                        <a href="https://maps.app.goo.gl/bWstP5k7cHaLLu3D7" target="_blank" rel="noopener noreferrer">
                                                        J 62, 64 patel Nagar 1 old bus stand Ghaziabad</a>
                    </li>
                </ul>
                <!-- <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div> -->



            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->

        <!-- Floating Contact Buttons -->
        <div class="floating-contact">

            <a href="tel:+919958170476" class="floating-btn call-btn" aria-label="Call Poddar Nursing Home">
                <i class="icon-phone-call"></i>
            </a>

            <a href="https://wa.me/919318413696" target="_blank" class="floating-btn whatsapp-btn" aria-label="WhatsApp Poddar Nursing Home">
                <i class="fab fa-whatsapp"></i>
            </a>

        </div>

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
            <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
            <span class="scroll-to-top__text"> Go Back Top</span>
        </a>


        <script src="assets/js/jquery-latest.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jarallax.min.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <script src="assets/js/swiper.min.js"></script>
        <script src="assets/js/jquery.circle-progress.min.js"></script>
        <script src="assets/js/knob.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/isotope.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/jquery.circleType.js"></script>
        <script src="assets/js/jquery.lettering.min.js"></script>
        <script src="assets/js/jquery.fittext.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/marquee.min.js"></script>
        <script src="assets/js/countdown.min.js"></script>
        <script src="assets/js/jquery-sidebar-content.js"></script>
        <script src="assets/js/twentytwenty.js"></script>
        <script src="assets/js/jquery.event.move.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/timePicker.js"></script>
        <script src="assets/js/gsap/gsap.js"></script>
        <script src="assets/js/gsap/ScrollTrigger.js"></script>
        <script src="assets/js/gsap/SplitText.js"></script>

        <!-- template js -->
        <script src="assets/js/script.js"></script>

        <script>
            $('.gallery-popup').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 2]
                },
                closeBtnInside: false,
                fixedContentPos: true,
                removalDelay: 250,
                mainClass: 'mfp-fade'
            });
        </script>
        <script>
            document.getElementById("contact-form").addEventListener("submit", function(e) {
                e.preventDefault();

                const name = this.name.value;
                const email = this.email.value;
                const phone = this.phone.value;
                const subject = this.subject.value;
                const message = this.message.value;

                const whatsappMessage =
                    `New Appointment Enquiry - Poddar Nursing Home

                 Name: ${name}
                 Mobile: ${phone}
                 Email: ${email}
                 Subject: ${subject}
                 
                 Message:
                 ${message}`;

                const whatsappNumber = "919318413696";

                window.open(
                    `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`,
                    "_blank"
                );
            });
        </script>
    </body>

    </html>