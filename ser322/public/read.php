<?php include "templates/header.php"; ?>

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
	<label> for= "color"Pet Color</label>
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

