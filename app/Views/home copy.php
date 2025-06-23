<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- head -->
<?= $this->include('sections/head'); ?>

<body class="bg-black2">
    <!-- sidemenu -->
    <?= $this->include('sections/sidemenu'); ?>

    <!-- mobilemenu -->
    <?= $this->include('sections/mobilemenu'); ?>

    <!-- header-area -->
    <?= $this->include('sections/header'); ?>

    <!-- hero -->
    <?= $this->include('sections/hero'); ?>

    <!-- brand -->
    <?= $this->include('sections/brand'); ?>

    <!-- about -->
    <?= $this->include('sections/about'); ?>

    <!-- service-sec -->
    <?= $this->include('sections/service-sec'); ?>

    <!-- gallery -->
    <?= $this->include('sections/gallery'); ?>

    <!-- process-sec -->
    <?= $this->include('sections/process-sec'); ?>

    <!-- team-sec -->
    <?= $this->include('sections/team-sec'); ?>

    <!-- feature -->
    <?= $this->include('sections/feature'); ?>

    <!-- testi-sec -->
    <?= $this->include('sections/testi-sec'); ?>

    <!-- contact-sec -->
    <?= $this->include('sections/contact-sec'); ?>

    <!-- blog-sec -->
    <?= $this->include('sections/blog-sec'); ?>

    <!-- footer -->
    <?= $this->include('sections/footer'); ?>

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