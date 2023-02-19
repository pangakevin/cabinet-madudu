<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Actualités | Ministère des Finances</title>

    <meta name="description" content="Ministère de finance de la République Démocratique du Congo" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo_white.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <div class="container">
        <div class="" style="margin-top: 50px;">
            <div class="row">
                <div>
                    <div class="section-title mb-55 section_margin">
                        <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                            All ministry news
                        </h2>
                        <div class="lines d-flex col-11">
                            <div class="hero-line col-4 bg-primaryColor"></div>
                            <div class="hero-line col-4 bg-redColor"></div>
                            <div class="hero-line col-4 bg-yellowColor"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-10">
                    <nav style="padding-bottom: 35px;">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Anglais</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false" style="background-color: #112b49;
    color: white;"><a href="/actualites" style="text-decoration: none;
    color: white;">Français</a></button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">

                            <ul class="list-group list-group-flush">
                                @foreach ($artianglas as $artiangla)
                                    <li class=" ">
                                        <span class="primaryColor">
                                            {{ $artiangla->created_at->format('d/m/y') }} à
                                            {{ $artiangla->created_at->format('H:i') }}
                                        </span>

                                        <br>
                                        <strong>
                                            <a href="{{ route('annonces.show',$artiangla->slug) }}">{{ $artiangla->titre }}</a>
                                        </strong>
                                        <span class="hero-line bg-secondaryColor d-block mt-2 mb-2"></span>
                                    </li>


                                @endforeach
                            </ul>
                            {{-- </div> --}}

                            <div class="paginate" style="margin-top: 14px;">
                                {!! $artianglas->links() !!}
                            </div>
                        </div> {{-- Francais --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="card-header bg-secondaryColor">
                            <h2 class="white">Thématiques</h2>
                        </div>
                        @foreach ($categories as $categorie)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a
                                        href="{{-- /artiangla?categorie={{ $artiangla->categorie->nom }} --}}">{{ $categorie->nom }}</a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div> {{-- fin row --}}

        </div>
    </div>

    <!-- ========================= footer start ========================= -->
    @include('layouts.footer')
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
