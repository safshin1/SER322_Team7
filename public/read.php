<?php include "templates/header.php"; ?>

<h2>Find animals based on pet type</h2>

<form method="post">
	<label for="type">Pet type</label>
	<input type="text" id="type" name="type">
	<input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>
