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
                        <h1 class="pbmit-tbar-title">Blog</h1>
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
                        <span><span class="post-root post post-post current-item">Blog</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">

    <!-- Blog Start -->
    <section class="section-md">
        <div class="container">
            <div class="pbmit-heading-subheading text-center animation-style3">
                <h4 class="pbmit-subtitle">READ OUR BLOG</h4>
                <h2 class="pbmit-title">Eye Care Tips &amp; Latest Updates</h2>
                <div class="pbmit-heading-desc">
                    Explore helpful eye care tips, treatment information and the latest updates
                    to help you protect and maintain healthy vision.
                </div>
            </div>

            <div class="row">

                <!-- Blog 1 -->
                <article class="pbmit-blog-style-1 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="pbminfotech-box-content">

                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-container-inner">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/blog/blog-one.png" class="img-fluid"
                                                alt="Eye care tips">
                                        </div>
                                    </div>

                                    <a class="pbmit-link" href="blog-single-detail.html"
                                        title="Eye care tips for healthy vision">
                                    </a>
                                </div>
                            </div>

                            <div class="pbmit-content-wrapper">
                                <h3 class="pbmit-post-title">
                                    <a href="blog-single-detail.html">
                                        5 Simple Tips to Keep Your Eyes Healthy
                                    </a>
                                </h3>
                                <div class="pbminfotech-box-desc">
                                    Discover simple daily habits that can help protect your eyesight, reduce eye strain
                                    and support better long-term eye health.
                                </div>
                            </div>

                        </div>
                    </div>
                </article>


                <!-- Blog 2 -->
                <article class="pbmit-blog-style-1 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="pbminfotech-box-content">

                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-container-inner">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/blog/blog-two.png" class="img-fluid"
                                                alt="Cataract treatment">
                                        </div>
                                    </div>

                                    <a class="pbmit-link" href="blog-single-detail.html"
                                        title="Understanding cataract symptoms and treatment">
                                    </a>
                                </div>
                            </div>

                            <div class="pbmit-content-wrapper">
                                <h3 class="pbmit-post-title">
                                    <a href="blog-single-detail.html">
                                        Cataract: Symptoms, Causes &amp; Treatment Options
                                    </a>
                                </h3>
                                <div class="pbminfotech-box-desc">
                                    Learn about common cataract symptoms, possible causes, diagnosis and treatment
                                    options that can help restore clearer vision.
                                </div>
                            </div>
                        </div>
                    </div>
                </article>


                <!-- Blog 3 -->
                <article class="pbmit-blog-style-1 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="pbminfotech-box-content">

                            <div class="pbmit-featured-container">
                                <div class="pbmit-featured-container-inner">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/blog/blog-three.png" class="img-fluid"
                                                alt="Diabetic eye care">
                                        </div>
                                    </div>

                                    <a class="pbmit-link" href="blog-single-detail.html"
                                        title="Diabetes and eye health">
                                    </a>
                                </div>
                            </div>

                            <div class="pbmit-content-wrapper">
                                <h3 class="pbmit-post-title">
                                    <a href="blog-single-detail.html">
                                        How Diabetes Can Affect Your Eye Health
                                    </a>
                                </h3>
                                <div class="pbminfotech-box-desc">
                                    Understand how diabetes can affect your eyes and why regular eye examinations are
                                    important for early detection and proper care.
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Blog End -->
</div>
<!-- Page Content End -->


<?php
$content = ob_get_clean();
require 'layout.php';
?>