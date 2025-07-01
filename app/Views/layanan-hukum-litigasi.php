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
                <h1 class="breadcumb-title">Layanan Hukum Litigasi</h1>
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
                            <h2 class="sec-title page-title">Layanan Hukum Litigasi</h2>
                            <p class="">Litigasi adalah proses hukum untuk menyelesaikan sengketa melalui sistem peradilan. Proses ini memerlukan pendekatan yang terstruktur dan strategis dalam menyampaikan perkara di hadapan hakim, guna memastikan hak dan kepentingan Anda terlindungi di setiap tahapan hukum. Layanan litigasi kami mencakup berbagai jenis perkara hukum, mulai dari perdata, pidana, tata usaha negara, hingga hukum konstitusi. Baik Anda sebagai penggugat maupun tergugat, kami siap mewakili Anda dengan keahlian hukum yang kuat, integritas, dan komitmen tinggi. Kami mendampingi klien sejak tahap awal investigasi dan pengajuan gugatan, proses pra-persidangan, sidang di pengadilan, hingga upaya hukum lanjutan bila diperlukan. Dengan fokus pada strategi dan kesiapan dokumen hukum, kami berupaya meraih hasil terbaik untuk perkara Anda.</p>

                            <h2 class="sec-title page-title">Ajukan Perkara dengan Percaya Diri</h2>
                            <p class="mb-30">Kami memastikan setiap klien mendapatkan pendampingan hukum secara menyeluruh di pengadilan. Mulai dari analisis hukum awal hingga pelaksanaan putusan, kami berkomitmen memperjuangkan hak dan kepentingan hukum Anda.</p>

                            <div class="checklist list-three-column mb-20">
                                <ul>
                                    <li><i class="fa-regular fa-check"></i> Litigasi Perdata</li>
                                    <li><i class="fa-regular fa-check"></i> Pembelaan Pidana</li>
                                    <li><i class="fa-regular fa-check"></i> Sengketa Komersial</li>
                                    <li><i class="fa-regular fa-check"></i> Sengketa Konstitusi</li>
                                    <li><i class="fa-regular fa-check"></i> Sengketa Administrasi Negara</li>
                                    <li><i class="fa-regular fa-check"></i> Eksekusi Putusan Pengadilan</li>
                                </ul>
                            </div>
                            <p class="mb-30">Kami percaya bahwa setiap perkara memiliki solusi yang adil jika ditangani dengan tepat. Serahkan urusan hukum Anda kepada tim yang profesional dan berpengalaman.</p>

                            <a href="https://wa.me/6282242014744/" class="link-btn style-2"> <i class="fa-regular fa-arrow-right-long"></i> Konsultasi Awal Gratis - Klik di sini</a>
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