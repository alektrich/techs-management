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
	      		<li class="active navbar-link"><a href="#">Appliances</a></li>
	      		<li class="navbar-link"><a href="#">Ducts</a></li>
	      		<li class="navbar-link"><a href="#">Interlock</a></li>
	    	</ul> 
	  	</div><!-- /.container-fluid -->
	  <!-- Sidebar -->
	    <div id="sidebar-wrapper">
	        <ul class="sidebar-nav">
	            <li>
            		<div class="dropdown companyTechs">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
					    Toronto
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Technician 1</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Technician 2</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Technician 3</a></li>
					  </ul>
					</div>
	            </li>
	            <li>
            		<div class="dropdown companyTechs">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="true">
					    Calgary
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Technician 1</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Technician 2</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Technician 3</a></li>
					  </ul>
					</div>
	            </li>
	            <li>
            		<div class="dropdown companyTechs">
					  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-expanded="true">
					    Vancouver
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Technician 1</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Technician 2</a></li>
					    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Technician 3</a></li>
					  </ul>
					</div>
	            </li>
	        </ul>
	    </div>

</body>
</html>