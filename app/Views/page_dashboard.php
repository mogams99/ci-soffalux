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

    <!-- Content -->
    <?= $this->renderSection('content_main'); ?>
    <!-- end of Content -->

    <!-- Footer -->
    <?= $this->include('layout/footer'); ?>
    <!-- end of footer -->

    <!-- Scripts -->
    <?= $this->include('layout/js'); ?>
    <!-- end of scripts -->
</body>
</html>