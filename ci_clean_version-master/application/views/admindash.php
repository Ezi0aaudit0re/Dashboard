
<html>
<head>
	<meta charset='utf-8'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/admindash.css">
	<title>Admin Dashboard</title>
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
					<a href='/main/editprofile'><button type="button" class="btn btn-info navbar-btn"><strong class="glyphicon glyphicon-user"></strong> Profile</button></a>
					<a href='/main/logoff'><button type="button" class="btn btn-info navbar-btn pull-right"><strong class="glyphicon glyphicon-off"></strong> Log Off</button></a>
				</div>
			</nav>
		</div>

		<div class="row">
			<div class="panel panel-default">
				 <div class="panel-heading">
				 	Manage users
				 	<a href='/main/adminadduser'><button type="button" class="btn btn-info pull-right" id='addnew'><strong class="glyphicon glyphicon-user"></strong> Add new</button></a>
				 </div>
				 <div class="panel-body">
				  	<p>Here the admin can add and remove users</p>
				</div>
				<table class='table table-hover'>
					<thead>
						<tr class='info'>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Created at</th>
							<th>User_level</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr class="warning">
							<?php
							foreach ($info as $value) 
							{	
								echo "<tr class='warning'>";
								echo "<td>{$value['id']}</td>";
								echo "<td>{$value['first_name']} {$value['last_name']}</td>";
								echo "<td>{$value['email']} </td>";
								echo "<td>{$value['created_at']}</td>";
								echo "<td>{$value['type']}</td>";
								echo "<td><a href='/main/remove/{$value['id']}'>remove</a></td>";
								echo "</tr>";
							}
							

							?>
						</tr>
					</tbody>
				</table>
			</div>	
		</div>
	</div>
</body>
</html>