<!-- 
 * © Code 581 2017
 * All rights reserved
-->

@extends('layouts.master')

@section('content')
<!-- slider start -->
<section class="rex-slider">
    <div class="rex-slider-text">
        <img class="img-responsive wow fadeInDown" data-wow-delay=".25s" data-wow-duration="1.5s" src="img/logo/logoveliki.png" alt="">
        <h1 class="wow zoomIn" data-wow-delay=".75s" data-wow-duration="1.5s">Trg Republike 5</h1>
        <div class="slider-btn-section wow fadeInUp" data-wow-delay="1.25s" data-wow-duration="1.5s">
            <div class="slider-btn">
                <a class="select-btn-1 select-btn-2" href="#rex-menu-list">naš meni</a>
            </div>
        </div>
    </div><!-- /.rex-slider-text close -->
    <div class="rex-main-slider">
        <!-- main-slider imgs -->
        <div id="main-slider" class="rex-owl-carousel">
            <div>
                <img src="img/slider/slider2.jpg" alt="Ambijent Square five">
            </div>
            <div>
                <img src="img/slider/slider3.jpg" alt="Atmosfera Square five">
            </div>
            <div>
                <img src="img/slider/slider4.jpg" alt="Hrana Square five">
            </div>
        </div>
    </div><!-- /.rex-main-slider close -->
</section>
<!-- /.slider close -->
    
<!-- A Passion For Poutine Section -->
<section class="rex-passion-for-poutine">
    <div class="container">
        <div class="row select-row">
            <div class="col-md-6">
                <div class="passion-img">
                    <img src="img/about.jpg" alt="Square Five Sports Pub">
                </div>
            </div>
            <div class="col-md-6 rex-block">
                <div><a name="onama"></a></div>
                <h2>Square Five</h2>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="angle-top">
                                <i class="fa fa-caret-down"></i>
                            </div>
                            <h4 class="panel-title">
                                O nama
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>Nastao krajem 2015. godine sa ciljem da svojim posetiocima pruži nesvakidašnji spoj bara, restorana, sportskog paba i to sve na jednom mestu, koje se nalazi u samom centru Beograda na adresi Trg Republike 5.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="angle-top">
                                <i class="fa fa-caret-down"></i>
                            </div>
                            <h4 class="panel-title">
                                Restoran
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Na ovom zanimljivom mestu možete uživati u vrhunskoj hrani koju za vas pripremaju nasi kuvari,po pristupačnim cenama.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="angle-top">
                                <i class="fa fa-caret-down"></i>
                            </div>
                            <h4 class="panel-title">
                                Sports bar
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Takodje možete bodriti vaš omlijeni tim,uz izbor od preko 50 vrsta piva iz 9 različitih zemalja Evrope.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading collapsed" role="tab" id="headingFour" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <div class="angle-top">
                                <i class="fa fa-caret-down"></i>
                            </div>
                            <h4 class="panel-title">
                                Pop-Rock pab
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <p>Ili pak se opustiti uz koktele i lagane pop-rock zvuke koje za vas svakodnevno izvode naši performeri.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About start -->
<section id="#test" class="rex-about">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 rex-block">
                <!-- rex-about rex-block text -->
                <div><a name="desavanja"></a></div>
                <h2>Dešavanja u Square Five-u </h2>
                <p>Square Five je mesto prepuno dešavanja, a ovo su neka koja slede u narednim danima:
                    </span></p>
            </div><!-- /.col-md-12 close -->
        </div><!-- /.row close -->
        <div class="row select-row">
            <div class="col-md-6 col-sm-12 rex-block">
                <!-- rex-about rex-block tab-navigation -->
                <ul id="tab-navigation">
                    <li  class="active">
                        <h4>6.2. Ponedeljak-Ladies Night</h4>
                        <p>Leave your boyfriend at home! 
                        <br><h5>Rezervacije:(064) 555 5005</h5></p>
                        <div class="about-img  visible-xs visible-sm hidden-md hidden-lg">
                            <img class="img-responsive" src="img/events/ladiesnight.jpg" alt="Restoran Square Five">
                        </div>
                    </li>
                    <li>
                        <h4>7.2. Utorak-Bend Profesori</h4>
                        <p>Fenomenalni Profesori nas uče novim i podsećaju na stare hitove. 
                        <br><h5>Rezervacije:(064) 555 5005</h5></p>
                        <div class="about-img  visible-xs visible-sm hidden-md hidden-lg">
                            <img class="img-responsive" src="img/events/acoustictrio.jpg" alt="Sportski bar Square Five">
                        </div>
                    </li>
                    <li>
                        <h4>9.2. Euroleague-Red Star vs. CSK</h4>
                        <p>Zvezdin put ka TOP 8 se nastavlja,a ovog puta ispit je najteži-gostovanje aktuelnom prvaku evrope.
                        <br><h5>Rezervacije:(064) 555 5005</h5></p>
                        <div class="about-img  visible-xs visible-sm hidden-md hidden-lg">
                            <img class="img-responsive" src="img/events/sport.jpg" alt="Pop Rock Pab Square Five">
                        </div>
                    </li>
                </ul>
            </div><!-- /.col-md-6 close -->
            <div class="col-md-5 col-sm-12  hidden-xs visible-md visible-lg remove-padding-right-style" id="about-tab-images">
                <!-- rex-about rex-block tab-navigation imgs -->
                <div class="about-img">
                    <img class="img-responsive" src="img/events/ladiesnight.jpg" alt="Restoran Square Five">
                </div>
                <div class="about-img">
                    <img class="img-responsive" src="img/events/acoustictrio.jpg" alt="Sportski bar Square Five">
                </div>
                <div class="about-img">
                    <img class="img-responsive" src="img/events/sport.jpg" alt="Pop Rock Pab Square Five">
                </div>

            </div><!-- /.col-md-12 close -->
            <div class="col-md-1 select-col">
                <!-- rex-about rex-block tab-navigation angle -->
                <div class="rex-slide-angle hidden-xs visible-md visible-lg" id="about-tab-nav">
                    <a href="#" class="triangle-up prev"></a>
                    <p><span class="current">01</span><sub>/<span class="total"></span></sub></p>
                    <a href="#" class="triangle-down next"></a>
                </div>
            </div><!-- /.col-md-1 close -->
        </div><!-- /.row close -->
    </div><!-- /.container close -->
