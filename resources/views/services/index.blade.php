<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Services | Ministère des Finances</title>
    <meta name="description"
        content="Tous les services fournis par les régies financières et agence rattachées au Ministère des Finances de la République Démocratique du Congo." />
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
    <section id="about" class="about-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-11 mx-auto">
                    <div class="about-content text-center mb-55">
                        <div class="section-title mb-30">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Services</span>
                            <h4 class="mb-15 wow fadeInUp" data-wow-delay=".4s"> Tous les services fournis par les
                                régies financières et agences rattachées au ministère
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="service-section section p-5">
        <div class="container">

            <div class="row d-flex justify-content-center flex-wrap">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ $service->url }}" target="_blank">
                            <div class="service-item mb-30 d-flex align-items-center">
                                <div class="service-icon mb-25">
                                    {!! $service->image !!}
                                </div>
                                <div class="service-content ml-5">
                                    <h4>{{ $service->nom }}</h4>
                                </div>
                                <div class="service-overlay"></div>
                            </div>
                        </a>
                    </div>
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
    <script src="assets/js/main.js"></script>
</body>

</html>
