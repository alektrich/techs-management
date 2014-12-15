@extends('master')

@section('content')
	<div id="page-wrapper">

	    <div class="container-fluid fullPage">

	    	<h2>Manage Users</h2>
	    	<div class="table-responsive usersTable">
				<table class="table table-hover">
					<tr>
					  	<th>ID</th>
					  	<th>Name</th>
					  	<th>Email</th>
					  	<th>Level</th>
					  	<th>Edit</th>
					  	<th>Delete</th>
					</tr>
				  
				  @foreach($users as $user)
				  <tr>
				  	<td>{{$user->id}}</td>
				  	<td>{{$user->name}}</td>
				  	<td>{{$user->email}}</td>
				  	<td>
				  		@if($user->group === 1)
				  			Super Admin
				  		@elseif($user->group === 2)
				  			Admin
				  		@elseif($user->group === 3)
				  			Receptionist
				  		@elseif($user->group === 4)
				  			Manager
				  		@else
				  			Technician
				  		@endif
				  	</td>
				  	<td><i class="glyphicon glyphicon-edit"></i></td>
				  	<td><i class="glyphicon glyphicon-remove"></i></td>
				  </tr>
				  @endforeach
				</table>
	    	</div>
	    	<button type="button" class="btn btn-info btn-large profilesButton" data-toggle="modal" data-target="#addUser"><i class="glyphicon glyphicon-plus"></i> Add New User</button>
		</div>
	</div>	

	<!-- Modal -->
	<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="addUserLabel">Add New User</h4>
	      </div>
	      <div class="modal-body">
	        <div class="row">
			    <div class="col-md-4 col-md-offset-4">
			        {{ Form::open(array('route' => array('user.store'), 'method' => 'post')) }}
			        <div class="form-group">
			            {{Form::label('name','Name')}}
			            {{Form::text('name', null,array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('email','Email')}}
			            {{Form::text('email', null,array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('password','Password')}}
			            {{Form::password('password',array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('group','Level')}}
			            {{Form::select('group', $groups, array('class' => 'form-control'))}}
			        </div>
			    </div>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save User</button>
	        {{ Form::close() }}
	      </div>
	    </div>
	  </div>
	</div>  	
@stop