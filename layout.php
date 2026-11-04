<?php include 'seo.php'; ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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

    <!-- Floating Contact Buttons -->
    <div class="floating-contact">

        <!-- WhatsApp -->
        <a href="https://wa.me/919315241610" class="floating-btn whatsapp-btn" target="_blank" rel="noopener noreferrer"
            aria-label="Chat with Lions Eye Hospital on WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>

        <!-- Call -->
        <a href="tel:+918448780237" class="floating-btn call-btn" aria-label="Call Lions Eye Hospital">
            <i class="fa-solid fa-phone"></i>
            <span>Call Now</span>
        </a>

    </div>

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
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

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
            // Close mobile menu on overlay click & sync body
            $('.pbmit-mobile-menu-bg, .closepanel').on('click', function () {
                $('header').removeClass('active');
                $('body').removeClass('pbmit-mobile-menu-open');
            });
            $('#menu-toggle, .navbar-toggler').on('click', function () {
                setTimeout(function () {
                    $('body').toggleClass('pbmit-mobile-menu-open', $('header').hasClass('active'));
                }, 20);
            });

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
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const form = document.getElementById("contact-form");

            if (!form) return;

            const nameField = document.getElementById("appointment-name");
            const phoneField = document.getElementById("appointment-phone");
            const emailField = document.getElementById("appointment-email");
            const treatmentField = document.getElementById("appointment-treatment");
            const messageField = document.getElementById("appointment-message");

            const submitBtn = document.getElementById("appointment-submit");
            const loader = submitBtn.querySelector(".form-btn-loader");
            const statusBox = document.getElementById("appointment-status");

            // Hospital WhatsApp number
            const whatsappNumber = "919315241610";

            // Allow only digits in phone field
            phoneField.addEventListener("input", function () {
                this.value = this.value.replace(/\D/g, "").slice(0, 10);
                this.setCustomValidity("");
            });

            // Remove unnecessary spaces from name
            nameField.addEventListener("blur", function () {
                this.value = this.value.trim().replace(/\s+/g, " ");
            });

            // Remove unnecessary spaces from email
            emailField.addEventListener("blur", function () {
                this.value = this.value.trim().toLowerCase();
            });

            // Clear custom validation messages when fields change
            [nameField, phoneField, emailField, treatmentField, messageField]
                .forEach(function (field) {
                    field.addEventListener("input", function () {
                        field.setCustomValidity("");
                    });

                    field.addEventListener("change", function () {
                        field.setCustomValidity("");
                    });
                });

            form.addEventListener("submit", function (e) {

                e.preventDefault();

                statusBox.textContent = "";
                statusBox.style.color = "";

                // Clear previous validation errors
                const fields = [
                    nameField,
                    phoneField,
                    emailField,
                    treatmentField,
                    messageField
                ];

                fields.forEach(field => field.setCustomValidity(""));

                // Get values
                const name = nameField.value.trim().replace(/\s+/g, " ");
                const phone = phoneField.value.trim();
                const email = emailField.value.trim().toLowerCase();
                const treatment = treatmentField.value;
                const message = messageField.value.trim();

                let isValid = true;

                // 1. Name validation
                const nameRegex = /^[\p{L}][\p{L}\s.'-]{1,59}$/u;

                if (name.length < 3) {
                    nameField.setCustomValidity("Full name must contain at least 3 characters.");
                    isValid = false;
                } else if (!nameRegex.test(name)) {
                    nameField.setCustomValidity("Please enter a valid name using letters only.");
                    isValid = false;
                }

                // 2. Indian mobile number validation
                const phoneRegex = /^[6-9]\d{9}$/;

                if (!phoneRegex.test(phone)) {
                    phoneField.setCustomValidity(
                        "Please enter a valid 10-digit Indian mobile number starting with 6, 7, 8 or 9."
                    );
                    isValid = false;
                }

                // 3. Email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

                if (!emailRegex.test(email) || !emailField.validity.valid) {
                    emailField.setCustomValidity("Please enter a valid email address.");
                    isValid = false;
                }

                // 4. Treatment validation
                if (!treatment) {
                    treatmentField.setCustomValidity("Please select a treatment.");
                    isValid = false;
                }

                // 5. Message validation
                if (message.length < 10) {
                    messageField.setCustomValidity(
                        "Please enter at least 10 characters in your message."
                    );
                    isValid = false;
                } else if (message.length > 500) {
                    messageField.setCustomValidity(
                        "Message cannot exceed 500 characters."
                    );
                    isValid = false;
                }

                // Stop submission if validation fails
                if (!isValid) {
                    const firstInvalidField = fields.find(field => !field.validity.valid);

                    if (firstInvalidField) {
                        firstInvalidField.reportValidity();
                        firstInvalidField.focus();
                    }

                    return;
                }

                // Show loading state
                submitBtn.disabled = true;
                loader.classList.remove("d-none");

                // Prepare WhatsApp message
                const whatsappMessage =
                    "NEW APPOINTMENT REQUEST\n\n" +
                    "Hospital: Lions Eye Hospital\n\n" +
                    "Patient Name: " + name + "\n" +
                    "Mobile Number: " + phone + "\n" +
                    "Email Address: " + email + "\n" +
                    "Treatment: " + treatment + "\n" +
                    "Message: " + message + "\n\n" +
                    "Please contact me regarding my appointment.";

                const whatsappURL =
                    "https://wa.me/" + whatsappNumber +
                    "?text=" + encodeURIComponent(whatsappMessage);

                // Open WhatsApp
                window.open(whatsappURL, "_blank", "noopener,noreferrer");

                statusBox.style.color = "#16803c";
                statusBox.textContent =
                    "Your appointment details are ready in WhatsApp. Please press Send to submit your request.";

                // Reset button
                submitBtn.disabled = false;
                loader.classList.add("d-none");

                // Reset form after preparing WhatsApp message
                form.reset();

            });

        });
    </script>
</body>

</html>