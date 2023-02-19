<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width,initial-scale-1">

	{{-- style --}}

	<link href="{{ asset('keep/css/bootstrap.min.css') }}" rel="stylesheet">
	{{-- <link href="{{ asset('keep/css/bootstrap-grid.min.css') }}" rel="stylesheet"> --}}
	<link href="{{ asset('keep/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/css/basic.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/css/custom.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/css/error.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/css/prettyPhoto.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('otherkeep/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/css/invoice.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/css/bootstrap-fileupload.min.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/css/bootstrap1.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/css/bootstrap.min.css') }}" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{ asset('keep/othercss/fontawesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/othercss/regular.min.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/othercss/solid.min.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/othercss/all.min.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/othercss/brands.min.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/othercss/svg-with-js.min.css') }}" rel="stylesheet">
	<link href="{{ asset('keep/othercss/v4-shims.min.css') }}" rel="stylesheet">
	{{-- script --}}


	<title>MinFin</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		@yield('content')
	</div>



 <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
 <script src="{{ asset('js/bootstrap.js') }}"></script>
 <script src="{{ asset('js/bootstrap-fileupload.js') }}"></script>
 <script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>


 
 <{{-- script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/js/bootstrap-fileupload.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script> --}}
</body>
</html>