</section>
<!-- /#about close -->

<!-- portfolio start -->
<section class="rex-portfolio" data-stellar-background-ratio=".5"  data-stellar-vertical-offset="1200">
    <div class="container">
        <div class="row">
            <div><a name="novmeni"></a></div>
            <div class="col-md-12 rex-block">
                <!-- portfolio title -->
                <h2>Square five- NEW MENU</h2>
            </div>
        </div>
        <!-- rex-portfolio-list -->
        <div class="row rex-portfolio-list">
            <div class="col-md-4 col-sm-12 rex-portfolio-items wow fadeInUp">
                <div class="portfolio-description select-padding-1">
                    <img class="img-responsive" src="img/foods-menu/logohrana.png" alt="New Square Five Menu">
                    <h4>Rižoto sa nečim</h4>
                    <p>Rižoto sa nečim bla bal koje je kul.</p>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>

                    </ul>
                    <p class="dollar-amount">NISKO KALORIČNO</p>
                    <span class="triangle-up-small"></span>
                </div>
                <!-- portfolio-img -->
                <div class="portfolio-img">
                    <img class="img-responsive" src="img/foods-menu/new1.jpg" alt="New Square Five Menu">
                </div>
            </div>
            <div class="col-md-4 col-sm-12 rex-portfolio-items wow fadeInUp" data-wow-delay=".25s">
                <div class="portfolio-description select-padding-2">
                    <span class="triangle-down-small hidden-xs hidden-sm"></span>
                    <img class="img-responsive" src="img/foods-menu/logohrana.png" alt="New Square Five Menu">
                    <h4>Dupli sir BURGER</h4>
                    <p>Dupli sir Square Burger je najbolji.</p>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>

                    </ul>
                    <p class="dollar-amount">PREPORUKA KUĆE</p>
                    <span class="triangle-up-small col-lg-none"></span>
                </div>
                <!-- portfolio-img -->
                <div class="portfolio-img">
                    <img class="img-responsive" src="img/foods-menu/new2.jpg" alt="New Square Five Menu">
                </div>
            </div>
            <div class="col-md-4 col-sm-12 rex-portfolio-items wow fadeInUp" data-wow-delay=".5s">
                <div class="portfolio-description select-padding-1">
                    <img class="img-responsive add-padding" src="img/foods-menu/logohrana.png" alt="New Square Five Menu">
                    <h4>Sufle od Ribizle</h4>
                    <p>Ovo je jedno slatko i lepo jelo.</p>
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-half-o"></i></li>
                    </ul>
                    <p class="dollar-amount">DEZERT</p>
                    <span class="triangle-up-small"></span>
                </div>
                <!-- portfolio-img -->
                <div class="portfolio-img">
                    <img class="img-responsive" src="img/foods-menu/new3.jpg" alt="New Square Five menu">
                </div>
            </div>
        </div><!-- /.row close -->
    </div><!-- /.container close -->
