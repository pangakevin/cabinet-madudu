<header id="home" class="header">
    <div class="header-wrapper">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand d-flex align-items-center" href="/">
                                <img src="{{ asset('assets/img/logo/logo_black.png') }}" alt="Logo du ministère"
                                    width="100" />
                                <div class="slogan ml-3 text-dark">
                                    <p class="black" style="font-size: 18px;font-weight: 400;line-height: 28px;color: #8c96a7;margin: 0px;">
                                        Ministère des <br> 
                                        <strong>Finances</strong></p>

                                    <div class="lines d-flex mt-10">
                                        <div class="line col-4 bg-primaryColor"></div>
                                        <div class="line col-4 bg-redColor"></div>
                                        <div class="line col-4 bg-yellowColor"></div>
                                    </div>
                                </div>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/actualites">Actualités</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="page-scroll dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Le
                                            Ministère</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/ministre">Le Ministre</a>
                                            <a class="dropdown-item" href="/vice-ministre">La Vice-Ministre</a>
                                            <a class="dropdown-item" href="/cabinet">Cabinet du
                                                Ministre</a>
                                            <a class="dropdown-item" href="/anciens-minitres">Anciens
                                                ministres</a>
                                            <a class="dropdown-item" href="/histoire">Histoire</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/services">Services</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="page-scroll dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Ressources
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/media">Photos et vidéos</a>
                                            <a class="dropdown-item" href="/documents">Documents</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="/contact">Contact</a>
                                    </li>

                                    <li class="nav-item p-0">
                                        <span
                                        class="icon-search iconify secondaryColor " data-icon="bx:bx-search"
                                        data-inline="false" ></span>
                                    </li>

                                </ul>
                            </div>
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </div>

</header>
<div class="search-content d-none">
    <div class="content p-5">
        <div class="close d-flex justify-content-end"><span class="iconify close-btn secondaryColor" data-icon="clarity:times-circle-solid"></span></div>
    <form role="form" class="" action="{{ route('searchs.search') }}">
        @csrf

        <div class="form-group d-flex justify-content-center align-items-center ">
            {!! Form::text('search', null, ['placeholder' => 'Recherche...', 'class' => 'form-control ']) !!}
            <button type="submit" class="btn bg-secondaryColor"><span
                class="iconify white" data-icon="bx:bx-search"
                data-inline="false"></span></button>
        </div>

        
    </form>
    </div>
</div>

   
