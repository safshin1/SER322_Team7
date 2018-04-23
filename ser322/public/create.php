<?php include "templates/header.php"; ?>
<echo> <body style="background-color:teal"></echo>
<head>
  <title>Create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body"><ul class="nav nav-pills nav-stacked">
<li class="active"><a href="http://petsplosion.com/index.php">Home</a></li>
  <li><a href="http://petsplosion.com/Cats.php">Cats</a></li>
  <li><a href="http://petsplosion.com/Dogs.php">Dogs</a></li>
  <li><a href="http://petsplosion.com/Shelters.php">Shelters</a></li>
</ul></div>
  </div>

<form method="post">
	<label for="firstname">First Name</label>
	<input type="text" name="firstname" id="firstname"><br>
	<label for="lastname">Last Name</label>
	<input type="text" name="lastname" id="lastname"><br>
	<label for="email">Email Address</label>
	<input type="text" name="email" id="email"><br>
	<label for="age">Age</label>
	<input type="text" name="age" id="age"><br>
	<label for="location">Location</label>
	<input type="text" name="location" id="location"><br><br>	
	<input type="submit" name="submit" value="Submit">
</form>

<?php include "templates/footer.php"; ?>