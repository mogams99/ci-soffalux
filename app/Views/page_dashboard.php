<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('layout/head'); ?>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Navigation -->
    <?= $this->include('layout/navbar'); ?>
    <!-- end of navigation -->

    <!-- Header -->
    <?= $this->include('layout/header'); ?>
    <!-- end of header -->

    <!-- Introduction -->
    <?= $this->include('layout/introduction'); ?>
    <!-- end of Introduction -->

    <!-- Our Services -->
    <?= $this->include('layout/services'); ?>
    <!-- end of Our Services -->

    <!-- Details Lightbox -->
    <!-- Lightbox -->
	<?= $this->include('layout/lightbox'); ?>
    <!-- end of lightbox -->
    <!-- end of details lightbox -->

    <!-- Vis & Misi -->
    <?= $this->include('layout/visimisi'); ?>
    <!-- end of Vis & Misi -->

    <!-- Projects -->
    <?= $this->include('layout/feedback'); ?>
    <!-- end of projects -->

    <!-- About -->
    <?= $this->include('layout/about'); ?>
    <!-- end of about -->

    <!-- Contact -->
    <?= $this->include('layout/contact'); ?>
    <!-- end of contact -->

    <!-- Footer -->
    <?= $this->include('layout/footer'); ?>
    <!-- end of footer -->

    <!-- Scripts -->
    <?= $this->include('layout/js'); ?>
</body>
</html>