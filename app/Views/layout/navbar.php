<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="<?= base_url('/') ?>"><img src="images/logo.svg" alt="alternative"></a>  

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Spify</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about" hidden>Contact Us</a>
                    </li>
                    <li class="nav-item dropdown" hidden>
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact Us</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack" hidden>
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-whatsapp fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack" hidden>
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->