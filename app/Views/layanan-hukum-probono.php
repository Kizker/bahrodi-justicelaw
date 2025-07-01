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
                <h1 class="breadcumb-title">Layanan Hukum Probono</h1>
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
                            <h2 class="sec-title page-title">Layanan Hukum Pro Bono</h2>
                            <p class="">Kami percaya bahwa akses terhadap keadilan adalah hak setiap individu, tanpa memandang latar belakang ekonomi. Layanan Pro Bono kami hadir sebagai bentuk tanggung jawab sosial untuk memberikan bantuan hukum secara Gratis bagi mereka yang membutuhkan namun memiliki keterbatasan finansial. Layanan ini mencakup pendampingan hukum bagi masyarakat kurang mampu, kelompok rentan, organisasi sosial, dan kasus-kasus yang menyangkut kepentingan umum. Kami menyediakan konsultasi, penyusunan dokumen hukum, hingga representasi di pengadilan secara profesional dan tanpa biaya.
                                Dengan semangat keadilan dan kemanusiaan, kami berkomitmen untuk menggunakan keahlian hukum kami sebagai sarana pemberdayaan dan perlindungan bagi mereka yang tidak memiliki daya tawar dalam sistem hukum.</p>

                            <h2 class="sec-title page-title">Humanis dan Bertanggung Jawab</h2>
                            <p class="mb-30">Layanan Pro Bono kami bukan sekadar bantuan hukum tanpa biaya, tetapi sebuah upaya aktif untuk menciptakan sistem hukum yang lebih adil dan inklusif. Kami membuka ruang konsultasi bagi siapa pun yang membutuhkan pendampingan hukum dan memenuhi syarat sebagai penerima layanan Pro Bono.</p>

                            <div class="checklist list-three-column mb-20">
                                <ul>
                                    <li><i class="fa-regular fa-check"></i> Konsultasi Gratis</li>
                                    <li><i class="fa-regular fa-check"></i> Korban Kekerasan</li>
                                    <li><i class="fa-regular fa-check"></i> Kelompok Rentan</li>
                                    <li><i class="fa-regular fa-check"></i> LSM & Komunitas</li>
                                    <li><i class="fa-regular fa-check"></i> Advokasi Kepentingan Publik</li>
                                    <li><i class="fa-regular fa-check"></i> Bantuan Masyarakat Miskin</li>
                                </ul>
                            </div>
                            <p class="mb-30">Jika Anda atau organisasi Anda membutuhkan bantuan hukum dan memenuhi kriteria layanan Pro Bono, jangan ragu untuk menghubungi kami.</p>

                            <a href="https://wa.me/6282242014744/" class="link-btn style-2"> <i class="fa-regular fa-arrow-right-long"></i> Ajukan Bantuan Hukum Pro Bono Sekarang</a>
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