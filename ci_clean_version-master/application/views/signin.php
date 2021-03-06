
<html>
<head>
	<meta charset='utf-8'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/signin.css">
	<title></title>
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
					<a href='/main/signin'><button type="button" class="btn btn-info navbar-btn pull-right"><strong class="glyphicon glyphicon-user"></strong> Sign in</button></a>
				</div>
			</nav>
		</div>
		<?php
		if(isset($error) && $error == true)
		{
			echo "<div class='alert alert-danger'>
  					 $error
				  </div>";
		}
		if(isset($sucess) && $sucess == true)
		{
			echo "<div class='alert alert-success'>
  					 $sucess
				  </div>";
		}	
		?>
		<div class="row">
			<h3>Sign In</h3>
			<form method='post' action='/signin'>
				<input type='text' name='email' placeholder='Email id'><br>
				<input type='password' name='password' placeholder='Password'>
				<input type='hidden' name='hidden' value='signin'><br>
				<button type='submit' class="btn btn-info">Sign In</button>
			</form>
		</div>
		<div class="row">
			<a href="/main/register">Dont have an account? Click here!!</a>
		</div>
	</div>
</body>
</html>
