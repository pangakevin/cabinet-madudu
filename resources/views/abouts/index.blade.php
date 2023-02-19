<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Cabinet | Ministère des Finances</title>
    <meta name="description" content="Cabinet du Ministère des Finances de la République Démocratique du Congo" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo_white.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.5-alpha.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- ========================= header start ========================= -->
    @include('layouts.header')
    <!-- ========================= header end ========================= -->
    <!-- ========================= about-section start ========================= -->
    <!--<section  class="about-section pt-120">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-xl-10 col-lg-11 mx-auto">-->
    <!--                <div class="about-content text-center mb-55">-->
    <!--                    <div class="section-title mb-55">-->
    <!--                        <span class="wow fadeInDown" data-wow-delay=".2s">Le Cabinet</span>-->
    <!--                        <h2 class="mb-30 wow fadeInUp" data-wow-delay=".4s">-->
    <!--                            Ministère de Finances de la RDC-->
    <!--                        </h2>-->
    <!--                    </div>-->
    <!--                    <p class="mt-3 mb-55 wow fadeInUp" data-wow-delay=".6s">-->
    <!--                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed-->
    <!--                        diam nonumy eirmod tempor invidunt ut labore et dolore magna-->
    <!--                        aliquyam erat, sed diam voluptua. At vero eos et accusam et-->
    <!--                        justo duo dolores et ea rebum Stet clita kasd gubergren, no sea-->
    <!--                        takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum-->
    <!--                        dolor sqit consetetur sadipscing elitr, sed diam nonumy eirmod-->
    <!--                        tempor invidunt.-->
    <!--                    </p>-->

    <!--                    <a href="/histoire"  class="btn wow fadeInUp" data-wow-delay=".8s">-->
    <!--                        <div class="box-1wcm w-50 m-auto">-->
    <!--                            <div class="btnwcm btn-onewcm">-->
    <!--                                <span>Textes Fondateurs</span>-->

    <!--                         </div>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- ========================= about-section end ========================= -->
    <section class="about-section pt-120 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-11 mx-auto">
                    <div class="about-content text-center mb-55">
                        <div class="section-title mb-30">

                            <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                Le Cabinet
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-xs-1 g-4  my-5">-->
            <!--    <div>-->
            <!--        <div class="card">-->
            <!--            <img src="{{ asset('assets/img/about/portrait-dircab.jpeg') }}" class="card-img-top" alt="">-->
            <!--            <div class="card-body">-->
            <!--                <h5 class="card-title primaryColor">Directeur de Cabinet</h5>-->
            <!--                <p class="card-title primaryColor">M. Bertin Mawaka</p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="card">-->
            <!--            <img src="{{ asset('assets/img/about/portrait-dircaba.png') }}" class="card-img-top" alt="">-->
            <!--            <div class="card-body">-->
            <!--                <h5 class="card-title primaryColor">Directeur de Cabinet Adjoint</h5>-->
            <!--                <p class="card-title primaryColor">Mme. Ginette Nzau-Muteta</p>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
    <section class="about-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-11 mx-auto">
                    <div class="about-content text-center mb-45">
                        <!--<div class="section-title mb-30">-->
                        <!--    <span class="wow fadeInDown" data-wow-delay=".2s">Les Conseillers</span>-->
                        <!--</div>-->
                        <ul class="list-group mt-20">
                            <li class="list-group-item"><b>Directeur de Cabinet</b> － M. Bertin Mawaka</li>
                            <li class="list-group-item"><b>Directrice de Cabinet Adjointe</b> － Mme. Ginette Nzau-Muteta
                            </li>
                            <li class="list-group-item"><b>Conseiller financier</b> － M. Vagheny Pay Pay</li>
                            <li class="list-group-item"><b>Conseiller trésorerie</b> － M. Flory Mapamboli</li>
                            <li class="list-group-item"><b>Conseiller fiscal</b> － M. Liévin Chiribagula</li>
                            <li class="list-group-item"><b>Conseiller économique</b> － M. Alphonse Tshilumba</li>
                            <li class="list-group-item"><b>Conseiller banque, monnaie, crédit</b> － M. Joachim Batomene
                            </li>
                            <li class="list-group-item"><b>Conseiller bonne gouvernance</b> － M. Cyril Mbuwa</li>
                            <li class="list-group-item"><b>Conseiller chargé de la mobilisation des recettes</b> － M.
                                Adolphe Lumbikila</li>
                            <li class="list-group-item"><b>Conseiller en communication et relations extérieures</b> － M.
                                Anicet Yomboranyama</li>
                            <li class="list-group-item"><b>Conseiller numérique</b> － M. Yannick Kashila</li>
                            <li class="list-group-item"><b>Conseiller en charge des relations avec les institutions</b>
                                － M. Clément Nzau</li>
                            <li class="list-group-item"><b>Conseiller administratif</b> － M. Lyon El N'Sele</li>
                            <li class="list-group-item"><b>Conseiller logistique et approvisionnement, Intendant
                                    principal</b> － M. Louis-Paul Pandi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="lines d-flex">
        <div class="hero-line col-4 bg-primaryColor"></div>
        <div class="hero-line col-4 bg-redColor"></div>
        <div class="hero-line col-4 bg-yellowColor"></div>
    </div>
    @include('layouts.footer')
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
