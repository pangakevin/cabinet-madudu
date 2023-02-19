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
                                Ministère de Finances de la RDC
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= about-section end ========================= -->
    <section id="about" class="about-section pt-3">
        <div class="container">
           <div class="row row row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-xs-1 g-4  my-5  ">
                {{-- <div >
                    <a href="#" class="d-flex center mb-4 h-100">
                        <figure class="figure">
                            <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                            <figcaption class=" bg-secondaryColor text-light text-center p-2">
                                <span class="titre">Titre</span><br>
                                <span class="description">description</span>
                            </figcaption>
                        </figure>
                     

                    </a>
                  </div> --}}
                <div class="col">
                    <div class="card" style="background-color: #112b49;color: white;">
                        <img src="https://source.unsplash.com/pWkk7iiCoDM/400x300" class="card-img-top" alt="..." style="height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white;">22Card title</h5>
                            <div class="card-text " style="max-width: 300px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                            Tronquer This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                            </div>
                        </div>
                    </div>
                </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">
                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">

                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">

                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">
                  
                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">

                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive"  src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">
                  
                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">
                 
                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">
                  
                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">
                  
                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">
                  
                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive"src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
              </div>
              <div >
                <a href="#" class="d-flex center mb-4 h-100">
                  
                  <figure class="figure">
                    <img class="figure-img img-fluid img-responsive" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
                    <figcaption class=" bg-secondaryColor text-light text-center p-2">
                        <span class="titre">Titre</span><br>
                        <span class="description">description</span>
                    </figcaption>
                </figure>
                </a>
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

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
