<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<?= $this->include('sections/head'); ?>

<body class="">

    <!-- sidemenu -->
    <?= $this->include('sections/sidemenu'); ?>

    <!-- mobilemenu -->
    <?= $this->include('services/mobilemenu'); ?>

    <!-- header-area -->
    <?= $this->include('services/header'); ?>

    <!-- Breadcumb -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcrumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Service Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
==============================-->
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single mb-30">
                        <div class="page-img">
                            <img src="assets/img/service/service_details.jpg" alt="Service Image">
                        </div>
                        <div class="page-content">
                            <h2 class="sec-title page-title">Corporate Law</h2>
                            <p class="">Corporate law is a complex area of law that governs the formation, organization, and operation of corporations. It encompasses a wide range of legal issues, including business formation, governance, financing, mergers and acquisitions, corporate compliance, intellectual property, contracts, and litigation. Businesses must be aware of the legal requirements and regulations that apply to their specific industry and ensure that they are in compliance with all applicable laws</p>
                            <p class="mb-50">Understanding the legal requirements and regulations that apply to your corporation is essential for ensuring its success and protecting your interests. Consulting with a corporate attorney can provide you with the guidance and expertise you need to navigate the complexities of corporate law. economic impacts of its activities. Many corporations are increasingly focused on CSR as a way to build.</p>

                            <h2 class="sec-title page-title">File The Case To The Court</h2>
                            <p class="mb-30">Understanding the legal requirements and regulations that apply to your corporation is essential for ensuring its success and protecting your interests. Consulting with a corporate attorney can provide you with the guidance and expertise you need to navigate the complexities of corporate law. </p>

                            <div class="checklist list-three-column mb-20">
                                <ul>
                                    <li><i class="fa-regular fa-check"></i> Mergers and Acquisitions </li>
                                    <li><i class="fa-regular fa-check"></i> Corporate Compliance</li>
                                    <li><i class="fa-regular fa-check"></i> Non-profit Corporations</li>
                                    <li><i class="fa-regular fa-check"></i> International Corporate Law</li>
                                    <li><i class="fa-regular fa-check"></i> Corporate Social</li>
                                    <li><i class="fa-regular fa-check"></i> International Corporate</li>
                                </ul>
                            </div>
                            <a href="/coming" class="link-btn style-2"> <i class="fa-regular fa-arrow-right-long"></i> Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">

                    <!-- Side Area -->
                    <?= $this->include('services/aside'); ?>

                </div>
            </div>
        </div>
    </section>

    <!-- testi-sec -->
    <?= $this->include('services/testi-sec'); ?>

    <!-- contact-sec -->
    <?= $this->include('services/contact-sec'); ?>

    <!-- footer -->
    <?= $this->include('sections/footer'); ?>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!-- scripts -->
    <?= $this->include('sections/scripts'); ?>
</body>

</html>