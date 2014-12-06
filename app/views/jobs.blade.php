@extends('master')

@section('content')

<div class="col-md-8" id="jobSearchBar">
	<div class="col-md-12">
	    <div class="input-group col-md-12 searchBar">
	      	<input type="text" class="form-control" placeholder="Search Scheduled Jobs">
	      	<span class="input-group-btn">
	        	<button class="btn btn-success" type="button">Search</button>
	      	</span>
	    </div><!-- /input-group -->
	</div><!-- /.col-lg-6 -->
	<div class="panel panel-default jobDetails">
	  	<div class="panel-heading" id="iframeHead"> #1 - Job in Toronto - Details will go below</div>
	  	<div class="panel-body" id="iframeBody">
		    <iframe name="mapFrame" id="mapFrame"
			  width="1161"
			  height="501"
			  frameborder="0" style="border:0"
			  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDpDBs668w-2HORB25aaEu-tSydv4wdeJQ
			    &q=Toronto">
			</iframe>
	  	</div>
	</div>
</div>

@stop
