<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	{{ HTML::style('css/bootstrap/bootstrap.min.css') }}
	{{ HTML::style('css/left-sidebar.css') }}
	{{ HTML::style('css/right-sidebar.css') }}
	{{ HTML::style('css/dashboard.css') }}
	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
	{{ HTML::script('js/bootstrap/bootstrap.min.js') }}
	{{ HTML::script('js/navbar.js') }}
	{{ HTML::script('js/dashboard.js') }}
</head>
<body>

	<!-- Top navigation bar -->
	<nav class="navbar navbar-default" role="navigation">
	  	<div class="container-fluid">
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="{{URL::to('/')}}">Tehnicians Manager</a>
	    	</div>

	    	<!-- Collect the nav links, forms, and other content for toggling -->
			<ul class="nav navbar-nav">
	      		<li class="active navbar-link" id="appliances"><a href="#">Appliances</a></li>
	      		<li class="navbar-link" id="ducts"><a href="#">Ducts</a></li>
	      		<li class="navbar-link" id="interlock"><a href="#">Interlock</a></li>
	    	</ul> 
	  	</div><!-- /.container-fluid -->
	  <!-- Sidebar -->
	    <div id="sidebar-wrapper">
	        <ul class="sidebar-nav">
	            <li>
            		<div class="dropdown companyTechs">
					  <button class="btn btn-default dropdown-toggle" type="button" id="toronto" data-toggle="dropdown" aria-expanded="true">
					    Toronto
					    <span class="caret"></span>
					  </button>
					</div>
	            </li>
	            <div id="torontoTechs">
		            <ul>
			            <li>Tehnician 1</li>
			            <li>Tehnician 2</li>
			            <li>Tehnician 3</li>
	            	</ul>
	            </div>
	            <li>
            		<div class="dropdown companyTechs">
					  <button class="btn btn-default dropdown-toggle" type="button" id="calgary" data-toggle="dropdown" aria-expanded="true">
					    Calgary
					    <span class="caret"></span>
					  </button>
					</div>
	            </li>
	            <div id="calgaryTechs">
	            	<ul>
			            <li>Tehnician 1</li>
			            <li>Tehnician 2</li>
			            <li>Tehnician 3</li>
	            	</ul>
	            </div>
	            <li>
            		<div class="dropdown companyTechs">
					  <button class="btn btn-default dropdown-toggle" type="button" id="vancouver" data-toggle="dropdown" aria-expanded="true">
					    Vancouver
					    <span class="caret"></span>
					  </button>
					</div>
	            </li>
	            <div id="vancouverTechs">
		            <ul>
			            <li>Tehnician 1</li>
			            <li>Tehnician 2</li>
			            <li>Tehnician 3</li>
	            	</ul>
	            </div>
	        </ul>
	    </div>

</body>
</html>