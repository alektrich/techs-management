@extends('master')

@section('content')
<div id="page-wrapper">

    <div class="container-fluid fullPage">

    	<h2>List of Jobs</h2>
    	@if(!$jobs->isEmpty())
    	<div class="table-responsive jobsTable">
			<table class="table table-hover">
				<tr>
				  	<th>ID</th>
				  	<th>Title</th>
				  	<th>Category</th>
				  	<th>Assigned To</th>
				  	<th>Location</th>
				  	<th>Priority</th>
				  	<th>Status</th>
				  	<th>Details</th>
				  	<th>Edit</th>
				  	<th>Delete</th>
				</tr>
			  
			  @foreach($jobs as $job)
			  <tr>
			  	<td>{{$job->id}}</td>
			  	<td>{{$job->title}}</td>
			  	<td>{{$job->category}}</td>
			  	<td>{{User::find($job->assigned_to)->name}}</td>
			  	<td>{{$job->location}}</td>
			  	<td>{{$job->priority}}</td>
			  	<td>{{$job->status}}</td>
			  	<td><a href="{{URL::to('jobs/' . $job->id)}}"><i class="glyphicon glyphicon-list-alt"></i></a></td>
			  	<td><a class="uManage" href="{{ URL::to('job/' . $job->id . '/edit') }}"><i class="glyphicon glyphicon-edit managejobs"></i></a></td>
			  	<td><a class="uManage" data-toggle="modal" data-target="#deleteModal-{{$job->id}}"><i class="glyphicon glyphicon-remove managejobs"></i></a></td>
			  </tr>
			  @endforeach
			</table>
    	</div>
    	@else
    	<p>No jobs to display.</p>
    	@endif
    	<button type="button" class="btn btn-info btn-large profilesButton" data-toggle="modal" data-target="#addJob"><i class="glyphicon glyphicon-plus"></i> Add New job</button>
    	
	</div>

</div>	

<!-- New Job Modal -->
	<div class="modal fade" id="addJob" tabindex="-1" role="dialog" aria-labelledby="addJobLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="addJobLabel">Add New Job</h4>
	      </div>
	      <div class="modal-body">
	        <div class="row">
			    <div class="col-md-8 col-md-offset-2">
			        {{ Form::open(array('route' => array('jobs.store'), 'method' => 'post')) }}
			        <div class="form-group">
			            {{Form::label('title','Title')}}
			            {{Form::text('title', null,array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('description','Description')}}
			            {{Form::textarea('description', null,array('class' => 'form-control'))}}
			        </div>
			         <div class="form-group">
			            {{Form::label('category','Category')}}
			            {{Form::select('category', $categories, array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('assigned_to','Assign To')}}
			            {{Form::select('assigned_to', $technicians, array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('location','Location')}}
			            {{Form::select('location', $locations, array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('priority','Priority')}}
			            {{Form::select('priority', $priorities, array('class' => 'form-control'))}}
			        </div>
			        
			    </div>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save Job</button>
	        {{ Form::close() }}
	      </div>
	    </div>
	  </div>
	</div>  
	<!-- /New Job Modal	 -->
@stop