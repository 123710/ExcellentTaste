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
   body{color: gray;}
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
<!-- invul velden -->
<div style="display: inline-block;float:left;font-size:17px;">
  datum: <br><br>
  tijd:<br><br>
  klant_id: <br><br>
  tafel_id:<br><br>
  aantal: <br><br>
</div>
<div style="display: inline-block;">
<form action="ReserveringenCreate.php" method="post">
   <input type="text" name="datum" value="" required><br><br>
   <input type="text" name="tijd" value="" required><br><br>
   <input type="text" name="klant_id" value="" required><br><br>
   <input type="text" name="tafel_id" value="" required><br><br>
   <input type="text" name="aantal" value="" required><br><br>
   <input style="color:black;" type="submit" name="create" value="create"><br><br>

</div>
</form>
<table>
  <tr>
    <th>id &nbsp;</th>
    <th>datum &nbsp;</th>
    <th>tijd &nbsp;</th>
    <th>klant_id &nbsp;</th>
    <th>tafel_id &nbsp;</th>
    <th>aantal &nbsp;</th>
  </tr>

<?php
include ("ReserveringenCreate.php");
$sql = "SELECT * FROM reservering";
$rs  = $conn->query($sql);
while ($row = $rs->fetch_assoc()) {
  echo "<tr>";
  echo "<td>&nbsp;".$row['id']."</td>";
  echo "<td>&nbsp;".$row['datum']."&nbsp;</td>";
  echo "<td>&nbsp;".$row['tijd']."&nbsp;</td>";
  echo "<td>&nbsp;".$row['klant_id']."&nbsp;</td>";
  echo "<td>&nbsp;".$row['tafel_id']."&nbsp;</td>";
  echo "<td>&nbsp;".$row['aantal']."&nbsp;</td>";
  // echo "<td><input type=text name=id value='".$row['id']."'></td>";
  // echo "<td><input type=text name=datum value='".$row['datum']."'></td>";
  // echo "<td><input type=text name=tijd value='".$row['tijd']."'></td>";
  // echo "<td><input type=text name=klant_id value='".$row['klant_id']."'></td>";
  $bday = new DateTime($row['datum']); // Your date of birth;
  $today = new Datetime(date('m.d.y'));
  $diff = $today->diff($bday);
  echo "<td>";
  printf(' %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
  echo "</td>";
  // echo "<td><input type=submit name=Update value=update></td> ";
  // echo "<td><input type=submit name=delete value=delete></td>";

  echo '<td><a style="color:white;" href="ReserveringenUpdate.php?id='.$row['id'].'">Wijzigen</a>&nbsp;</td>';
  echo '<td><a style="color:white;" href="ReserveringenDelete.php?id='.$row['id'].'">Verwijderen</a>&nbsp;</td>';
  echo "</tr>";
}
 ?>
</table>
<!-- einde invul velden -->

    <div class="container">
  <h1>Reserveringen</h1>
</div>

  </body>
</html>
