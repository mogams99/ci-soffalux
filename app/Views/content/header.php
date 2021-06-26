<?= $this->extend('page_dashboard'); ?>

<?= $this->section('content_header'); ?>
<header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/header-logo.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>We offer complete ecommerce solutions based on Shopify</h3>
                        <a class="btn-solid-lg page-scroll" href="#details">Discover</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Branding & strategy</h5>
                                <div class="card-text">To build a solid foundation for your online shop you need a strong brand and a bulletproof strategy</div>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Design & development</h5>
                                <div class="card-text">Our team of competent designers and developers are able to create beautiful designs and structured code</div>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-image">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Digital marketing</h5>
                                <div class="card-text">We can deliver a comprehensive marketing plan and then execute it down to the smallest details</div>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of services -->
    </header> <!-- end of header -->
<?= $this->endSection(); ?>