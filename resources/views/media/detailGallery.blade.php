<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        @foreach ($namcats as $namcat)
            {{ $namcat->categorie }}
        @endforeach | Ministère de Finances
    </title>
    <meta name="description" content="Ministère de finance de la République Démocratique du Congo" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo_white.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-5.0.5-alpha.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/lightgallery-bundle.min.css') }}" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.4/css/lightgallery.min.css"
        integrity="sha512-7eMiZQKgls1r8jcWf35rP5ZNgaaZzSt+ZacRjKZYP0s65Kcj7IdG5412uQn370Ne2dAqn+eOGK3yN4XU6gdt8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">


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
    <section class="about-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-11 mx-auto">
                    <div class="about-content text-center mb-55">
                        <div class="section-title mb-30">
                            <span class="wow fadeInDown" data-wow-delay=".2s">
                                @foreach ($namcats as $namcat)
                                    {{ $namcat->categorie }}
                                @endforeach
                            </span>
                            <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                Ministère des Finances de la RDC
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= about-section end ========================= -->
    <section class="about-section">
        <div class="container">

            <div class="gallery">
                <div class="container-lg ">
                    <h2 class="gallerie-title secondaryColor py-5">
                        Les Photos
                    </h2>
                    <div id="lightgallery" class=" row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 ">

                        @forelse ($imagebydates as $imagebydate)
                            <a class="col" href="{{ asset('uploads/' . $imagebydate->image) }}"
                                data-lg-size="1600-2400">
                                <img src="{{ asset('uploads/' . $imagebydate->image) }}" class="gallery-item"
                                    alt="{{ $imagebydate->nom }}">

                        
                            </a>
                            @empty
                                Pas des images pour le moment
                        @endforelse

                        {{-- <a class="col" href="{{ asset('assets/img/blog/MinNicolas.jpg') }}" data-lg-size="1600-2400">
                            <img src="{{ asset('assets/img/blog/MinNicolas.jpg') }}" class="gallery-item"
                                alt="Nom de la photo">
                        </a>
                        <a class="col" href="{{ asset('assets/img/blog/MinNicolas.jpg') }}" data-lg-size="1600-2400">
                            <img src="{{ asset('assets/img/blog/MinNicolas.jpg') }}" class="gallery-item"
                                alt="Nom de la photo">
                        </a>
                        <a class="col" href="{{ asset('assets/img/blog/MinNicolas.jpg') }}" data-lg-size="1600-2400">
                            <img src="{{ asset('assets/img/blog/MinNicolas.jpg') }}" class="gallery-item"
                                alt="Nom de la photo">
                        </a>
                        <a class="col" href="{{ asset('assets/img/blog/MinNicolas.jpg') }}" data-lg-size="1600-2400">
                            <img src="{{ asset('assets/img/blog/MinNicolas.jpg') }}" class="gallery-item"
                                alt="Nom de la photo">
                        </a>
                        <a class="col" href="{{ asset('assets/img/blog/MinNicolas.jpg') }}" data-lg-size="1600-2400">
                            <img src="{{ asset('assets/img/blog/MinNicolas.jpg') }}" class="gallery-item"
                                alt="Nom de la photo">
                        </a> --}}

                    </div>
                </div>
            </div>
            <div class="gallery">
                <div class="container-lg ">
                    <h2 class="gallerie-title secondaryColor py-5">
                        Les Vidéos
                    </h2>
                    <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 d-flex flex-wrap">
                        @forelse ($videosbydates as $videosbydate)
                            <a data-fslightbox="gallery" data-type="youtube" class="position-relative video-link"
                                href="{{ $videosbydate->urls }}">
                                <img src="{{ asset('uploads/' . $videosbydate->image) }}" class="img-responsive"
                                    alt="{{ $videosbydate->image }}">
                                <span class="iconify  playIcon" data-icon="el:play-circle"></span>
                            </a>
                            @empty
                                Pas des vidéos pour le moment
                        @endforelse

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

    <!-- ========================= JS here -->
    <script src="{{ asset('assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }} "></script>
    <script src=" {{ asset('assets/js/wow.min.js') }}"></script>
    <script src=" {{ asset('assets/js/tiny-slider.js') }}"></script>

    <script src="{{ asset('assets/js/fslightbox.js') }} "></script>
    <script src=" {{ asset('assets/js/lightgallery.min.js') }}"></script>
    <script src=" {{ asset('assets/js/lg-thumbnail.umd.js') }}"></script>
    <script src=" {{ asset('assets/js/lg-zoom.umd.js') }}"></script>
    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery'), {
            plugins: [lgZoom, lgThumbnail],
            speed: 800,
            zoom: true,

        });
    </script>

    <script src="assets/js/main.js"></script>


</body>

</html>
