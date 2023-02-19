@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3>Détails de la personne</h3>
				<a class="btn btn-xs btn-primary" href="{{ route('annonces.index') }}" title="">Back</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="form-group">
				<strong>Nom : <strong>
					{{ $categorie->nom }}
				
			</div>
			<div class="form-group">
				<strong>Postnom : <strong>
					{{ $categorie->description }}
				
			</div>
		</div>
	</div>
@endsection