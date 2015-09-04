<html>
<head>
	<meta charset='utf-8'>
	<title>Edit profile</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/editprofile.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header ">
						<a class="navbar-brand" href="/main/index">
							<strong class="glyphicon glyphicon-home" id='color'></strong>
						</a>
					</div>
					<h4 class="navbar-text" id='color'>Test App</h4>
					<a href="/dashboard"><h4 class="navbar-text" id='color'>Dashboard</h4></a>
					<button type="button" class="btn btn-info navbar-btn"><strong class="glyphicon glyphicon-user"></strong> Profile</button>
					<a href='/main/logoff'><button type="button" class="btn btn-info navbar-btn pull-right"><strong class="glyphicon glyphicon-off"></strong> Log Off</button></a>
				</div>
			</nav>
		</div>
		<?php
		if(isset($sucess) && $sucess==TRUE)
		{
			echo "<div class='alert alert-success'>
  						$sucess
					  </div>";
		}

		?>
		<div class="row pull-left" id='editinfo'>
			<div>
				<div class="panel panel-info">
					  <div class="panel-heading">
					    	<h3 class="panel-title">Edit Information</h3>
					  </div>
					  <div class="panel-body">
					    	<form method='POST' action='/main/editemail'>
								<input type='email' name='email' placeholder='Email address of the user'><br>
								<input type='text' name='first_name' placeholder='First Name of the user'><br>
								<input type='text' name='last_name' placeholder='Last Name of the user'><br>
								<a href="#"><button class="btn btn-info"><strong class="glyphicon glyphicon-floppy-save"></strong> Save</button></a>
							</form>
					  </div>
				</div>
			</div>
		</div>
		<div class="row pull-right" id='password'>
			<div class="panel panel-info">
				  <div class="panel-heading">
				    	<h3 class="panel-title">Edit Information</h3>
				  </div>
				  <div class="panel-body">
				  	<form>
						<input type='password' name='password' placeholder='Password'><br>
						<input type='password' name='cpassword' placeholder='Confirm Password'><br>
						<a href="#"><button class="btn btn-info"><strong class="glyphicon glyphicon-floppy-save"></strong> Update Password</button></a>
					</form>  
				  </div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-warning">
					  <div class="panel-heading">
					    	<h3 class="panel-title">Edit Description</h3>
					  </div>
					  <div class="panel-body">
					  	<div class="form-group">
     						<textarea class="form-control" rows="5" id="comment"></textarea>
    					</div>
					  </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>