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
    <meta property="og:url" content="/{{ route('annonces.show', $annonce->slug) }} ?? '' " />
    <meta property="og:type" content="Article" />
    <meta property="og:title" content="{{ $annonce->titre }}" />
    <meta property="og:description" content="{{ $annonce->categorie->nom }}" />
    <meta property="og:image" content="{{ asset('uploads/' . $annonce->image) }}" />
    <meta name="robots" content="index, follow">
    <title>Law-Firm-Madudu >{{ $annonce->categorie->nom }} </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.5-alpha.min.css') }}" />
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="styles/css/line-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    
    <link rel="stylesheet" href="{{asset('styles/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo_white.png" />
    <link rel="stylesheet" href="{{ asset('styles/css/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset ('styles/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/color-switcher.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/menu_sideslide.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('styles/css/responsive.css')}}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}



    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo_white.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</head>

<body>
    <!-- Header Section Start -->
    <header id="slider-area">
        <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="{{ asset('styles/img/favicon2.png') }}" alt=""> Law Firm MADUDU</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/#features">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/#services">Nos services</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link page-scroll" href="#portfolios">Works</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/#team">Notre équipe</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/#articles">Articles</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/#actulites">Actualités</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </header>
    <!-- Header Section End -->

    <!-- Services Section Start -->
        <section id="about" class="about-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-14 col-lg-12 mx-auto">
                    <div class="about-content text-center mb-55">
                        <div class="section-title mb-30" style="text-align: initial;">
                            <span class="wow fadeInDown" data-wow-delay=".2s">
                                <a style="color:#133155;" href="/{{ $annonce->categorie->type }}">
                                    {{ $annonce->categorie->type }}
                                </a>
                                 / {{ $annonce->categorie->nom }}
                            </span>
                            <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                {{ $annonce->titre }}
                                <hr>
                            </h2>
                        </div>
                        <div class="container img-post">
                            <img src="{{ asset('uploads/' . $annonce->image) }}" alt="image du Post"
                                class="img-fluid rounded float-left"
                                style="width: 527px; padding-right: 20px; height: 320px;margin-bottom: 10px">
                        </div>
                        <div class="container post-content text-left mt-55 wow fadeInUp" data-wow-delay=".6s">
                            <div class="mb-35 wow fadeInUp" data-wow-delay=".6s">

                                {!! $annonce->description !!}

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <h3 class="text-center">Partager sur :</h3>
                <div class="footer-social-links">
                    <ul class="d-flex justify-content-center justify-content align-items-center mt-4">
                        <li class="mr-4">
                            <a id="facebook" href="#" target="_blank" class="fz-3 facebook"><i class="lni-facebook-filled"></i></a>
                        </li>
                        <li class="mr-4">
                            <a id="twitter" href="#" target="_blank" class="fz-3 twitter"><i class="lni-twitter-filled"></i></a>
                        </li>
                        <li class="mr-4">
                            <a id="whatsapp" href="#" target="_blank" class="fz-3 whatsapp"><i class="lni-whatsapp"></i></a>
                        </li>
                        <li class="mr-4">
                            <a id="linkedin" href="#" target="_blank" class="fz-3"><i class="lni-linkedin-fill"></i></a>
                        </li>
                        <li class="mr-4">
                            <a id="gmail" href="#" target="_blank" class="fz-3 gmail"><i class="lni-envelope"></i></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="blog-section p-100 bg-grey section section-service">
        <!-- <div class="shape shape-7">
        <img src="assets/img/shapes/shape-6.svg" alt="" />
      </div> -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <div class="section-title mb-55">
                        <h2 class="mb-15 wow fadeInUp primaryColor" data-wow-delay=".4s"
                            style="color:#112b49 !important;">
                            Voir Plus :
                        </h2>
                        <div class="hero-line bg-primaryColor w30"></div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                @foreach ($recents as $recent)
                    <div class="col-xl-4 col-lg-4 col-md-6 article">

                        <div class="card-group blog-card">

                            <div class="card">
                                <div class="single-blog mb-img wow fadeInUp" data-wow-delay=".2s">
                                    <div class="blog-img">
                                        <a href="{{ route('annonces.show', $recent->slug) }}">
                                            <img src="{{ asset('uploads/'.$recent->image) }}" type="button" class=" img-fluid"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="blog-content p-2">
                                        <p class="mb-1">
                                            <a class="two-line black"
                                                href="{{ route('annonces.show', $recent->slug) }}">{{ $recent->titre }}</a>
                                        </p>
                                        <p class="primaryColor">
                                            <span class="date font-weight-bold uppercase  pt-2">
                                                {{ $recent->created_at->formatLocalized('%e %b %Y') }}
                                                |
                                                {{ $recent->categorie->nom }} </span>


                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div> -->
            <div class="row">
                @foreach ($recents as $recent)
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="{{ route('annonces.show', $recent->slug) }}">
                                <img src="{{ asset('uploads/'.$recent->image) }}" type="button" class=" img-fluid" style="width: 100%;
    height: 280px;" alt="" />
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <div class="date"><i class="lni-calendar"></i>
                                {{ $recent->created_at->formatLocalized('%e %b %Y') }} | {{ $recent->categorie->type }} > {{ $recent->categorie->nom }}
                            </div>
                            <h3 class="black text-sm-left text-nowrap text-truncate">
                                <a href="{{ route('annonces.show', $recent->slug) }}">
                                    {{ $recent->titre }}
                                </a>
                            </h3>
                            <!-- <div class="meta-tags">
                                <span><a href="#"><i class="lni-eye"></i> 4.5k Views</a></span>
                                <span><a href="#"><i class="lni-bubble"></i> 07</a></span>
                                <span><a href="#"><i class="lni-reply"></i> 332</a></span>
                            </div> -->
                        </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-lg-2 col-md-4 col-xs-8 ml-auto blog-item">
                    <a href="/{{ $annonce->categorie->type }}" class="btn btn-lg btn-common btn-effect wow fadeInUp " data-wow-delay="1.2s">Lire plus...</a>
                    <!-- Blog Item Starts -->
                    
                </div>

            </div>

        </div>
    </section>
    <!-- ========================= about-section end ========================= -->
    <!-- <section class="about-section pt-120 bg-grey" style="padding-top: 0px !important;">
        <div class="container" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-xs-8 ml-auto blog-item">
                    <a href="/articles" class="btn btn-lg btn-common btn-effect wow fadeInUp " data-wow-delay="1.2s">Lire plus...</a>
                    
                    
                </div>

            </div>
            <div class="row">
                @if ($annonce->versions == 'Française')
                    <div class="d-flex m-auto mt-55 col-lg-3  col-md-5 col-sm-12">
                        <a href="/actualites">
                            <div class="box-1wcm">
                                <div class="btnwcm btn-onewcm">
                                    <span>Voir plus d'actualités</span>
                                </div>
                        </a>
                    </div>
                @else
                    <div class="d-flex m-auto mt-55 col-lg-3  col-md-5 col-sm-12">
                        <a href="/article-anglais">
                            <div class="box-1wcm">
                                <div class="btnwcm btn-onewcm">
                                    <span>See more news</span>
                                </div>

                        </a>
                    </div>

                @endif
            </div>



        </div>
    </section> -->
    <!-- <div class="lines d-flex">
        <div class="hero-line col-4 bg-primaryColor"></div>
        <div class="hero-line col-4 bg-redColor"></div>
        <div class="hero-line col-4 bg-yellowColor"></div>
    </div> -->

    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <h3 class="color-footer">Law Firm Madudu</h3>
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
                            <p class="copyright-p">copyright © | Powered by :<a href="#" rel="nofollow">Cabinet Madudu 2023</a></p>
                        </div>
                        
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
    <script src="{{asset('styles/js/jquery-min.js')}}"></script>
    <script src="{{asset('styles/js/popper.min.js')}}"></script>
    <script src="{{asset('styles/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('styles/js/classie.js')}}"></script>
    <script src="{{asset('styles/js/color-switcher.js')}}"></script>
    <script src="{{asset('styles/js/jquery.mixitup.js')}}"></script>
    <script src="{{asset('styles/js/nivo-lightbox.js')}}"></script>
    <script src="{{asset('styles/js/owl.carousel.js')}}"></script>
    <script src="{{asset('styles/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('styles/js/jquery.nav.js')}}"></script>
    <script src="{{asset('styles/js/scrolling-nav.js')}}"></script>
    <script src="{{asset('styles/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('styles/js/wow.js')}}"></script>
    <script src="{{asset('styles/js/jquery.vide.js')}}"></script>
    <script src="{{asset('styles/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('styles/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('styles/js/waypoints.min.js')}}"></script>
    <script src="{{asset('styles/js/form-validator.min.js')}}"></script>
    <script src="{{asset('styles/js/contact-form-script.js')}}"></script>
    <script src="{{asset('styles/js/main.js')}}"></script>
    <!-- <script src="{{ asset('assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }} }}"></script> -->
    <script>
        const gmailBtn = document.getElementById('gmail');
        const facebookBtn = document.getElementById('facebook');
        const linkedinBtn = document.getElementById('linkedin');
        const twitterBtn = document.getElementById('twitter');
        const whatsappBtn = document.getElementById('whatsapp');

        let postUrl = encodeURI(document.location.href);
        let postTitle = encodeURI('{{ $annonce->titre }}');
        facebookBtn.setAttribute("href", `https://www.facebook.com/sharer.php?u=${postUrl}`);
        twitterBtn.setAttribute("href", `https://twitter.com/share?url=${postUrl}&text=${postTitle}`);
        linkedinBtn.setAttribute("href", `https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`);
        whatsappBtn.setAttribute("href", `https://wa.me/?text=${postTitle} ${postUrl}`);
        gmailBtn.setAttribute("href", `https://mail.google.com/mail/?view=cm&su=${postTitle}&body=${postUrl}`);
    </script>

</body>

</html>