@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3>Edit new Person</h3>
			</div>
		</div>
	</div>

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops</strong> il y'a un soucis dans le champ. <br>
			<ul>
				@foreach ($errors->all() as $error)
				<li> {{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::model($annonce,['method'=>'PATCH','route'=>['persons.update',$annonce->id]])!!}
	@include('persons.form')
	{!! Form::close() !!}

@endsection