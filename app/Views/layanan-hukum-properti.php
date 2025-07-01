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
                <h1 class="breadcumb-title">Layanan Hukum Properti</h1>
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
                            <h2 class="sec-title page-title">Layanan Hukum Properti</h2>
                            <p class="">Transaksi dan kepemilikan properti melibatkan nilai aset yang besar dan risiko hukum yang tinggi. Oleh karena itu, diperlukan pendampingan hukum yang cermat agar seluruh proses berjalan dengan aman, sah, dan terlindungi dari potensi sengketa di masa depan.</p>
                            <p class="">Kami menyediakan layanan hukum properti yang komprehensif bagi individu, perusahaan, pengembang, maupun investor. Mulai dari pengecekan legalitas tanah, pendampingan jual beli, pengurusan izin bangunan, hingga penyelesaian sengketa kepemilikan atau batas tanah. </p>
                            <p class="">Kami bekerja dengan teliti untuk memastikan setiap dokumen, proses, dan transaksi properti Anda memenuhi aspek hukum secara menyeluruh.</p>

                            <h2 class="sec-title page-title">Kepastian Hukum Aset Properti Anda</h2>
                            <p class="mb-30">Kami membantu klien memahami dan menyelesaikan berbagai persoalan hukum properti dengan pendekatan profesional, efisien, dan strategis. Fokus kami adalah memberikan perlindungan hukum maksimal atas aset dan investasi properti Anda.</p>

                            <div class="checklist list-three-column mb-20">
                                <ul>
                                    <li><i class="fa-regular fa-check"></i> Jual Beli & Sewa Properti</li>
                                    <li><i class="fa-regular fa-check"></i> Peralihan Hak & Waris</li>
                                    <li><i class="fa-regular fa-check"></i> Sengketa Kepemilikan & Batas</li>
                                    <li><i class="fa-regular fa-check"></i> Cek & Validasi Sertifikat</li>
                                    <li><i class="fa-regular fa-check"></i> Izin Bangunan & Legalitas</li>
                                    <li><i class="fa-regular fa-check"></i> Investasi & Properti Komersial</li>
                                </ul>
                            </div>
                            <p class="mb-30">Miliki pendamping hukum yang paham dan berpengalaman dalam urusan properti. Kami siap melindungi kepentingan Anda di setiap transaksi dan penyelesaian sengketa properti.</p>

                            <a href="https://wa.me/6282242014744/" class="link-btn style-2"> <i class="fa-regular fa-arrow-right-long"></i> Konsultasi Hukum Properti Sekarang</a>
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