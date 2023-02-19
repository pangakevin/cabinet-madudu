@extends('persons.master')
<div class="row">

	
</div><br>
<div class="row">
    <div class="col-md-8 col-sm-8 col-xs-14 center-block">
       <div class="panel panel-info">
            <div class="panel-heading">
               Ajouter une categorie
            </div>
        	<div class="panel-body">
                <form role="form" enctype="multipart/form-data" {{-- method="POST" action="{{ route('categories.store') }}" --}}>
                	{{ csrf_field() }}
                	<div class="form-group">
                        
                    <div class="form-group">
                        <label>Nom</label>
                        {!! Form::text('nom',null,['placeholder'=>'Actualité','class'=>'form-control']) !!}
                        
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                    	{!! Form::textarea('description',null,['placeholder'=>'Panga','class'=>'form-control']) !!}
                        
                    </div>
                    
                    <button type="submit" class="btn btn-info">Enregistrer </button>
                    <a class="btn btn-xs btn-success" href="{{ route('categories.index') }}" title="">Back</a>

                </form>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
               Info publique
            </div>
	        <div class="panel-body">
	            <ul class="nav nav-tabs">
	                <li class="active">
	                	<a href="#home" data-toggle="tab">Home</a>
	                </li>
	                <li class=""><a href="#profile" data-toggle="tab">Profile</a>
	                </li>
	                <li class=""><a href="#messages" data-toggle="tab">Messages</a>
	                </li>
	                <li class=""><a href="#settings" data-toggle="tab">Settings</a>
	                </li>
	            </ul>

	            <div class="tab-content">
	                <div class="tab-pane fade active in" id="home">
	                    <h4>Home Tab</h4>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                </div>
	                <div class="tab-pane fade" id="profile">
	                    <h4>Profile Tab</h4>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                </div>
	                <div class="tab-pane fade" id="messages">
	                    <h4>Messages Tab</h4>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                </div>
	                <div class="tab-pane fade" id="settings">
	                    <h4>Settings Tab</h4>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                </div>
	            </div>
	        </div>
        </div>
    </div>
</div>