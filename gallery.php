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
                        <h1 class="pbmit-tbar-title">Gallery</h1>
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
                        <span><span class="post-root post post-post current-item">Gallery</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">
    <!-- Gallery Section Start -->
    <section class="pbmit-gallery-section section-lg">
        <div class="container">

            <!-- Section Heading -->
            <div class="pbmit-heading-subheading text-center animation-style3">
                <h4 class="pbmit-subtitle">Our Gallery</h4>
                <h2 class="pbmit-title">A Glimpse of Lions Eye Hospital</h2>
                <div class="pbmit-heading-desc">
                    Explore our hospital, facilities and patient-focused eye care environment.
                </div>
            </div>

            <div class="row g-4 mt-4">

                <!-- Gallery Item 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="pbmit-gallery-item">
                        <a href="assets/images/resource/about-img.jpg" class="image-popup-vertical-fit"
                            title="Lions Eye Hospital">
                            <img src="assets/images/resource/about-img.jpg" class="img-fluid" alt="Lions Eye Hospital">
                        </a>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="pbmit-gallery-item">
                        <a href="assets/images/services/cataract.jpg" class="image-popup-vertical-fit"
                            title="Eye Care Facilities">
                            <img src="assets/images/services/cataract.jpg" class="img-fluid" alt="Eye Care Facilities">
                        </a>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="pbmit-gallery-item">
                        <a href="assets/images/services/eye-check-up.jpg" class="image-popup-vertical-fit"
                            title="Eye Examination">
                            <img src="assets/images/services/eye-check-up.jpg" class="img-fluid" alt="Eye Examination">
                        </a>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="pbmit-gallery-item">
                        <a href="assets/images/services/glaucoma.jpg" class="image-popup-vertical-fit"
                            title="Modern Eye Care">
                            <img src="assets/images/services/glaucoma.jpg" class="img-fluid" alt="Modern Eye Care">
                        </a>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="pbmit-gallery-item">
                        <a href="assets/images/services/retina-surgery.jpg" class="image-popup-vertical-fit"
                            title="Hospital Interior">
                            <img src="assets/images/services/retina-surgery.jpg" class="img-fluid" alt="Hospital Interior">
                        </a>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="pbmit-gallery-item">
                        <a href="assets/images/services/spectacles.jpg" class="image-popup-vertical-fit"
                            title="Patient Care">
                            <img src="assets/images/services/spectacles.jpg" class="img-fluid" alt="Patient Care">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

</div>
<!-- Page Content End -->


<?php
$content = ob_get_clean();
require 'layout.php';
?>