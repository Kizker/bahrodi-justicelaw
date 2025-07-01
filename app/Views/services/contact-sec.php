<section id="contact-sec" class="space overflow-hidden" data-overlay="title" data-opacity="8" data-bg-src="assets/img/bg/contact-form-2bg.jpg">

    <div class="shape-mockup contact_2-right">
        <img src="assets/img/contact/contact_2-right.png" alt="shape img">
    </div>
    <div class="contact-2-video-btn">
        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video">
            <i class="fa-sharp fa-solid fa-play"></i>
        </a>
    </div>
    <div class="container">
        <div class="row gx-60 gy-40">
            <div class="col-lg-7 col-xl-6">
                <div class="contact-form style-2">
                    <div class="title-area mb-35">
                        <span class="sub-title justify-content-center text-white">Ada Pertanyaan?</span>
                        <h4 class="sec-title text-white">Hubungi Kami</h4>
                    </div>

                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php elseif (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                    <?php endif; ?>

                    <form action="<?= base_url('contact/send-service'); ?>" method="POST" class="quote-form">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Nomor Telepon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Pesan Anda"></textarea>
                                <i class="fas fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12 mt-2">
                                <button class="th-btn bg-theme w-100">Kirim Sekarang <i class="fa-regular fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>