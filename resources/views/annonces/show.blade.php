<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $annonce->categorie->nom }} | Ministère de Finances</title>
    <meta name="description" content="Ministère des finances de la République Démocratique du Congo" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:url" content="/{{ route('annonces.show', $annonce->slug) }} ?? '' " />
    <meta property="og:type" content="Article" />
    <meta property="og:title" content="{{ $annonce->titre }}" />
    <meta property="og:description" content="{{ $annonce->categorie->nom }}" />
    <meta property="og:image" content="{{ asset('uploads/' . $annonce->image) }}" />
    <meta name="robots" content="index, follow">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo_white.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.5-alpha.min.css') }}" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
    <!-- ========================= preloader start ========================= -->
    {{-- <div class="preloader">
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
    </div> --}}
    <!-- preloader end -->

    <!-- ========================= header start ========================= -->
    @include('layouts.header')
    <!-- ========================= header end ========================= -->
    <!-- ========================= about-section start ========================= -->
    <section id="about" class="about-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-11 mx-auto">
                    <div class="about-content text-center mb-55">
                        <div class="section-title mb-30" style="text-align: initial;">
                            <span class="wow fadeInDown" data-wow-delay=".2s">{{ $annonce->categorie->nom }}</span>
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
                            <a id="facebook" href="#" target="_blank" class="fz-3"><i class="lni lni-facebook"></i></a>
                        </li>
                        <li class="mr-4">
                            <a id="twitter" href="#" target="_blank" class="fz-3"><i class="lni lni-twitter"></i></a>
                        </li>
                        <li class="mr-4">
                            <a id="whatsapp" href="#" target="_blank" class="fz-3"><i class="lni lni-whatsapp"></i></a>
                        </li>
                        <li class="mr-4">
                            <a id="linkedin" href="#" target="_blank" class="fz-3"><i class="lni lni-linkedin"></i></a>
                        </li>
                        <li class="mr-4">
                            <a id="gmail" href="#" target="_blank" class="fz-3"><i class="lni lni-envelope"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="blog-section p-100 bg-grey section">
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

            <div class="row">
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

            </div>

        </div>
    </section>
    <!-- ========================= about-section end ========================= -->
    <section class="about-section pt-120 bg-grey" style="padding-top: 0px !important;">
        <div class="container" style="margin-bottom: 50px;">

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
    <script src="{{ asset('assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }} }}"></script>
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
