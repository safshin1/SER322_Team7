<?php include "templates/header.php"; ?>

<h2>Find animals based on pet type</h2>

<form method="post">
	<label for="type">Pet type</label>
	<input type="text" id="type" name="type">
	<input type="submit" name="submit" value="View Results">
</form>

<h3>Find pets based on age</h3>

<form> method = "post"
	<label for= "age">Pet Age</label>
	<input type = "text" id="age" name = "age">
	<input type = "submit" name = "submit" value ="View Results">
</form>

<h4>Find pets based on breed</h4>
<form> method = "post"
	<label for= "breed">Pet Breed</label>
	<input type = "text" id="breed" name = "breed">
	<input type = "submit" name = "submit" value ="View Results">
</form>

<h5>Find pets based on location</h5>
<form> method = "post"
	<label for= "location">Pet Location</label>
	<input type = "text" id="location" name = "location">
	<input type = "submit" name = "submit" value ="View Results">
</form>

<h6>Find pets based on color</h6>
<form> method = "post"
	<label for= "color">Pet Color</label>
	<input type = "text" id="color" name = "color">
	<input type = "submit" name = "submit" value ="View Results">
</form>

<h7>Find pets based on type and color</h7>
<form> method = "post"
	<label for = "type">Type</label>
	<label for= "color">Pet Color</label>
	<input type="text" id="type" name="type">
	<input type = "text" id="color" name = "color">
	<input type = "submit" name = "submit" value ="View Results">
</form>
<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>
