<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Ressources | Ministère de Finances</title>
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
<style>
    /*tbody {
    display:block;
    height:50px;
    overflow:auto;
    }
    thead, tbody tr {
        display:table;
        width:100%;
        table-layout:fixed;
    }
    thead {
        width: calc( 100% - 1em )
    }
    table {
        width:400px;
    }*/
</style>
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
    <section id="about" class="about-section pt-3 bg-grey">
        <div class="container" style="    max-width: 1468px;margin-bottom: 220px;">
            <div class="row">
                <div class="col-xl-10 col-lg-11 mx-auto">
                    <div class="about-content text-center mb-55">
                        <div class="section-title mb-30">
                            <span class="wow fadeInDown" data-wow-delay=".2s">
                                Ressources
                            </span>
                            <h2 class="mb-15 wow fadeInUp" data-wow-delay=".4s">
                                Ministère des Finances de la RDC
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="max-width: 100% !important;">
                <div class="row">
                    <!--La classe des arrétes-->
                    <div class="col-12 bg-arrete">
                        <div class="btn bg-secondaryColor white col-12" href="" role="button" style="border-color: #112b49;margin-bottom: 8px;">
                        <form action="{{ route('documents.resultdoc') }}" class="d-flex filtre" enctype="multipart/form-data">
                            @csrf
                            

                            {!! Form::text('search', null, ['placeholder' => 'MOT CLE', 'class' => 'form-control my-3 mr-3 ']) !!}

                            <select name="categorie" class="form-control my-3 mr-3" aria-label="Default select example" >
                                <option value="">-Selection-</option>
                                @foreach ($filtres as $filtre)
                                    <option value="{{ $filtre->type }}">{{ $filtre->type }}</option>
                                @endforeach
                            </select>

                            <div class="input-group my-3 mr-3">
                                <div class="input-group-text">DE</div>
                                <input type="date" value="DE" class="form-control" id="specificSizeInputGroupUsername" name="date_in">
                            </div>

                            <div class="input-group my-3 mr-3">
                                <div class="input-group-text">A</div>
                            
                                <input type="date" value="A" class="form-control" id="specificSizeInputGroupUsername" name="date_out">
                            </div>
                            
                            <div class="input-group d-flex justify-content-around">
                                <button type="submit" class="btn"><span class="iconify fz-3 white" data-icon="bx:bx-search"></span></button>
                            <button type="submit" class="btn"><span class="iconify fz-3 white" data-icon="system-uicons:reset"></span></button>
                            </div> 
                        </form>
                        </div>
                        


                        <div class="card card-body">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <table class="table table-fixed{{-- table table-striped table-hover table-condensed --}}">
                                    <thead >
                                        <tr>
                                        <th class="col-5"> Date </th>
                                        <th class="col-5">Les titres</th>
                                        <th class="col-2"><span class="iconify fz-3" data-icon="ant-design:cloud-download-outlined"></span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($queries as $querie)
                                            <tr>
                                                <td> 
                                                    <p style="color: #212529;font-size: 16px;">
                                                        du {{ \Carbon\Carbon::parse($querie->date)->translatedFormat('d F Y') }} 
                                                        
                                                    </p>
                                                    {{-- à {{ $querie->created_at->format('H:i') }} --}} </td>
                                                <td>
                                                    <p class="{{-- d-inline-block text-truncate --}}" style="color: #212529;font-size: 16px;">
                                                    {{ $querie->nom }}
                                                    </p>
                                                </td>
                                                <td>
                                                    {{-- <a href="uploads/{{ $querie->pdf }}">
                                                        <button type="button" class="btn btn-outline-primary">Ouvrir</button>
                                                    </a> --}}
                                                     <a href="uploads/{{ $querie->pdf }}" class="btn btn-outline-primary" style="font-size: 12px;width: 75px;">
                                                        <span class="iconify" data-icon="bi:file-pdf" data-inline="false">
                                                        </span>
                                                        Télécharger
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="paginate" style="margin-top: 15px;">
                                    {{-- {!! $queries->links() !!} --}}
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}
                    </div>

                </div>

                <div class="cardcard-body">
                   
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
