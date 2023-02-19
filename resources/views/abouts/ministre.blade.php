<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Le Ministre | Ministère des Finances</title>
    <meta name="description"
        content="Biographie de Nicolas Kazadi, Ministre des Finances de la République Démocratique du Congo" />
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
                            <span class="wow fadeInDown" data-wow-delay=".2s">Le Ministre</span>
                            <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                Nicolas Kazadi
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section id="about" class="about-section pt-120 pb-120">
        <div class="container">

            <div class="d-flex justify-content-center  flex-wrap">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <img src="assets/img/about/Portrait Temporaire Kazadi.png" width="500" height="600"
                        alt="Nicolas Kazadi class=" img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 pl-5">
                    <h2 class="section-title wow primaryColor" data-wow-delay=".4s">
                        Biographie
                    </h2>
                    <p class="biographie_description black mt-5">
                        Né le 7 janvier 1966, à Kinshasa (alors Léopoldville), Nicolas Serge Kazadi Kadima-Nzuji grandit
                        dans sa ville natale de Kinshasa avec quelques années passées à Louvain-la-Neuve. Fils du
                        Professeur Jacques Kazadi, premier doyen noir de la Faculté des Sciences économiques de
                        l'Université de Kinshasa, Nicolas Kazadi décide d'étudier dans ce même domaine.
                        <br><br>
                        Licencié en planification du développement de l'Université Marien Ngouabi, détenteur d'une
                        maitrise en macroéconomie de l'Université de Reims Champagne-Ardenne ainsi qu'un diplôme de
                        troisième cycle en économie de l'Université Paris I, Panthéon-Sorbonne; Nicolas Kazadi termine
                        son parcours d'études supérieures à l'École Nationale d'Adminstration (ENA) où il reçoit une
                        maitrise en administration publique dans la promotion Averroès.
                        <br><br>
                        Nicolas Kazadi a travaillé plusieurs fois en République Démocratique du Congo notamment à la
                        Banque Centrale du Zaïre et à la Chambre de commerce franco-congolaise où il était directeur
                        général. Après près de deux décennies passées à l'étranger en tant que haut fonctionnaire pour
                        la Banque Africaine de Développement (BAD) et le Programme des Nations Unies pour le
                        Développement (PNUD), il rentre en RDC en 2019 et est nommé ambassadeur itinérant du chef de
                        l'État.
                        <br><br>
                        Après deux ans passés à la Présidence de la République sous le Président Tshisekedi, Nicolas
                        Kazadi est nommé Ministre des Finances dans le gouvernement de l'Union Sacrée avec Jean-Michel
                        Sama Lukonde comme Premier ministre. Ce n'est pas la première fois que le ministre travaille
                        dans les locaux du ministère car il a été conseiller économique et financier de trois ministres
                        des Finances entre, notamment Pierre Pay Pay, Gilbert Kiakwama et Marco Banguli.
                    </p>
                    <div class="bio-social-links">
                        <ul id="ul_top_hypers" class="d-flex link">
                            <li class="mr-3">
                                <a href="https://facebook.com/nskazadi?_rdc=1&_rdr" target="_blank"><i
                                        class="social lni lni-facebook-filled"></i></a>
                            </li>
                            <li class="mr-3">
                                <a href="https://twitter.com/nskazadi" target="_blank"><i
                                        class="social lni lni-twitter-filled"></i></a>
                            </li>
                            <li class="mr-3">
                                <a href="https://www.youtube.com/channel/UCHpOCBChRSB6rlahSMX9mYw" target="_blank"><i
                                        class=" social lni lni-youtube"></i></a>
                            </li>
                            <li class="mr-3">
                                <a href="https://www.instagram.com/nskazadi/" target="_blank"><i
                                        class="social lni lni-instagram-original"></i></a>
                            </li>
                        </ul>
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

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
