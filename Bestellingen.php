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
      body{ background-color: rgb(0, 0, 255);
        font-family: Lucida grande Plain;
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
      <li ><a href="Bestellingen.php">Bestellingen</a></li>
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
<!-- tabel -->

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
   <a href="Bon.php" class="btn btn-info" role="button">Bon voor klant</a>
 <h1 style="text-align:center;">EXCELLENT TASTE MENUKAART</h1>

 <?php

 include ("BestellingToevoegen.php");
 //
 // $sql = "SELECT * FROM gerecht";
 // $rs  = $conn->query($sql);
 // while ($row = $rs->fetch_assoc()) {
 //   echo "<tr>";
 //   // echo "<td>&nbsp;".$row['id']."</td>";
 //    echo "<td>&nbsp;".$row['gerecht']."&nbsp;</td>";
 //    echo "</tr>";
 // }
 //
 // $sql = "SELECT * FROM subgerecht";
 // $rs  = $conn->query($sql);
 // while ($row = $rs->fetch_assoc()) {
 //   echo "<tr>";
 //   echo "<td>&nbsp;".$row['subgerecht']."&nbsp;</td>";
 //   echo "</tr>";
 // }
 $sql = "SELECT * FROM menu_item";

 // $insert = "INSERT into Bestellingen (menu_item_id) VALUES ('$Toevoegen')";
 // , gerecht, subgerecht
// <th>&nbsp;".$row['gerecht']."&nbsp; <br><br>&nbsp;".$row['subgerecht']."&nbsp;</th>
 $rs  = $conn->query($sql);
 while ($row = $rs->fetch_assoc()) {


   echo "
<form method='post' action='process.php'>
        <div style='background-color:rgb(204, 204, 0);' class='container'>
         <table style='color:black;background-color:rgb(204, 204, 0);' class='table table-hover'>

          <thead>
           <tr>
           </tr>
         </thead>
        <tbody>
         <tr>
         <td>&nbsp;".$row['id']."&nbsp;".$row['menu_item']."&nbsp;</td>

         <td>&nbsp;€ ".$row['prijs']."&nbsp;</td>";
   echo '<td >  <input type="submit" name="menu_item_id">Toevoegen</input>&nbsp;</td>' ;
   // echo '<td><a   href="ReserveringenDelete.php?id='.$row['id'].'">Verwijderen</a>&nbsp;</td>';
   echo "</tr>
        </tbody>
        </table>
        </div>
        </form>";
 }

     ?>
 </table>
 <!-- einde invul velden -->



   </body>
 </html>

<div style="background-color:white;" class="container">

</div>

<!-- tabel -->


  </body>
</html>
