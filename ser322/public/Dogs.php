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

<h2>Dogs</h2>

<div class="container">
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
      <tr>
        <td>Sasha</td>
        <td>4</td>
        <td>F</td>
        <td>Grey, Black and White</td>
        <td>Husky</td>
        <td>Phoneix</td>
      </tr>
       <tr>
        <td>Ginger</td>
        <td>10</td>
        <td>F</td>
        <td>Golden</td>
        <td>Golden Retriever</td>
        <td>Jacksonville</td>
      </tr>
      
       <tr>
        <td>Rex</td>
        <td>6</td>
        <td>M</td>
        <td>Black</td>
        <td>Black Lab</td>
        <td>Texas</td>
      </tr>

      </tr>
    </tbody>
  </table>
</div>

</body>
</php>

<?php include "templates/footer.php"; ?>