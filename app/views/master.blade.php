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
	<nav class="navbar navbar-inverse topbar" role="navigation">
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
			            <div id="torontoTechs">
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
			            <div id="calgaryTechs">
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
			            <div id="vancouverTechs">
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

		    <div class="col-md-8" id="jobSearchBar">
		    	<div class="col-md-12">
				    <div class="input-group">
				      <input type="text" class="form-control" placeholder="Search Scheduled Jobs">
				      <span class="input-group-btn">
				        <button class="btn btn-success" type="button">Search</button>
				      </span>
				    </div><!-- /input-group -->
				</div><!-- /.col-lg-6 -->
				<div class="panel panel-default col-md-12 jobDetails">
					  <div class="panel-heading"> #1 - Job in Toronto - Details will go below</div>
					  <div class="panel-body">
					    <iframe name="mapFrame" id="mapFrame"
						  width="600"
						  height="350"
						  frameborder="0" style="border:0"
						  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDpDBs668w-2HORB25aaEu-tSydv4wdeJQ
						    &q=Toronto">
						</iframe>
					  </div>
				</div>
	        </div>
			<!-- /Central container -->

			<!-- Right Sidebar -->
			<div class="col-md-2">
				<div class="container-fluid">

				    <div id="right-sidebar-wrapper">
				        <ul class="right-sidebar-nav">
				            <li>Super Admin Options</li>
				        </ul>
				    </div>
				</div>
			</div>	
			<!-- /Right sidebar -->
			
		</div>
	</div>  	



</body>
</html>