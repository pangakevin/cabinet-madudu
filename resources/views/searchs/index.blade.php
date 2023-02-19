<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Recherche | Ministère des Finances</title>

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
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

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
    <main class="blog bg-grey d-flex flex-wrap">
        <div class="col-xl-8 col-md-12 mx-auto d-flex justify-content-around">
            <!-- ========================= blog-section start ========================= -->

            <section id="blog" class="blog-section p-100 bg-grey section">
                <div class="container">
                    <div class="row">
                        <div>
                            <div class="section-title mb-55 section_margin">
                                <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                    Résultat de la recherche : {{ $nbrsearch }} éléments trouvés pour :
                                    {{ $search }}
                                </h2>
                                <div class="lines d-flex col-11">
                                    <div class="hero-line col-4 bg-primaryColor"></div>
                                    <div class="hero-line col-4 bg-redColor"></div>
                                    <div class="hero-line col-4 bg-yellowColor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex flex-column mt-80">
                        @foreach ($queries as $query)
                            <div class="col-xl-8 col-lg-8 col-md-6 article mb-3">
                                <div class="single-blog mb-30 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="blog-content">

                                        <h4>
                                            <a href="{{ route('annonces.show',$query->slug) }}">{{ $query->titre }}</a>
                                        </h4>
                                        <p class="primaryColor">
                                            <span class="date font-weight-bold"> du
                                                {{ $query->created_at->format('d/m/y') }} à
                                                {{ $query->created_at->format('H:i') }}</span>*
                                            <span
                                                class="category font-weight-bold">{{ $query->categorie->nom }}</span>
                                        </p>
                                        <a class="read-more" href="{{ route('annonces.show',$query->slug) }}">Lire plus <i class="lni lni-arrow-right"></i></a>
                                        <div class="hero-line bg-secondaryColor my-4"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="paginate" style="margin-top: 14px;">
                        {!! $queries->links() !!}
                    </div>

                </div>
            </section>
            <!-- ========================= blog-section end ========================= -->
        </div>

    </main>
    <!-- ========================= footer start ========================= -->
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
