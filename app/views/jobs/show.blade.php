@extends('master')

@section('content')
<div id="page-wrapper">

    <div class="container-fluid jobDetails">
		<div id="iframeHead"> 

			<h3>{{ $job->title }}</h3>

			<p><strong>Description:</strong> {{ $job->description }}</p>
			<p>
				<span><strong>Assigned To:</strong> {{ User::find($job->assigned_to)->name }}</span>
				<span><strong>Location:</strong> {{ $job->location }}</span>
				<span><strong>Category:</strong> {{ $job->category }}</span>
				<span><strong>Priority:</strong> {{ $job->priority }}</span>
			</p>

		</div>
		<div id="iframeBody">
		    <iframe name="mapFrame" id="mapFrame"		
			  width="600"
			  height="700"
			  frameborder="0" style="border:0"
			  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDpDBs668w-2HORB25aaEu-tSydv4wdeJQ&q={{ $job->location }}">
			</iframe>
	  	</div>
	</div>
</div>	  	
@stop