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
	    	<button type="button" class="btn btn-info btn-large profilesButton"><i class="glyphicon glyphicon-plus"></i> Add New User</button>
		</div>
	</div>	  	
@stop