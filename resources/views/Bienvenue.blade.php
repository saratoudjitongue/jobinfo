@extends('layouts.PagePrincipale')

@section('content')

<!-- Preloader Start -->
    <div id="preloader">
        <div class="fplus-load"></div>
        <img src="TemplatePrincipal/img/core-img/h-logo.png" alt="logo">
    </div>

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="menu-open-close d-flex align-items-center justify-content-center">
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

     <!-- ****** Menu Area Start ****** -->
    <div class="fplus-menu-area">
        <!-- Menu -->
        <div class="fplus-main-menu h-100 d-flex align-items-center">
            <nav class="navbar navbar-expand-lg">
                <div class="" id="fplus-nav">
                    <ul class="navbar-nav" id="fplusNav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('Bienvenue') }}">Acceuil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Acceuil') }}">Nos menus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header Social Icon -->
        <div class="header-social-info d-flex align-items-center justify-content-end">
            <div class="h-social-icon">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- ****** Menu Area End ****** -->

     <!-- ****** Welcome Area Start ****** -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

    <div class="carousel-inner">
         <div class="carousel-item active">
             <section class="fplus-hero-area"  id="home">
                <img class="first-slide" src="Images/Couverture1.jpeg" alt="First slide">
             </section>
                <div class="container">
              <div class="carousel-caption text-left">
                <h1><strong>FLASHFOOD</strong></h1>
                <p>FlashFood vous proposes de nombreuse plats Europeens, Américaine et Africaine à moindre coût</p>
                <p><a class="btn btn-lg btn-primary" href="{{ route('Acceuil') }}" role="button">Nos Menus</a></p>
              </div>
            </div>
         </div>
          <div class="carousel-item">
             <section class="fplus-hero-area"  id="home">
                <img class="second-slide" src="Images/pizza-3569779_1920.jpg" alt="Second slide">
             </section>
                <div class="container">
              <div class="carousel-caption text-left">
                <h1><strong>COMMANDER DEPUIS CHEZ VOUS</strong></h1>
                <p>Grace à FlashFood vous avez la possibilité de commander des plat en ligne depuis chez vous et un payement en ligne sécurisé.</p>
                <p><a class="btn btn-lg btn-primary" href="{{ route('login') }}" role="button">Se Connecter</a></p>
              </div>
            </div>
         </div>
          <div class="carousel-item">
             <section class="fplus-hero-area"  id="home">
                <img class="third-slide" src="Images/baby-1299514_1280.png" alt="Third slide">
             </section>
             <div class="container">
              <div class="carousel-caption text-left">
                <h1><strong>UNE LIVRAISON RAPIDE</strong> </h1>
                <p>Avec une équipe de jeune livreurs dynamique vos plats sont livré dans les plus bref délais et à moindre coût</p>
                <p><a class="btn btn-lg btn-primary" href="{{ url('/register') }}" role="button">Inscrivez-vous</a></p>
              </div>
            </div>
         </div>
    </div>
     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</div>

    <!-- ****** Welcome Area End ****** -->
        <!-- ****** About Us Area Start ****** -->
    <section class="fplus-about-us-area bg-gray section-padding-120" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>A propos</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about-us-content wow fadeInLeftBig" data-wow-delay="0.5">
                <div class="row no-gutters align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="about-us-thumb wow fadeIn" data-wow-delay="1s">
                            <img src="Images/About.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="about-us-text wow fadeIn" data-wow-delay="1.5s">
                            <h4>Qui sommes nous?</h4>
                            <p>FlashFood est une application web inovant dans le secteur des entreprises et services de restauration. Elle permet entre autre de pouvoir passer des commandes des plats en ligne. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Single Feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="1s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="TemplatePrincipal/img/icons/wallet.svg" alt="">
                            <h5>Services</h5>
                        </div>
                        <p>Nous vous proposons de nombreuse plats Europeens, Américaine et Africaine à moindre coût.</p>
                    </div>
                </div>
                <!-- Single Feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="1.5s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="TemplatePrincipal/img/icons/credit-card.svg" alt="">
                            <h5>Commande en ligne</h5>
                        </div>
                        <p>Nous offrons la possibilité de commander nos plats en ligne depuis chez vous et un payement en ligne sécurisé.</p>
                    </div>
                </div>
                <!-- Single Feature -->
                <div class="col-12 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="2s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="TemplatePrincipal/img/icons/switching-user.svg" alt="">
                            <h5>Livraison à domicile</h5>
                        </div>
                        <p>Avec une équipe de jeune livreurs dynamique vos plats sont livré dans les plus bref délais et à moindre coût.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

@endsection