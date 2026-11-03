<aside class="service-sidebar">
    <aside class="widget post-list">
        <h2 class="widget-title">All services</h2>
        <div class="all-post-list">
            <?php
            $currentPage = basename($_SERVER['PHP_SELF']);
            ?>

            <ul>
                <li class="<?= $currentPage === 'service-retina-surgery.php' ? 'post-active' : ''; ?>">
                    <a href="service-retina-surgery.php">Retina Surgery</a>
                </li>

                <li class="<?= $currentPage === 'service-cataract.php' ? 'post-active' : ''; ?>">
                    <a href="service-cataract.php">Cataract</a>
                </li>

                <li class="<?= $currentPage === 'service-glaucoma-diagnosis.php' ? 'post-active' : ''; ?>">
                    <a href="service-glaucoma-diagnosis.php">Glaucoma Diagnosis</a>
                </li>

                <li class="<?= $currentPage === 'service-eye-check-up.php' ? 'post-active' : ''; ?>">
                    <a href="service-eye-check-up.php">Eye Check Up</a>
                </li>

                <li class="<?= $currentPage === 'service-spectacles.php' ? 'post-active' : ''; ?>">
                    <a href="service-spectacles.php">Spectacles</a>
                </li>
            </ul>
        </div>
    </aside>
    <aside class="widget pbmit-service-ad">
        <div class="textwidget">
            <div class="pbmit-service-ads">
                <div class="pbmit-ads-icon">
                    <i class="pbmit-base-icon-phone-1"></i>
                </div>
                <h4 class="pbmit-ads-heading">Looking for trusted<br>eye care?</h4>
                <span class="pbmit-ads-decs">Schedule an appointment with our specialists for eye
                    exams, vision correction and treatments.</span>
                <h3 class="pbmit-ads-call">
                    <a href="tel:+918448780237">+91 8448780237</a>
                </h3>
            </div>
        </div>
    </aside>
</aside>