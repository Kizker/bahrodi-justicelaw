<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<!-- head -->
<?= $this->include('sections/head'); ?>

<body class="">
    <!-- sidemenu -->
    <?= $this->include('sections/sidemenu'); ?>

    <!-- mobilemenu -->
    <?= $this->include('sections/mobilemenu'); ?>

    <!-- header-area -->
    <?= $this->include('sections/header'); ?>

    <!--==============================
    Breadcumb
============================== -->

    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcrumb-bg.jpg" data-overlay="title" data-opacity="8">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Coming Soon</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Coming Soon</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
About Area  
==============================-->
    <div class="about-1-wrapper space bg-smoke2" id="about-sec">
        <div class="shape-mockup jump" data-left="0%" data-bottom="0%">
            <img src="assets/img/shape/about1-left-shape.png" alt="image">
        </div>
        <div class="shape-mockup jump" data-top="11%" data-right="4%">
            <img src="assets/img/shape/about1-right-top.png" alt="image">
        </div>
        <div class="shape-mockup jump-reverse d-none d-md-block" data-right="0" data-bottom="4%">
            <img src="assets/img/shape/about1-right-bottom.png" alt="image">
        </div>
        <div class="container">
            <div class="row gy-40 gx-60 align-items-center">
                <div class="col-xl-7 mb-xl-0">
                    <div class="img-box1 about-1">
                        <div class="shape-mockup logo-shape">
                            <div class="logo-icon-wrap">
                                <h4 class="logo-icon">
                                    <img src="assets/img/icon/logo-icon-white.png" alt="img">
                                </h4>
                                <div class="logo-icon-wrap__text bg-theme2">
                                    <span class="logo-animation">Coming Soon</span>
                                </div>
                            </div>
                        </div>
                        <div class="img1">
                            <img class="tilt-active" src="assets/img/about/about-3.png" alt="Image">
                        </div>
                        <div class="img2">
                            <div class="img2-top">
                                <img class="tilt-active" src="assets/img/about/about-4.png" alt="Image">
                            </div>
                            <div class="img2-bottom">
                                <img class="tilt-active" src="assets/img/about/about-5.png" alt="Image">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="title-area mb-25">
                        <span class="sub-title before-none">Segera Hadir</span>
                        <h2 class="sec-title">Kami Sedang Mempersiapkan Sesuatu yang Luar Biasa</h2>
                        <p class="sec-text">Saat ini kami sedang menyiapkan layanan terbaik untuk Anda. Tim kami bekerja keras agar Anda segera dapat menikmati pengalaman yang profesional dan terpercaya.</p>
                    </div>
                    <div class="checklist style2 mb-40">
                        <ul>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Layanan inovatif dalam waktu dekat.</li>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Komitmen terhadap kualitas dan kepercayaan.</li>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Didukung oleh tim profesional berpengalaman.</li>
                            <li><i class="fa-sharp fa-solid fa-circle-check"></i> Fokus pada kepuasan dan kebutuhan pengguna.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

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