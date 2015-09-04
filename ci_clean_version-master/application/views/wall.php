
<html>
<head>
	<meta charset='utf-8'>
	<title>The wall</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/assets/wall.css">
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
			   		 <h3 class="panel-title">Leave a message for <?= $info['first_name'] . " " . $info['last_name']?></h3>
			  	</div>
			  	<div class="panel-body" >			  		
			    	<div class="form-group">
 						<textarea class="form-control" form='usrform' rows="5" id="comment" placeholder="please enter a message" name='message'></textarea><br>						
						<form method='post' action='/message' id='usrform'>
							<input type='submit' value='Post' class="btn btn-success pull-right">
						</form>
					</div>					
				</div>
			</div>	
		</div>
		<hr>
		<?php foreach ($message as $value) {
		?>
			<div class="panel panel-info">
  				<div class="panel-heading">
  					<?php 
  						echo "<h5>{$value['first_name']} {$value['last_name']} wrote";
  						echo "<h5 id='time'>{$value['created_at']}";
  					?>
  				</div>
  				<div class="panel-body">
   					 <p><?= "<h4>{$value['message']}</h4>"?></p>
  				</div>
			  <ul class="list-group">
			  	<?php
			  		foreach ($comment as $values)
			  		{
			  			if($value['id'] == $values['messages_id'])
			  			{
			  				echo "<li class='list-group-item'><h5>{$values['first_name']} {$values['last_name']} wrote <span class='pull-right'> {$values['created_at']}</span></h5>{$values['comment']}</li>";
			  			}
			  		}
			  	?> 
			    <li class="list-group-item">
			    	<div class="form-group">
 						<form method='post' action="/comment/<?=$value['id']?>">
 								<textarea class="form-control"  rows="2" placeholder="please enter a comment" name='comment'></textarea><br>
							<input type='submit' value='Post' class="btn btn-success pull-right">
						</form>
					</div>
					<br>	
			    </li>
			  </ul>
			</div>
			<?php } ?>
		<!-- <div class="row col-md-10 pull-right">
			<?php
					
				?>
			<div class="panel panel-info">
				
			  	<div class="panel-heading">
			   		 <h3 class="panel-title">
			   			
			   		 	<?php
			   		 		
			   		 		
			   		 		
			   		 	;?>
			   		 	
			   		</h3>
			  	</div>
			  	<div class="panel-body">
			    	<div class="form-group">
 						<textarea class="form-control" form='usrform' rows="3" id="comment" placeholder="please enter a comment" name='comment'></textarea><br>						
						<form method='post' action='/comment' id='usrform'>
							<input type='submit' value='Comment' class="btn btn-warning pull-right">
						</form>
					</div>
			    
				</div>
			</div>	
		</div> -->
		
	</div>
</body>

</html>