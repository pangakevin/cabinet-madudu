<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Cabinet-Madudu</title>

    <!-- Bootstrap CSS -->
    
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/line-icons.css">
    <link rel="stylesheet" href="styles/css/owl.carousel.css">
    <link rel="stylesheet" href="styles/css/owl.theme.css">
    <link rel="stylesheet" href="styles/css/nivo-lightbox.css">
    <link rel="stylesheet" href="styles/css/magnific-popup.css">
    <link rel="stylesheet" href="styles/css/animate.css">
    <link rel="stylesheet" href="styles/css/color-switcher.css">
    <link rel="stylesheet" href="styles/css/menu_sideslide.css">
    <link rel="stylesheet" href="styles/css/main.css">
    <link rel="stylesheet" href="styles/css/responsive.css">

</head>

<body>
    <!-- Header Section Start -->
    <header id="slider-area">
        <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="styles/img/favicon2.png" alt=""> Law Firm MADUDU</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">

                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#features">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Nos services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/#team">Notre équipe</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </header>
    <!-- Header Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section section-services section-service">
        <div class="container contservice">
            <div class="section-header">
                <h2 class="section-title">Nos Articles</h2>

                <p class="section-subtitle">
                    Prestations de services juridiques et judiciaires en offrant une structure d'étude, d’analyse, de conseil, de rédaction d’actes juridiques, d'assistance et de consultance.
                </p>
            </div>
            <div class="row">
                <div class="container pt-125 pb-125">
        <div class="">

            <div class="row gx-5 ">
                <div class="col-lg-8 col-md-12 pr-4">
                    <div>
                        <div class="section-title mb-55 ">
                            <h5 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                Tous les articles
                                <span class="lines d-flex col-11 d-block w-100">
                                    <span class="hero-line col-4 bg-primaryColor"></span>
                                    <span class="hero-line col-4 bg-redColor"></span>
                                    <span class="hero-line col-4 bg-yellowColor"></span>
                                </span>
                            </h5>

                        </div>
                    </div>
                       <nav style="padding-bottom: 35px;">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            
                        </div>
                    </nav>
                    <div class="tab-content " id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">

                            <ul class="list-group list-group-flush">
                                @foreach ($artifrans as $artifran)
                                    <li class="list-group-item ">
                                        <span class="primaryColor">
                                           Du {{ \Carbon\Carbon::parse($artifran->created_at)->translatedFormat('d F Y') }}
                                            {{-- {{ $artifran->updated_at->diffForHumans() }} --}}
                                        </span>
                                        <br>
                                        <strong>
                                            <a href="{{ route('annonces.show', $artifran->slug) }}"
                                                style="text-align: justify;">{{ $artifran->titre }}
                                            </a>
                                            <span class="hero-line bg-grey d-block mt-2 mb-2 w-80">
                                                
                                            </span>
                                        </strong>
                                    </li>
                                @endforeach
                            </ul>

                            {{-- </div> --}}

                            <div class="paginate" style="margin-top: 14px;margin-bottom: 50px;">
                                {!! $artifrans->links() !!}
                            </div>

                        </div> {{-- Francais --}}
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 border-left-secondaryColor">
                    <div class="">
                        <div class= "mb-15 wow fadeInUp" data-wow-delay=".4s">
                            <h5 class="">Catégories</h5>
                        </div>
                        <nav style="padding-bottom: 35px;">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            
                        </div>
                    </nav>
                            <ul class="list-group">
                                @forelse ($categories as $categorie)

                                {{-- <li class="list-group-item d-flex justify-content-between align-items-center"> --}}
                                    <a href="{{ route('filtrcat',['id'=>$categorie->id]) }}"
                                        class="list-group-item list-group-item-action">
                                        {{ $categorie->nom }}
                                        
                                    </a>
                                  {{-- <span class="badge badge-primary badge-pill">3 m {{ $categorie->count('id') }}</span> --}}
                                  @empty
                                            <br>Pas de categorie
                                {{-- </li> --}}
                                @endforelse
                            </ul>
                    </div>
                </div>
            </div> {{-- fin row --}}

        </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <h3 class="color-footer">Cabinet Madudu</h3>
                        <div class="textwidget">
                            <p class="color-footer"> If you think you have the passion, attitude and capability to join us...</p>
                        </div>
                        <ul class="footer-social">
                            <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Raccourci</h3>
                            <ul class="menu">
                                <li>
                                    <a class="page-scroll" href="#slider-area">Home</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#features">A propos</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#services">Nos services</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="#team">Notre équipe</a>
                                </li>

                                <li>
                                    <a class="page-scroll" href="#blog">Articles</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Contact Us</h3>
                            <ul class="contact-footer">
                                <li>
                                    <strong>Address :</strong> <span>Avenue Niwa numéro 02; Q. Binza pigeon; C. Ngaliema</span>
                                </li>
                                <li>
                                    <strong>Phone :</strong> <span>+243 89 89 89 090</span>
                                </li>
                                <li>
                                    <strong>E-mail :</strong> <span><a href="#">info@example.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer area End -->

        <!-- Copyright Start  -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-info float-left">
                            <p class="copyright-p">copyright 2023 : <a href="#" rel="nofollow">Cabinet Madudu</a></p>
                        </div>
                        <!-- <div class="float-right">
                            <ul class="nav nav-inline">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">About Prime</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">TOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Return Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->


    <script src="styles/js/jquery-min.js"></script>
    <script src="styles/js/popper.min.js"></script>
    <script src="styles/js/bootstrap.min.js"></script>
    <script src="styles/js/classie.js"></script>
    <script src="styles/js/color-switcher.js"></script>
    <script src="styles/js/jquery.mixitup.js"></script>
    <script src="styles/js/nivo-lightbox.js"></script>
    <script src="styles/js/owl.carousel.js"></script>
    <script src="styles/js/jquery.stellar.min.js"></script>
    <script src="styles/js/jquery.nav.js"></script>
    <script src="styles/js/scrolling-nav.js"></script>
    <script src="styles/js/jquery.easing.min.js"></script>
    <script src="styles/js/wow.js"></script>
    <script src="styles/js/jquery.vide.js"></script>
    <script src="styles/js/jquery.counterup.min.js"></script>
    <script src="styles/js/jquery.magnific-popup.min.js"></script>
    <script src="styles/js/waypoints.min.js"></script>
    <script src="styles/js/form-validator.min.js"></script>
    <script src="styles/js/contact-form-script.js"></script>
    <script src="styles/js/main.js"></script>

</body>

</html>