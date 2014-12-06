<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		{{ HTML::style('css/bootstrap/bootstrap.min.css') }}
		{{ HTML::style('css/left-sidebar.css') }}
		{{ HTML::style('css/dashboard.css') }}
		{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
		{{ HTML::script('js/bootstrap/bootstrap.min.js') }}
		{{ HTML::script('js/navbar.js') }}
		{{ HTML::script('js/dashboard.js') }}
	</head>
	<body>

		<!-- Top navigation bar -->
		<nav class="navbar navbar-inverse topbar" role="navigation">
		  	<div class="container-fluid">
		    	<!-- Brand and toggle get grouped for better mobile display -->
		    	<div class="navbar-header">
		      		<a class="navbar-brand" href="{{URL::to('/')}}">Qfix Tech Manager</a>
		    	</div>

		    	<!-- Collect the nav links, forms, and other content for toggling -->
				<ul class="nav navbar-nav">
		      		<li class="active navbar-link" id="appliances"><a href="#">Appliances</a></li>
		      		<li class="navbar-link" id="ducts"><a href="#">Ducts</a></li>
		      		<li class="navbar-link" id="interlock"><a href="#">Interlock</a></li>
		    	</ul> 
		  	</div><!-- /.container-fluid -->
		</nav>  	
		<div class="container">
			<div class="row">
			    <!-- Left Sidebar -->
			    <div class="col-md-2">

				  	<div class="container-fluid">
					    <div id="sidebar-wrapper">
						    <h4 id="category">Appliances</h4>
					        <ul class="sidebar-nav">
					            <li>
				            		<div class="dropdown companyTechs">
									  <button class="btn btn-info cityDropDown" type="button" id="toronto" data-toggle="dropdown" aria-expanded="true">
									    Toronto
									    <span class="caret"></span>
									  </button>
									</div>
					            </li>
					            <div id="torontoTechs" class="techsList">
						            <ul>
							            <li>Tehnician 1</li>
							            <li>Tehnician 2</li>
							            <li>Tehnician 3</li>
					            	</ul>
					            </div>
					            <li>
				            		<div class="dropdown companyTechs">
									  <button class="btn btn-info cityDropDown" type="button" id="calgary" data-toggle="dropdown" aria-expanded="true">
									    Calgary
									    <span class="caret"></span>
									  </button>
									</div>
					            </li>
					            <div id="calgaryTechs" class="techsList">
					            	<ul>
							            <li>Tehnician 1</li>
							            <li>Tehnician 2</li>
							            <li>Tehnician 3</li>
					            	</ul>
					            </div>
					            <li>
				            		<div class="dropdown companyTechs">
									  <button class="btn btn-info cityDropDown" type="button" id="vancouver" data-toggle="dropdown" aria-expanded="true">
									    Vancouver
									    <span class="caret"></span>
									  </button>
									</div>
					            </li>
					            <div id="vancouverTechs" class="techsList">
						            <ul>
							            <li>Tehnician 1</li>
							            <li>Tehnician 2</li>
							            <li>Tehnician 3</li>
					            	</ul>
					            </div>
					        </ul>
					    </div>
					</div>
			    </div>
				<!-- /Left Sidebar -->

				<!-- Central container -->
				@yield('content')
				<!-- /Central container -->
				
			</div>
		</div>  	

	</body>
</html>