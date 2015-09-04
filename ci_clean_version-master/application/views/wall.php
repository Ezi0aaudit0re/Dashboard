
<html>
<head>
	<meta charset='utf-8'>
	<title>The wall</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<style type="text/css">
		#dropdownMenu1{
			width: 300px;
		}
		#message{
			margin-top: 50px;
		}
		hr{
			padding: 1px;
			background-color: orange;
		}
		li{
			margin-left: 10px;
		}
	</style>
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
					<h4 class="navbar-text" id='color'><a href="/dashboard">Dashboard</a></h4>
					<a href='/main/signin'><button type="button" class="btn btn-info navbar-btn"><strong class="glyphicon glyphicon-user"></strong> Profile</button></a>
					<a href='/main/logoff'><button type="button" class="btn btn-info navbar-btn pull-right"><strong class="glyphicon glyphicon-off"></strong> Log Off</button></a>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="dropdown">
			  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			    User Information
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" id="dropdownMenu1">
			    <li class="dropdown-header">Name: <?= $info['first_name'] . " " . $info['last_name'];?></li>
			    <li class="divider"></li>
			    <li> Registered at: <?= $info['created_at'];?></li>
			    <li> User ID: #<?= $info['id'];?></li>
			    <li> Email address: <?= $info['email'];?></li>
			    <li> Description: <?= $info['description'];?></li>
			  </ul>
			</div>
		</div>
		<div class="row" id='message'>
			<div class="panel panel-info">
			  	<div class="panel-heading">
			   		 <h3 class="panel-title">Leave a message for Aman Nagpal</h3>
			  	</div>
			  	<div class="panel-body">
			    	<div class="form-group">
 						<textarea class="form-control" rows="5" id="comment" placeholder="please enter a message"></textarea>
					</div>
					<button type='submit' class="btn btn-success pull-right">Post</button>
				</div>
			</div>	
		</div>
		<hr>
		<div class="row col-md-10 pull-right">
			<div class="panel panel-info">
			  	<div class="panel-heading">
			   		 <h3 class="panel-title">message</h3>
			  	</div>
			  	<div class="panel-body">
			    COMMENT
				</div>
			</div>	
		

		</div>
	</div>
</body>

</html>