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
                        <h1 class="pbmit-tbar-title">Services</h1>
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
                        <span><span class="post-root post post-post current-item">Services</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">
    <!-- Service Start -->
    <section class="service-section-one animation animated fadeIn py-0">
        <div class="service-one-inner">
            <div class="container">

                <div class="tween-effect-style-wrap">
                    <div class="pbmit-ele-tween-effect pbmit-tween-image pbmit-tween-effect-style-1">
                        <div class="pbmit-tween-effect" data-x-start="0" data-x-end="0" data-y-start="50" data-y-end="0"
                            data-scale-x-start="0.7" data-scale-x-end="1" data-skew-x-start="0deg"
                            data-skew-x-end="0deg" data-skew-y-start="0deg" data-skew-y-end="0deg"
                            data-rotate-x-start="0" data-rotate-x-end="0">
                        </div>
                    </div>
                </div>

                <!-- Heading -->
                <div class="row align-items-center">

                    <div class="col-md-12 col-xl-6">
                        <div class="pbmit-heading-subheading animation-style3">
                            <h4 class="pbmit-subtitle">Services</h4>
                            <h2 class="pbmit-title">What Service We Offer</h2>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-6">
                        <p>
                            We provide comprehensive eye care services including
                            vision tests, cataract care, glaucoma diagnosis,
                            retina surgery, diabetic eye care and spectacles.
                        </p>
                    </div>
                </div>

                <!-- Services Grid -->
                <div class="row g-4">

                    <?php foreach ($services as $index => $service): ?>

                        <div class="col-md-6 col-lg-4">

                            <article class="pbmit-service-style-1">
                                <div class="pbminfotech-post-item">

                                    <div class="pbmit-box-content-wrap">

                                        <!-- Service Image -->
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">

                                                <img src="<?= htmlspecialchars($service['image']); ?>" class="img-fluid"
                                                    alt="<?= htmlspecialchars($service['title']); ?>">

                                            </div>
                                        </div>

                                        <!-- Main Link -->
                                        <a class="pbmit-link" href="<?= htmlspecialchars($service['link']); ?>"
                                            title="Go to <?= htmlspecialchars($service['title']); ?>">
                                        </a>

                                        <!-- Heading -->
                                        <div class="pbmit-heading-box">
                                            <h3 class="pbmit-service-title">
                                                <a href="<?= htmlspecialchars($service['link']); ?>">
                                                    <?= htmlspecialchars($service['title']); ?>
                                                </a>
                                            </h3>
                                        </div>

                                        <!-- Content -->
                                        <div class="pbmit-content-box">

                                            <!-- Number -->
                                            <div class="pbmit-service-number">
                                                <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                                            </div>

                                            <!-- SVG Icon -->
                                            <div class="pbmit-service-icon">
                                                <?= $serviceIcons[$index]; ?>
                                            </div>

                                            <!-- Service Title -->
                                            <h3 class="pbmit-service-title">
                                                <a href="<?= htmlspecialchars($service['link']); ?>">
                                                    <?= htmlspecialchars($service['title']); ?>
                                                </a>
                                            </h3>

                                            <!-- Categories -->
                                            <div class="pbmit-serv-cat">
                                                <a href="services.html" rel="tag">
                                                    <?= htmlspecialchars($service['category_1']); ?>
                                                </a>,

                                                <a href="services.html" rel="tag">
                                                    <?= htmlspecialchars($service['category_2']); ?>
                                                </a>
                                            </div>

                                            <!-- Description -->
                                            <div class="pbmit-service-description">
                                                <?= htmlspecialchars($service['description']); ?>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </article>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </section>
    <!-- Service End -->
</div>
<!-- Page Content End -->


<?php
$content = ob_get_clean();
require 'layout.php';
?>