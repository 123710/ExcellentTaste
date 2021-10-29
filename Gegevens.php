<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- To ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style media="screen">
      body{


      }
      .BackgroundImage {
        background-image: url("Images/background.jpg");
        /* background-position: center;
        background-repeat: no-repeat; */
        background-size: 100%;
        /* position: relative; */
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="BackgroundImage">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <a style='font-family:cursive;' class="navbar-brand" href="Home.php">Excellent Taste</a>
    </div>

    <ul class="nav navbar-nav">
      <li><a href="Bestellingen.php">Bestellingen</a></li>
      <li><a href="Reserveringen">Reserveringen</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Overzichten <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="OverzichtBarman">Overzicht barman</a></li>
          <li><a href="OverzichtKok">Overzicht kok</a></li>
        </ul>
      </li>
      <li><a href="Gegevens.php">Gegevens</a></li>
    </ul>

  </div>
</nav>

    <div class="container">
  <h1>Gegevens</h1>
</div>

  </body>
</html>
<?php

// echo "<p style='color:red; position:absolute;'>" . 'Excellent Taste' . "</p>";

$servername = "localhost";
$databasename = "excellenttaste";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password,$databasename);
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}

 ?>