</section>
<!-- /#portfolio close -->

<!-- foods-menu start -->
<section class="rex-dinner-menu" id="rex-menu-list">
    <div><a name="meni"></a></div>
    <div class="container">
        <div class="row select-row">
            <div class="col-md-1 dinner-manu-angle">
                <!-- left-menu angle -->
                <div class="rex-slide-angle hidden-xs visible-md visible-lg" id="foods-tab-nav">
                    <a href="#" class="triangle-up prev"></a>
                    <p><span class="current">01</span><sub>/<span class="total"></span></sub></p>
                    <a href="#" class="triangle-down next"></a>
                </div>
            </div>
            <!-- rex-block content -->
            <div class="col-md-5 rex-block">
                <!-- rex-cover-page-contant style -->
                <div class="rex-cover-page-contant">
                    <!-- rebbon-style content -->
                    <div class="rebbon-style hidden-xs visible-md visible-lg">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p>ocena posetilaca</p>
                    </div>
                    <!-- foods-menu-nav -->
                    <div id="foods-menu-nav">
                        <!-- menu-item -->
                        <div class="menu-item active">
                            <img src="img/foods-menu/logohrana.png" alt="logo hrana">
                            <h2>Square Five Meni</h2>
                            <span>10:00 - 23:00</span>
                            <p>Restoraunt and sports pab</p>
                        </div>
                        <!-- menu-item -->
                        <div class="menu-item">
                            <img src="img/foods-menu/logohrana.png" alt="logo hrana">
                            <h2>Doručak i Snek meni</h2>

                            <p>U skveru postoji veliki izbor snekova odaberite neki uz vaše omiljeno pivo.</p>
                        </div>
                        <!-- menu-item -->
                        <div class="menu-item">
                            <img src="img/foods-menu/logohrana.png" alt="logo hrana">
                            <h2>Italijanski Meni</h2>

                            <p>Osetite ukuse Italije na naš način u srcu Beograda.</p>
                        </div>
                        <div class="menu-item">
                            <img src="img/foods-menu/logohrana.png" alt="logo hrana">
                            <h2>Glavna Jela</h2>

                            <p>Nezaboravni ukusi za prave gastronome.</p>
                        </div>
                        <div class="menu-item">
                            <img src="img/foods-menu/logohrana.png" alt="logo hrana">
                            <h2>Burger Meni</h2>

                            <p>Izaberite neki od naših burgera,verujte po tome smo poznati!</p>
                        </div>
                        <div class="menu-item">
                            <img src="img/foods-menu/logohrana.png" alt="logo hrana">
                            <h2>Sport Meni</h2>

                            <p>Ukoliko ste ipak za neku zdraviju varijantu, i to možete naći u našoj ponudi.</p>
                        </div>
                        <div class="menu-item">
                            <img src="img/foods-menu/logohrana.png" alt="logo hrana">
                            <h2>Dezerti</h2>

                            <p>Želite da se zasladite, na pravom ste mestu!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 select-col hidden-xs hidden-sm" id="foods-menu-list">
                <!-- right-menu -->

                <!-- rex-menu-list -->
                <div class="rex-menu-list item"> 
                    <img src="img/foods-menu/menu1.jpg" alt="Square Five Restoran Meni">
                </div>

                <div class="rex-menu-list item"> 
                    <img src="img/foods-menu/menu2.jpg" alt="Square Five Restoran Meni">                        
                </div>

                <div class="rex-menu-list item"> 
                    <img src="img/foods-menu/menu3.jpg" alt="Square Five Restoran Meni">
                </div>

                <div class="rex-menu-list item"> 
                    <img src="img/foods-menu/menu4.jpg" alt="Square Five Restoran Meni">
                </div>

                <div class="rex-menu-list item"> 
                    <img src="img/foods-menu/menu5.jpg" alt="Square Five Restoran Meni">
                </div>

                <div class="rex-menu-list item"> 
                    <img src="img/foods-menu/menu6.jpg" alt="Square Five Restoran Meni">
                </div>

                <div class="rex-menu-list item"> 
                    <img src="img/foods-menu/menu7.jpg" alt="Square Five Restoran Meni">
                </div>


            </div>
        </div><!-- /.row close -->
    </div><!-- /.container close -->
