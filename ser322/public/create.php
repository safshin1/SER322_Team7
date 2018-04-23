<?php include 'templates/header.php';?>
<echo> <body style="background-color:teal"></echo>
	
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<div class="container">
  <div class="panel panel-default">
  <div class="panel-body"><ul class="nav nav-pills nav-stacked">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Cats</a></li>
  <li><a href="#">Dogs</a></li>
  <li><a href="#">Shelters</a></li>
</ul></div>
  </div>
	<ul>
		<li><a href="create.php"><strong>Create</strong></a> - add a user</li>
		<li><a href="read.php"><strong>Read</strong></a> - find a user</li>
	</ul>
	<?php include 'templates/footer.php';?>

