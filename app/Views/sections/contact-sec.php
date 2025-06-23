<section class="space overflow-hidden bg-theme--3" id="contact-sec">

    <div class="shape-mockup jump d-none d-xl-block" data-top="0%" data-left="0%">
        <img src="assets/img/shape/contact-3-left-top.png" alt="shape img">
    </div>
    <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="0%" data-right="0%">
        <img src="assets/img/shape/contact-3-right-bottom.png" alt="shape img">
    </div>
    <div class="container">
        <div class="row gx-60 gy-40">
            <div class="col-xl-6">
                <div class="title-area">
                    <span class="sub-title before-none">Work Process</span>
                    <h2 class="sec-title text-white">Ingin tahu bagaimana kami membantu Anda?</h2>
                    <p class="sec-text">Tim pengacara kami berdedikasi untuk mendengarkan setiap kekhawatiran Anda dengan seksama, guna memahami situasi unik yang Anda hadapi.</p>
                </div>
                <div class="contact-icon-box-wrap style-3">
                    <div class="info-box">
                        <div class="info-box_icon">
                            <i class="fa-regular fa-location-dot"></i>
                        </div>
                        <div class="info-contnt">
                            <h4 class="footer-info-title">Lokasi</h4>
                            <p class="info-box_text">371 7th Ave, New York, NY 10001</p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-box_icon">
                            <i class="fa-regular fa-phone"></i>
                        </div>

                        <div class="info-contnt">
                            <h4 class="footer-info-title">Telpon</h4>

                            <p class="info-box_text">
                                <a href="tel:+15264855467" class="info-box_link">+ 152-6485-5467</a>
                                <a href="tel:+15264855467" class="info-box_link">+ 152-6485-5467</a>
                            </p>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-box_icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>

                        <div class="info-contnt">
                            <h4 class="footer-info-title">Email</h4>
                            <p class="info-box_text">
                                <a href="mailto:info@kleanix.com" class="info-box_link">info@ensaf.com</a>
                                <a href="mailto:info@kleanix.com" class="info-box_link">info@ensaf.com</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="contact-form style-3">
                    <div class="title-area mb-35">
                        <span class="sub-title justify-content-center text-white">Ada Pertanyaan?</span>
                        <h4 class="sec-title text-white">Hubungi Kami</h4>
                    </div>

                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php elseif (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                    <?php endif; ?>

                    <form action="<?= base_url('contact/send'); ?>" method="POST" class="quote-form">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="name" placeholder="Nama" required>
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" placeholder="Nomor Telepon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Pesan Anda" required></textarea>
                                <i class="fas fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12 mt-2">
                                <button class="th-btn bg-theme2 w-100">Kirim Sekarang <i class="fa-regular fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>