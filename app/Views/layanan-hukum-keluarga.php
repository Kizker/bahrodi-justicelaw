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
                <h1 class="breadcumb-title">Layanan Hukum Keluarga</h1>
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
                            <h2 class="sec-title page-title">Layanan Hukum Keluarga</h2>
                            <p class="">Permasalahan keluarga seringkali menyentuh aspek hukum yang sensitif dan kompleks. Kami hadir untuk membantu Anda menyelesaikan persoalan hukum keluarga dengan pendekatan yang profesional, empatik, dan berorientasi pada solusi terbaik bagi semua pihak.
                                Layanan hukum keluarga kami mencakup penyelesaian sengketa perdata dalam lingkup rumah tangga dan hubungan keluarga, termasuk perceraian, hak asuh anak, pembagian harta, hingga mediasi internal keluarga. Kami memastikan proses hukum berjalan dengan penuh kehati-hatian, menjaga privasi, dan tetap berpegang pada prinsip keadilan.
                                Dengan pemahaman mendalam terhadap hukum keluarga dan dinamika personal di dalamnya, kami memberikan perlindungan hukum yang menyeluruh untuk setiap individu yang menghadapi masalah keluarga.</p>

                            <h2 class="sec-title page-title">Pendampingan yang Peka dan Bijaksana</h2>
                            <p class="mb-30">Kami membantu klien dalam setiap tahapan proses hukum keluarga, dari konsultasi awal hingga penyelesaian akhir, dengan mengedepankan pendekatan damai dan perlindungan terhadap hak-hak anggota keluarga.</p>

                            <div class="checklist list-three-column mb-20">
                                <ul>
                                    <li><i class="fa-regular fa-check"></i> Perceraian & Gugat Cerai</li>
                                    <li><i class="fa-regular fa-check"></i> Hak Asuh & Nafkah Anak</li>
                                    <li><i class="fa-regular fa-check"></i> Perjanjian Pra-Nikah</li>
                                    <li><i class="fa-regular fa-check"></i> Mediasi Keluarga</li>
                                    <li><i class="fa-regular fa-check"></i> Pembagian Harta Gono-Gini</li>
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