</section>
<!-- /#foods-menu close -->

<!-- Gallery-section start -->
<section class="rex-gallery" data-stellar-background-ratio=".5"  data-stellar-vertical-offset="2000">
    <div class="container">
        <div class="row select-row">
            <div class="col-md-11 rex-block">
                <div><a name="galerijaslika"></a></div>
                <!-- rex-gallery title -->
                <h2>Galerija slika</h2>
                <!-- gallery slider -->
                <div id="rex-resturant-gallery">

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery1.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery2.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery3.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery4.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery5.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery6.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery7.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery8.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery9.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery10.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery11.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                    <div class="rex-gallery-items">
                        <img class="img-responsive" src="img/gallery/gallery12.jpg" alt="Square Five Galerija slika">
                        <div class="gallery-img-overlay">
                            <div class="gallery-overlay-text">
                                <h4>Nezaboravan provod u skveru</h4>
                                <p>Ovako smo se provodili predhodnih dana. <br></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- /.col-md-12 close -->
            <!-- gallery section angle -->
            <div class="col-md-1 gallery-angle select-col">
                <div class="rex-slide-angle  hidden-xs visible-md visible-lg" id="resturant-slide-navigation">
                    <a href="#" class="triangle-up prev"></a>
                    <p><span class="current">01</span><sub>/<span class="total"></span></sub></p>
                    <a href="#" class="triangle-down next"></a>
                </div>
            </div>
        </div><!-- /.row close -->
    </div><!-- /.container close -->
</section>
<!-- /#gallery close -->

<!-- review-section start -->
<section class="rex-review">
    <div class="container">
        <!-- rex-review title -->
        <h2>Ocene posetilaca</h2>
        <div><a name="oceneposetilaca"></a></div>
        <div class="row">
            <div class="col-md-12">
                <div id="review-carousel" class="owl-carousel">
                    <!-- review-carousel -->
                    <div>
                        <!-- review-carousel items -->
                        <div class="rex-block">
                            <!-- rex-title content -->
                            <div class="rex-title">
                                <div class="rex-title-img">
                                    <div class="rex-img">
                                        <img src="img/experience.jpg" alt="Iskustvo posetilaca Square five">
                                    </div>
                                </div>
                                <h5>Ivana Maksimovic</h5>
                                <p>Dizajner</p>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>ocena 5</span>
                            </div>
                            <!-- rex-title content p -->
                            <p><span>“Square five je fantastican!</span> Mesto na kome mozete ...”</p>
                        </div>
                    </div>
                    <div>
                        <!-- review-carousel items -->
                        <div class="rex-block">
                            <!-- rex-title content -->
                            <div class="rex-title">
                                <div class="rex-title-img">
                                    <div class="rex-img">
                                        <img src="img/experience.jpg" alt="Iskustvo posetilaca Square five">
                                    </div>
                                </div>
                                <h5>Ivana Maksimovic</h5>
                                <p>Dizajner</p>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>ocena 5</span>
                            </div>
                            <!-- rex-title content p -->
                            <p><span>“Square five je fantastican!</span> Mesto na kome mozete ...”</p>
                        </div>
                    </div>
                    <div>
                        <!-- review-carousel items -->
                        <div class="rex-block">
                            <!-- rex-title content -->
                            <div class="rex-title">
                                <div class="rex-title-img">
                                    <div class="rex-img">
                                        <img src="img/experience.jpg" alt="Iskustvo posetilaca Square five">
                                    </div>
                                </div>
                                <h5>Ivana Maksimovic</h5>
                                <p>Dizajner</p>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>ocena 5</span>
                            </div>
                            <!-- rex-title content p -->
                            <p><span>“Square five je fantastican!</span> Mesto na kome mozete ...”</p>
                        </div>
                    </div>
                    <div>
                        <!-- review-carousel items -->
                        <div class="rex-block">
                            <!-- rex-title content -->
                            <div class="rex-title">
                                <div class="rex-title-img">
                                    <div class="rex-img">
                                        <img src="img/experience.jpg" alt="Iskustvo posetilaca Square five">
                                    </div>
                                </div>
                                <h5>Ivana Maksimovic</h5>
                                <p>Dizajner</p>
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>ocena 5</span>
                            </div>
                            <!-- rex-title content p -->
                            <p><span>“Square five je fantastican!</span> Mesto na kome mozete ...”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row close -->
    </div><!-- /.container close -->
</section>
<!-- /#review close -->
@stop