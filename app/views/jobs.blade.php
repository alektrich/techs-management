@extends('master')

@section('content')
<div id="page-wrapper">

    <div class="container-fluid jobDetails">
		<div id="iframeHead"> 

			<h4>#1 - Job in Toronto - Details will go below</h4>

		</div>
		<div id="iframeBody">
		    <iframe name="mapFrame" id="mapFrame"
		      top: 0
		      left: 0		
			  width="100%"
			  height="100%"
			  frameborder="0" style="border:0"
			  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDpDBs668w-2HORB25aaEu-tSydv4wdeJQ
			    &q=Toronto">
			</iframe>
	  	</div>
	</div>
</div>	  	
@stop
