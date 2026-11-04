<?php
ob_start();
include('include/data.php');
?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper animation animated fadeIn">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner">
                        <h1 class="pbmit-tbar-title">Contact Us</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="Lions Eye Hospital" href="index.php" class="home"><span>Lions Eye
                                    Hospital</span></a>
                        </span>
                        <span class="sep">
                            <i class="pbmit-base-icon-angle-right"></i>
                        </span>
                        <span><span class="post-root post post-post current-item">Contact Us</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Contact Us Content -->
<div class="page-content">
    <!-- Contact Info Cards -->
    <section class="section-lg contact-cards-section">
        <div class="container">
            <div class="row g-4">
                <!-- Card 1: Call Us -->
                <div class="col-md-6 col-xl-4 d-flex">
                    <div class="simple-contact-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h2 class="card-title">Call Us</h2>
                        <div class="card-details">
                            <p class="contact-line">
                                <span class="label-blue">WhatsApp:</span>
                                <a href="https://wa.me/919315241610" target="_blank" rel="noopener noreferrer"
                                    class="contact-link">+91 9315241610</a>
                            </p>
                            <p class="contact-line">
                                <span class="label-blue">Call:</span>
                                <a href="tel:+918448780237" class="contact-link">+91 8448780237</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Visit Us -->
                <div class="col-md-6 col-xl-4 d-flex">
                    <div class="simple-contact-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h2 class="card-title">Visit Us</h2>
                        <div class="card-details">
                            <h6 class="contact-subheading text-gold">Visit our Hospital</h6>
                            <p class="contact-line">
                                <a href="https://maps.app.goo.gl/i6c3AdbTuKWUzkCF7" target="_blank"
                                    rel="noopener noreferrer" class="contact-address-link">
                                    E-Block Kavi Nagar Near Jain Mandir Ghaziabad U.P 201002
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Message Us -->
                <div class="col-md-6 col-xl-4 d-flex">
                    <div class="simple-contact-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h2 class="card-title">Message Us</h2>
                        <div class="card-details">
                            <h6 class="contact-subheading text-gold">Email</h6>
                            <p class="contact-line">
                                <a href="mailto:lionseyehospital.gzb@gmail.com" class="contact-link">
                                    lionseyehospital.gzb@gmail.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Info Cards End -->

    <!-- Contact Form -->
    <section>
        <div class="container">
            <div class="contact-form-box">
                <div class="tween-effect-wrap-left">
                    <div class="pbmit-ele-tween-effect pbmit-tween-image pbmit-tween-effect-style-1">
                        <div class="pbmit-tween-effect" data-x-start="0" data-x-end="8" data-y-start="0" data-y-end="40"
                            data-scale-x-start="1" data-scale-x-end=" 1" data-skew-x-start=" 0deg"
                            data-skew-x-end="0deg" data-skew-y-start=" 0deg" data-skew-y-end=" 0deg"
                            data-rotate-x-start="0" data-rotate-x-end="0">
                            <img src="assets/images/resource/contact-png-1.png" class="img-fluid" alt="Contact Image">
                        </div>
                    </div>
                </div>
                <div class="contact-form-wrap">
                    <div class="pbmit-heading-subheading text-center animation-style3">
                        <div class="pbmit-icon">
                            <i class="pbmit-ophtical-icon pbmit-ophtical-icon-medical-report"></i>
                        </div>

                        <h2 class="pbmit-title">Book Your Eye Care Appointment</h2>

                        <div class="pbmit-heading-desc">
                            Contact Lions Eye Hospital to schedule your appointment and receive expert eye care.
                        </div>
                    </div>
                    <form class="contact-form" id="contact-form" novalidate>
                        <div class="row">
                            <div class="col-md-6 col-gl-4">
                                <input type="text" class="form-control" placeholder="Full Name *" name="name"
                                    id="appointment-name" maxlength="60" autocomplete="name" required>
                            </div>

                            <div class="col-md-6 col-gl-4">
                                <input type="tel" class="form-control" placeholder="10 Digit Mobile Number *"
                                    name="phone" id="appointment-phone" inputmode="numeric" maxlength="10"
                                    autocomplete="tel-national" required>
                            </div>

                            <div class="col-md-6 col-gl-4">
                                <input type="email" class="form-control" placeholder="Enter Email *" name="email"
                                    id="appointment-email" maxlength="100" autocomplete="email" required>
                            </div>

                            <div class="col-md-6 col-gl-4">
                                <select class="form-select" name="treatment" id="appointment-treatment" required>

                                    <option value="">Select Treatment *</option>
                                    <option value="Diabetic Eye Care">Diabetic Eye Care</option>
                                    <option value="Retina Surgery">Retina Surgery</option>
                                    <option value="Cataract">Cataract</option>
                                    <option value="Glaucoma Diagnosis">Glaucoma Diagnosis</option>
                                    <option value="Eye Check Up">Eye Check Up</option>
                                    <option value="Spectacles">Spectacles</option>

                                </select>
                            </div>

                            <div class="col-md-12">
                                <textarea cols="40" rows="5" placeholder="Describe your concern or message *"
                                    class="form-control" name="message" id="appointment-message" minlength="10"
                                    maxlength="500" required></textarea>
                            </div>

                            <div class="col-md-12 text-center mt-4">
                                <button type="submit" class="pbmit-btn secondary" id="appointment-submit">
                                    <span class="pbmit-button-content-wrapper">
                                        <span class="pbmit-button-text-wrap">
                                            <span class="pbmit-button-text" data-text="Request An Appointment">
                                                <span>Request An Appointment</span>
                                            </span>
                                        </span>
                                    </span>

                                    <span class="form-btn-loader d-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100">
                                            <circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="40" cy="50">
                                                <animate attributeName="opacity" calcMode="spline" dur="2"
                                                    values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1"
                                                    repeatCount="indefinite" begin="-.4"></animate>
                                            </circle>

                                            <circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="100" cy="50">
                                                <animate attributeName="opacity" calcMode="spline" dur="2"
                                                    values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1"
                                                    repeatCount="indefinite" begin="-.2"></animate>
                                            </circle>

                                            <circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="160" cy="50">
                                                <animate attributeName="opacity" calcMode="spline" dur="2"
                                                    values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1"
                                                    repeatCount="indefinite" begin="0"></animate>
                                            </circle>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 message-status mt-2" id="appointment-status" role="status"
                            aria-live="polite"></div>

                    </form>
                </div>
                <div class="tween-effect-wrap-right">
                    <div class="pbmit-ele-tween-effect pbmit-tween-image pbmit-tween-effect-style-1">
                        <div class="pbmit-tween-effect" data-x-start="0" data-x-end="8" data-y-start="0"
                            data-y-end="-40" data-scale-x-start="1" data-scale-x-end=" 1" data-skew-x-start=" 0deg"
                            data-skew-x-end="0deg" data-skew-y-start=" 0deg" data-skew-y-end=" 0deg"
                            data-rotate-x-start="0" data-rotate-x-end="0">
                            <img src="assets/images/resource/contact-png-2.png" class="img-fluid"
                                alt="contact-circle-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->

    <!-- Iframe -->
    <section class="contact-iframe-section section-xl">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.8355994750495!2d77.4454064!3d28.664640799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1c1b3429c4d%3A0xab985b231e4d94d7!2sLions%20Eye%20Hospital!5e0!3m2!1sen!2sin!4v1793616466710!5m2!1sen!2sin"
                title="Lions Eye Hospital, Ghaziabad, Uttar Pradesh, India"
                aria-label="Lions Eye Hospital, Ghaziabad, Uttar Pradesh, India"></iframe>
        </div>
    </section>
    <!-- Iframe End-->

</div>
<!-- Contact Us Content End -->


<?php
$content = ob_get_clean();
require 'layout.php';
?>
