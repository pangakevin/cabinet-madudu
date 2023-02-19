@extends('errors::minimal')

@section('message')
	<div id="notfound">
		<div class="notfound-bg"></div>
		<div class="notfound">
			<a class="navbar-brand align-items-center" href="/">
                    <img src="{{ asset('assets/img/logo/logo_black.png') }}" alt="Logo du ministère"width="100"/><br>
                    <div class="slogan ml-3 text-dark">
                        <p class="black" style="font-size: 18px;font-weight: 400;line-height: 28px;color: #8c96a7;margin: 0px;">
                            Ministère des
                            <strong>Finances</strong></p>

                        <div class="lines d-flex mt-10">
                            <div class="line col-4 bg-primaryColor"></div>
                            <div class="line col-4 bg-redColor"></div>
                            <div class="line col-4 bg-yellowColor"></div>
                        </div>
                    </div>
            	</a>
			<div class="notfound-404">
				<h1>404</h1>
			</div>
			<h2>
				Nous sommes désolés, veuillez vérifier vos requests
			</h2>
			<h4>
				les données que vous avez publiées, ne sont pas acceptées pour cette demande
			</h4>
			<a href="/" class="home-btn">Accueil</a>
			<a href="/contact" class="contact-btn">Contactez-nous</a>
			<div class="notfound-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
			</div>
		</div>
	</div>
@endsection

