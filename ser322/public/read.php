<?php include "templates/header.php"; ?>

<!DOCTYPE php>
<php lang="en">
<echo> <body style="background-color:teal"></echo>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
 
<div class="container">
  <h2>Petsposion</h2>
  <div class="panel panel-default">
    <div class="panel-body"><ul class="nav nav-pills nav-stacked">
  <li cla
  ss="active"><a href="#">Home</a></li>
  <li><a href="#">Cats</a></li>
  <li><a href="#">Dogs</a></li>
  <li><a href="#">Shelters</a></li>
</ul></div>
  </div>
</div>

</body>
</php>

<h2>Find animals based on pet type</h2>

<form method="post">
	<label for="type">Pet type</label>
	<input type="text" id="type" name="type">
	<input type="submit" name="submit" value="View Results">
</form>

<h2>Find pets based on age</h2>

<form method = "post">
	<label for= "age">Pet Age</label>
	<input type = "text" id="age" name = "age">
	<input type = "submit" name = "submit" value ="View Results">
</form>

<h2>Find pets based on breed</h2>
<form method = "post">
	<label for= "breed">Pet Breed</label>
	<input type = "text" id="breed" name = "breed">
	<input type = "submit" name = "submit" value ="View Results">
</form>

<h2>Find pets based on location</h2>
<form method = "post">
	<label for= "location">Pet Location</label>
	<input type = "text" id="location" name = "location">
	<input type = "submit" name = "submit" value ="View Results">
</form>

<h2>Find pets based on color</h2>
<form method = "post">
	<label for= "color">Pet Color</label>
	<input type = "text" id="color" name = "color">
	<input type = "submit" name = "submit" value ="View Results">
</form>

<h2>Find pets based on type and color</h2>
<form method = "post">
	<label for = "type">Pet Type and Color</label>
	<input type="text" id="type" name="type">
	<input type = "submit" name = "submit" value ="View Results">
</form>
<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>

