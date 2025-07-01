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
                <h1 class="breadcumb-title">Layanan Hukum Korporasi</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
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
                            <h2 class="sec-title page-title">Layanan Hukum Korporasi</h2>
                            <p class="">Setiap kegiatan bisnis dan korporasi membutuhkan perlindungan hukum yang kuat untuk mendukung keberlanjutan dan kepatuhan usaha. Kami menyediakan layanan hukum korporasi secara menyeluruh, mulai dari pendirian badan usaha hingga penyelesaian sengketa bisnis.</p>
                            <p class="">Kami mendampingi klien dalam pengelolaan aspek hukum perusahaan, perjanjian bisnis, merger & akuisisi, kepatuhan regulasi, hingga permasalahan ketenagakerjaan.</p>
                            <p class="">Dengan pemahaman mendalam terhadap hukum komersial dan dinamika industri, kami membantu perusahaan Anda tumbuh secara legal, efisien, dan aman.</p>

                            <h2 class="sec-title page-title">Solusi Terintegrasi untuk Dunia Usaha</h2>
                            <p class="mb-30">Layanan kami dirancang untuk membantu pelaku usaha dalam mengelola risiko hukum, menjaga kepatuhan, serta memperkuat posisi hukum dalam setiap transaksi bisnis./p>

                            <div class="checklist list-three-column mb-20">
                                <ul>
                                    <li><i class="fa-regular fa-check"></i> Drafting & Review Kontrak</li>
                                    <li><i class="fa-regular fa-check"></i> Kepatuhan & Perizinan</li>
                                    <li><i class="fa-regular fa-check"></i> Pendirian & Legalitas Perusahaan</li>
                                    <li><i class="fa-regular fa-check"></i> Hukum Ketenagakerjaan</li>
                                    <li><i class="fa-regular fa-check"></i> Penyelesaian Sengketa</li>
                                    <li><i class="fa-regular fa-check"></i> Merger, Akuisisi & Restrukturisasi</li>
                                </ul>
                            </div>
                            <p class="mb-30">Bangun dan jalankan usaha Anda dengan kepastian hukum. Kami siap menjadi mitra hukum strategis bagi pertumbuhan bisnis Anda.</p>

                            <a href="https://wa.me/6282242014744/" class="link-btn style-2"> <i class="fa-regular fa-arrow-right-long"></i> Konsultasi Hukum Korporasi Sekarang</a>
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