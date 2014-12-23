@extends('master')

@section('content')
<div id="page-wrapper">

    <div class="container-fluid jobDetails">
		<div id="iframeHead"> 

			<h3>{{ $job->title }}</h3>

			<p>Description: {{ $job->description }}</p>
			<p>
				<span>Assigned To: {{ User::find($job->assigned_to)->name }}</span>
				<span>Location: {{ $job->location }}</span>
				<span>Category: {{ $job->category }}</span>
				<span>Priority: {{ $job->priority }}</span>
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