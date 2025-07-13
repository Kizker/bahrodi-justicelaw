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
                <h1 class="breadcumb-title">Layanan Kurator & Konsultasi Pajak</h1>
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
                            <h2 class="sec-title page-title">Layanan Kurator & Konsultasi Pajak</h2>
                            <p class="">Dalam dunia usaha, masalah finansial seperti kepailitan serta kewajiban perpajakan yang kompleks membutuhkan penanganan profesional dan terintegrasi. Kami hadir sebagai Kurator berlisensi dan Konsultan Pajak resmi, memberikan solusi hukum yang menyeluruh untuk melindungi kepentingan hukum dan keuangan klien secara berkelanjutan.</p>
                            <p class="">Layanan kami memastikan proses pemberesan aset debitur pailit berjalan tertib dan sah menurut hukum, serta membantu klien mengelola kewajiban perpajakan dengan efisien dan sesuai peraturan perundang-undangan yang berlaku.</p>

                            <h2 class="sec-title page-title">Kepatuhan Pajak dalam Satu Layanan</h2>
                            <p class="mb-30">Kami memberikan pendekatan yang proaktif dan tepat sasaran dalam menangani kondisi usaha yang sedang menghadapi tekanan finansial maupun tantangan kepatuhan pajak.</p>

                            <div class="checklist list-three-column mb-20">
                                <ul>
                                    <li><i class="fa-regular fa-check"></i> Tugas & Penunjukan Kurator oleh Pengadilan</li>
                                    <li><i class="fa-regular fa-check"></i> Pendampingan Proses PKPU</li>
                                    <li><i class="fa-regular fa-check"></i> Pengurusan Boedel Pailit & Daftar Piutang</li>
                                    <li><i class="fa-regular fa-check"></i> Perencanaan & Optimalisasi Pajak</li>
                                    <li><i class="fa-regular fa-check"></i> Pendampingan Pemeriksaan & Sengketa Pajak</li>
                                    <li><i class="fa-regular fa-check"></i> Pengisian & Pelaporan SPT Tahunan</li>
                                </ul>
                            </div>
                            <p class="mb-30">Dengan pendekatan yang solutif dan terukur, kami siap menjadi mitra hukum dan perpajakan yang menjaga bisnis Anda tetap di jalur yang legal, sehat, dan berkelanjutan.</p>

                            <a href="https://wa.me/6282242014744/" class="link-btn style-2"> <i class="fa-regular fa-arrow-right-long"></i> Konsultasi Sekarang</a>
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