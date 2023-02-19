<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col-md-10">
        	<div class="panel panel-default">
	         <!--  -->
        	<div class="panel-heading">
	        		Today
					<div class="pull-right">
						<a class="btn btn-xs btn-success" href="{{ route('categories.create') }}" title="">  Ajouter une categorie </a>
					</div>
	        	</div>
        	@foreach ($categories as $categorie)
        		<div class="panel-body">
        			<div class="card mb-3" style="max-width: 540px;">
		  				<div class="row no-gutters">
						    
						    <div class="col-md-8">
							    <div class="card-body">
							        <h5 class="card-title">{{ $categorie->nom }}</h5>
							        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							        <p class="card-text"><small class="text-muted">{{ $categorie->created_at->format('d/m/y') }}</small></p>
							        <a class="btn btn-xs btn-info" href="{{ route('categories.show',$categorie->id) }}" title="">Show</a>
									<a class="btn btn-xs btn-primary" href="{{ route('categories.edit',$categorie->id) }}" title="">Edit</a>
									{!! Form::open(['method'=>'DELETE','route'=>['categories.destroy',$categorie->id],'style'=>'display:inline']) !!}
														 			{!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger']) !!}
														 			{!! Form::close() !!}
							    </div>
						    </div>
		    			</div>
					</div>
					<div class="col-md-6">
                                <select name="categorie" id="categorie" class="form-control">
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
        		</div>
	        	
			@endforeach

			<br>

				<div class="card-footer">
					{!! $categories->links() !!}
				</div>
    	</div>
	</div>
</body>
</html>