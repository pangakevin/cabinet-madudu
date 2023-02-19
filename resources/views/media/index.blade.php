<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Gallérie | Ministère de Finances</title>
    <meta name="description" content="Ministère de finance de la République Démocratique du Congo" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo_white.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.5-alpha.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/lightgallery-bundle.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.4/css/lightgallery.min.css"
        integrity="sha512-7eMiZQKgls1r8jcWf35rP5ZNgaaZzSt+ZacRjKZYP0s65Kcj7IdG5412uQn370Ne2dAqn+eOGK3yN4XU6gdt8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <section id="about" class="about-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-11 mx-auto">
                    <div class="about-content text-center mb-55">
                        <div class="section-title mb-30">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Gallerie</span>
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
    <section class="about-section pt-3">
        <div class="container">
            <h2 class="gallerie-title secondaryColor">
                Récentes Photos
            </h2>
            <div class="gallery min-vh-100">
                <div class="container-lg ">
                    <div id="lightgallery" class=" row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 ">
                        @foreach ($medias as $media)
                            <a class="col" href="uploads/{{ $media->image }}" data-lg-size="1600-2400">
                                <img src="uploads/{{ $media->image }}" class="gallery-item" alt="{{ $media->nom }}">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="gallerie-title secondaryColor">
                Voir toutes les photos et videos
            </h2>
            <div class="row row row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-xs-1 g-4  my-5  ">
                @foreach ($mediacats as $mediacat)
                    <a href="{{ route('media.categoryMedia',['categorie'=>$mediacat->categorie]) }}" class="folder-link">
                        <div class="folder-media bg-secondaryColor text-light text-center p-5">
                            <i class="lni lni-folder pr-3"></i>

                            <span> {{ $mediacat->categorie}}</span>


                        </div>
                    </a>
                @endforeach

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

    <script src="assets/js/lightgallery.min.js"></script>
    <script src="assets/js/lg-thumbnail.umd.js"></script>
    <script src="assets/js/lg-zoom.umd.js"></script>
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
