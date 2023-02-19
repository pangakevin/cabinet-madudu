<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Actualités | Ministère des Finances</title>

    <meta name="description"
        content="Toute l’actualité du Ministère des Finances de la République Démocratique du Congo" />
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

    <div class="container pt-125 pb-125">
        <div class="">

            <div class="row gx-5 ">
                <div class="col-lg-8 col-md-12 pr-4">
                    <div>
                        <div class="section-title mb-55 ">
                            <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                Toute l’actualité du ministère
                                <span class="lines d-flex col-11 d-block w-100">
                                    <span class="hero-line col-4 bg-primaryColor"></span>
                                    <span class="hero-line col-4 bg-redColor"></span>
                                    <span class="hero-line col-4 bg-yellowColor"></span>
                                </span>
                            </h2>

                        </div>
                    </div>
                    <!--    <nav style="padding-bottom: 35px;">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Français</button>
                            <button class="nav-link bg-secondaryColor white" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false"><a href="/article-anglais" style="text-decoration: none;
    color: white;">English</a></button>
                        </div>
                    </nav> -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">

                            <ul class="list-group list-group-flush">
                                @foreach ($artifrans as $artifran)
                                    <li class="pr-4 ">
                                        <span class="primaryColor">
                                            {{ \Carbon\Carbon::parse($artifran->created_at)->translatedFormat('d F Y') }}
                                            {{-- {{ $artifran->updated_at->diffForHumans() }} --}}
                                        </span>

                                        <br>
                                        <strong>

                                            <a href="{{ route('annonces.show', $artifran->slug) }}"
                                                style="text-align: justify;">{{ $artifran->titre }}</a>
                                            <span class="hero-line bg-grey d-block mt-2 mb-2 w-80"></span>

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
                        <div class="secondaryColor">
                            <h2 class="">Thématiques</h2>
                        </div>

                            <ul class="">
                                @forelse ($categories as $categorie)
                                <li class="pt-3 pb-3">
                                    <a href="{{ route('filtrcat',['id'=>$categorie->id]) }}"
                                        class="text-center">{{ $categorie->nom }}</a>
                                        @empty
                                            <br>Pas de categorie
                                        
                                </li>

                                @endforelse
                            </ul>
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
