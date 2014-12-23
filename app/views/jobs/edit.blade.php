@extends('master')

@section('content')

<div id="page-wrapper">
	<div class="container-fluid fullPage">
		<div class="row">
		    <div class="col-md-6 col-md-offset-1 editJob">
		        {{ Form::open(array('route' => array('jobs.update'), 'method' => 'post')) }}
			        <div class="form-group">
			            {{Form::label('title','Title')}}
			            {{Form::text('title', $job->title, array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('description','Description')}}
			            {{Form::textarea('description', $job->description, array('class' => 'form-control'))}}
			        </div>
			         <div class="form-group">
			            {{Form::label('category','Category')}}
			            {{Form::select('category', $data["categories"], $job->category, array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('assigned_to','Assign To')}}
			            {{Form::select('assigned_to', $data["technicians"], $job->technician, array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('location','Location')}}
			            {{Form::select('location', $data["locations"], $job->location, array('class' => 'form-control'))}}
			        </div>
			        <div class="form-group">
			            {{Form::label('priority','Priority')}}
			            {{Form::select('priority', $data["priorities"], $job->priority, array('class' => 'form-control'))}}
			        </div>
		        <div class="form-group">
			        <button type="submit" class="btn btn-primary">Update Job</button>
			        <a href="{{ URL::to('jobs') }}" type="button" class="btn btn-info">Back To Jobs List</a>
		        </div>
		    </div>
		</div>
	</div>
</div>	

@stop