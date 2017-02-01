<!DOCTYPE html>
<!-- 
 * © Code 581 2017
 * All rights reserved
 -->
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="HandheldFriendly" content="true" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        
        @section('title-meta')
        <title>Square Five Bar & Restaurant- Trg Republike 5</title>
        <meta property="fb:pages" content="square.five.belgrade">
        <meta name="description" content="Square Five Bar & Restaurant jedinstven koncept pop-rock paba, sportskog bara i restorana na jednom mestu u samom srcu Beograda na adresi Trg Republike 5. Info: (064) 555 5005 ">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://www.squarefivebar.rs">
        <meta property="og:title" content="Square Five Bar & Restaurant- Trg Republike 5" />
        <meta property="og:description" content="Square Five Bar & Restaurant jedinstven koncept pop-rock paba, sportskog bara i restorana na jednom mestu u samom srcu Beograda na adresi Trg Republike 5. Info: (064) 555 5005" />
        <meta property="og:site_name" content="Square Five Bar & Restaurant">
        <meta property="og:image" content=""/>
        @show

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS -->
        <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="css/vendor/owl.carousel.css">
        <link rel="stylesheet" href="css/vendor/slimmenu.css">
        <link rel="stylesheet" href="css/vendor/prettyPhoto.css">
        <link rel="stylesheet" href="css/vendor/slick.css">
        <link rel="stylesheet" href="css/vendor/animate.css">
        <!-- Saladiya Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    </head>
    <body>
    <!--[if lt IE 8]>
        <p class="rex-browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- header start -->
    <header class="container-fluid" id="sticky-menu">
        <!-- Start Main menu -->
        <div class="row small-menu nav-container nav-bottom-border select-row nav-background-color">
            <div class="col-md-2 col-sm-12 no-padding rex-logo select-col background-color">
                <!-- Our logo -->
                <a href="index.html">
                    <img class="small-logo small-only" src="img/logo/logomali.png" alt="Logo Mali">
                    <img class="large-logo large-only hidden-xs" src="img/logo/logoveliki1.png" alt="Logo Veliki">
                </a>
            </div>
            <div class="col-md-2 col-sm-3 rex-contact-phone">
                <!-- telephone and social media -->
                <p class="phone-addres-header large-only">Rez & info: <a href="tel:+381645555005" target="_top">+381 (064) 555 5005</a></p>
                <div class="rex-social-profiles">
                    <div class="media-link">
                        <a class="icon-link large-only main socialTrigger" href="#">
                            <i class="fa fa-share-alt"></i>
                            <span class="hidden-xs large-only">Pratite nas</span>
                        </a>
                        <ul class="social-profiles-links large-only animated  hidden socialProfileforTrigger">
                            <li><a href="https://www.instagram.com/square.five/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/square.five.belgrade/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- col-md-3 close -->
            <div class="col-md-5 col-sm-5 rex-main-menu">
                <!-- large-menu > bottom menu list -->
                <div class="rex-main-inline-manu large-only">
                    <ul id="navigation" class="slimmenu rex-navigatin">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#onama">O nama</a></li>
                        <li><a href="#novmeni">Novi meni</a></li>
                        <li><a href="#meni">Meni</a></li>
                        <li><a href="#galerijaslika">Galerija slika</a></li>
                        <li><a href="#oceneposetilaca">Ocene posetilaca</a></li>
                    </ul>
                </div>
            </div><!-- /.col-md-4 close -->
            <div class="col-md-3 col-sm-4 search">
               
                <div class="rex-show-menu">
                    <!-- Show and close option -->
                    <button class="btn btn-default toggle-menu" type="submit"> meni <i class="fa fa-angle-down"></i></button>
                </div>
            </div><!-- /.col-md-3 close -->
        </div><!-- /.row close -->
    </header><!-- /header close -->
    
    @yield('content')

    <!-- footer start -->
    <footer>
        <div class="container-fluid">
            <div class="col-md-2 col-lg-2 col-sm-12 rex-block hidden-xs hidden-md visible-lg wow fadeInLeft">
                    <!-- contact-info -->
                <div class="rex-contact-info">
                    <a href="index.html"><img src="img/logo/logofuter.png" alt="Logo Square Five"></a>
                    <p class="home-address">Trg Republike 5, <br/>11000 Beograd</p>
                    <p class="phone-number">telefon:  <a href="tel:+3810645555005" target="_top">+381 (064) 555 5005</a>
                    <p class="email-address"><a href="mailto:office@squarefivebar.rs" target="_top">email: office@squarefivebar.rs</a></p>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 col-sm-12 rex-block wow fadeInDown">
                    <!-- opening-hours -->
                <div class="rex-opening-hours">
                    <div class="rex-offers select-col-md">
                        <ul>
                            <li>
                                <img src="img/footer-img/spoon-icon.png" alt="">
                                <h5>Tradicionalna i internacionalna kuhinja</h5>
                                <span class="highlights-font hidden">Cekamo vas</span>
                            </li>
                            <li>
                                <h5>Ponedeljak- Cetvrtak</h5>
                                <p> <span>10:00 – 01:00</span></p>
                                
                            </li>
                            <li class="select-li">
                                <h5>Petak-Subota</h5>
                                <p> <span>10:00 – 02:00</span></p>
                                
                            </li>
                            <li>
                               <h5>Nedelja</h5>
                                <p> <span>10:00 – 01:00</span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright  hidden-xs hidden-md visible-lg">
                         <p>&copy; Copyright 2017 <span>Code581</span>. Sva prava zadržana</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-3 col-sm-12 rex-block wow fadeInRight">
                    <!-- newsletter -->
                <div class="rex-newsletter">
                    <div class="rex-newsletter-section">
                        <div class="rex-newsletter-contant">
                            <h4>Partneri</h4>
                            
                            
                        </div>
                    </div>
                    <p class="hidden-xs hidden-sm hidden-md visible-lg">squarefivebar.rs je projekat firme  <span><a href="http://code581.rs/">Code581</a></span></p>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 rex-block visible-xs visible-sm visible-md hidden-lg">
                <!-- contact-info -->
                <div class="rex-contact-info">
                    <a href="index.html"><img src="img/logo/logofuter.png" alt=""></a>
                    <p class="home-address">Trg Republike 5, <br/> 11000 Beograd</p>
                    <p class="phone-number">telephone:  <a href="tel:+381064555500" target="_top">+381 (064) 555 5005</a>
                    <p class="email-address"><a href="mailto:email@yourdomain.com" target="_top">email: office@squarefivebar.rs</a></p>
                </div>
                <div class="copyright  visible-xs visible-sm visible-md hidden-lg">
                    <p>squarefivebar.rs je projekat firme <span><a href="http://code581.rs/">Code581</a></span></p>
                    <p>&copy; Copyright 2017 <span>Code581</span>. Sva prava zadržana</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer close -->
    
    <!-- JavaScript -->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/wow.min.js"></script>
    <script src="js/vendor/masonry.pkgd.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.min.js"></script>
    <script src="js/vendor/jquery.sticky.js"></script>
    <script src="js/vendor/jquery.slimmenu.min.js"></script>
    <script src="js/vendor/jquery.stellar.min.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/retina.min.js"></script>
    <script src="js/vendor/share.js"></script>
    <script src="js/vendor/jquery.prettyPhoto.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <!-- Main Saladiya JS -->
    <script src="js/main.js"></script>
    </body>
</html>