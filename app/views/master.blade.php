<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		{{ HTML::style('css/bootstrap/bootstrap.min.css') }}
		{{ HTML::style('css/dashboard.css') }}
		{{ HTML::style('css/font-awesome-4.1.0/css/font-awesome.min.css') }}
		{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
		{{ HTML::script('js/bootstrap/bootstrap.min.js') }}
		{{ HTML::script('js/navbar.js') }}
		{{ HTML::script('js/dashboard.js') }}
	</head>
	<body>
		<div id="wrapper">
			<!-- Top navigation bar -->
			<nav class="navbar navbar-inverse navbar-fixed-top topBarNav" role="navigation">
			  	<div class="container-fluid topBarContainer">
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
			    	<ul class="nav navbar-nav navbar-right">
			    		<li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">Info</a></li>
				            <li><a href="#">Tutorial</a></li>
				            <li><a href="#">Settings</a></li>
				            <li class="divider"></li>
				            <li><a href="logout">Logout</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jobs <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">Schedule New Job</a></li>
				            <li><a href="#">Edit Jobs</a></li>
				            <li><a href="#">Sort Jobs</a></li>
				            <li><a href="#">Remove Jobs</a></li>
				            <li class="divider"></li>
				            <li><a href="#">Insert Note</a></li>
				          </ul>
				        </li>
				    </ul>
			  	</div><!-- /.container-fluid -->
			  	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	            <div class="collapse navbar-collapse navbar-ex1-collapse">
			        <ul class="nav navbar-nav side-nav">
			            <li>
		            		<div class="dropdown companyTechs">
							  <button class="btn btn-info cityDropDown" type="button" id="toronto" data-toggle="dropdown" aria-expanded="true">
							    Toronto
							    <span class="caret"></span>
							  </button>
							</div>
			            </li>

			            <li class="techs">
			            	<div class="torontoTechs companyTechs">
					            <i class="fa fa-user"></i> Techician 1
			            	</div>	
			            </li>
			            <li class="techs">
			            	<div class="torontoTechs companyTechs">
					            <i class="fa fa-user"></i> Techician 2
			            	</div>	
			            </li>
			            <li class="techs">
			            	<div class="torontoTechs companyTechs">
					            <i class="fa fa-user"></i> Techician 3
			            	</div>	
			            </li>
			           
			            <li>
		            		<div class="dropdown companyTechs">
							  <button class="btn btn-info cityDropDown" type="button" id="calgary" data-toggle="dropdown" aria-expanded="true">
							    Calgary
							    <span class="caret"></span>
							  </button>
							</div>
			            </li>

			            <li class="techs">
			            	<div class="calgaryTechs companyTechs">
					            <i class="fa fa-user"></i> Techician 1
			            	</div>	
			            </li>
			            <li class="techs">
			            	<div class="calgaryTechs companyTechs">
					            <i class="fa fa-user"></i> Techician 2
			            	</div>	
			            </li>
			            <li class="techs">
			            	<div class="calgaryTechs companyTechs">
					            <i class="fa fa-user"></i> Techician 3
			            	</div>	
			            </li>
			            
			            <li>
		            		<div class="dropdown companyTechs">
							  <button class="btn btn-info cityDropDown" type="button" id="vancouver" data-toggle="dropdown" aria-expanded="true">
							    Vancouver
							    <span class="caret"></span>
							  </button>
							</div>
			            </li>

			            <li class="techs">
			            	<div class="vancouverTechs companyTechs">
					            <i class="fa fa-user"></i> Techician 1
			            	</div>	
			            </li>
			            <li class="techs">
			            	<div class="vancouverTechs companyTechs">
					            <i class="fa fa-user"></i> Techician 2
			            	</div>	
			            </li>
			            <li class="techs">
			            	<div class="vancouverTechs companyTechs">
					            <i class="fa fa-user"></i> Techician 3
			            	</div>	
			            </li>
			           
			        </ul>
	            </div>
	            <!-- /.navbar-collapse -->
			</nav>  	
			<!-- /Left Sidebar -->

			<!-- Central container -->
			@yield('content')
			<!-- /Central container -->
		</div>  	
	</body>
</html>