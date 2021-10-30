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
      body{}
      }
    </style>

    <meta charset="utf-8">
    <title></title>

  </head>

  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <a style='font-family:cursive;' class="navbar-brand" href="Home.php">Excellent Taste</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Bestellingen.php">Bestellingen</a></li>
      <li><a href="Reserveringen.php">Reserveringen</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Overzichten <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="OverzichtBarman.php">Overzicht barman</a></li>
          <li><a href="OverzichtKok.php">Overzicht kok</a></li>
        </ul>
      </li>
      <li><a href="Gegevens.php">Gegevens</a></li>
    </ul>

  </div>
</nav>

<?php
$servername = "localhost";
$databasename = "excellenttaste";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password,$databasename);
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}
 ?>
 <h1 style="text-align:center;">Bon Restaurant Excellent Taste</h1>
<table>
  <tr>
    <th>id &nbsp;</th>
    <th>reservering_id &nbsp;</th>
    <th>bedrag &nbsp;</th>

  </tr>

<?php


$sql = "SELECT * FROM bon";
$rs  = $conn->query($sql);
while ($row = $rs->fetch_assoc()) {

  echo "<tr'>

  <td>&nbsp;".$row['id']."</td>
  <td>&nbsp;".$row['reservering_id']."&nbsp;</td>
  <td>&nbsp;".$row['bedrag']."&nbsp;</td>
    <td><button type='button' class='btn'>Afdrukken</button></td>
"

;
  echo '<td><a style="color:white;" href="Bon.php?id='.$row['id'].'">Print</a>&nbsp;</td>';
  echo "</tr>";
}
 ?>
</table>
<!-- einde invul velden -->
  </body>
</html>
