<?php include 'templates/header.php';?>
<html lang="en">
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
  <div class="panel panel-default">
    <div class="panel-body"><ul class="nav nav-pills nav-stacked">
<li class="active"><a href="http://petsplosion.com/index.php">Home</a></li>
  <li><a href="http://petsplosion.com/Cats.php">Cats</a></li>
  <li><a href="http://petsplosion.com/Dogs.php">Dogs</a></li>
  <li><a href="http://petsplosion.com/Shelters.php">Shelters</a></li>
</ul></div>
  </div>
  
<h2>Dogs</h2>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Sex</th>
        <th>Color</th>
        <th>Breed</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>

</body>
</html>
<?php include 'templates/footer.php';?>