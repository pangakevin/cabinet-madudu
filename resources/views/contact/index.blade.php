<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Contact |Ministère de Finances</title>
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
                            <span class="wow fadeInDown" data-wow-delay=".2s">
                                    Contact
                            </span>
                            <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                Ministère de Finances de la RDC
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="service-item mb-30">
                        <div class="container-contact d-flex justify-content-around flex-wrap p-5">
                            <div class="contact-pic js-tilt" data-tilt>
                                <img src="{{ asset('assets/img/icon/icon-message.png') }}" alt="IMG">
                            </div>

                            <form method="POST" id="contact-form" class="contact-form validate-form form ml-4" enctype="multipart/form-data" action="{{ route('contact.send') }}">
                                @csrf
                                <span class="contact-form-title primaryColor font-weight-bold m-3">
                                    @if($mailsend = Session::get('message'))
                                        {{-- <p class="alert alert-success" role="alert">
                                            {{ Session::flash('message') }}

                                        </p> --}}
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close flash-clause" data-dismiss="alert">x</button>
                                            {{-- <button type="button" class="btn-close" aria-label="Close"></button> --}}
                                            <strong style="font-size: 16px;">{{ $mailsend }}</strong>
                                        </div>
                                    @endif
                                    <br>
                                    Laissez un Message
                                </span>

                                <div class="wrap-input1 validate-input" data-validate="Name is required">
                                    <input class="input1 form-control" type="text" name="name" placeholder="Nom">

                                </div>

                                <div class="wrap-input1 validate-input"
                                    data-validate="Valid email is required: ex@abc.xyz">
                                    <input class="input1 form-control" type="text" name="email" placeholder="Email">

                                </div>

                                <div class="wrap-input1 validate-input" data-validate="Subject is required">
                                    <input class="input1 form-control" type="text" name="subject" placeholder="sujet">

                                </div>

                                <div class="wrap-input1 validate-input" data-validate="Message is required">
                                    <textarea class="input1" name="message" placeholder="Message"></textarea>

                                </div>

                                <div class="container-contact-form-btn">
                                    <button class="contact-form-btn btn bg-secondaryColor text-light">
                                        <span>
                                            Envoyer
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <div class="lines d-flex">
        <div class="hero-line col-4 bg-primaryColor"></div>
        <div class="hero-line col-4 bg-redColor"></div>
        <div class="hero-line col-4 bg-yellowColor"></div>
    </div>
    @include('layouts.footer')

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
