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

if (isset($_POST['Maak bestelling'])) {
  $gerecht=$_POST['gerecht'];
  $subgerecht= $_POST['subgerecht'];
  $menu_item=$_POST['menu_item'];
  $query ="INSERT into reservering (gerecht,subgerecht,menu_item,tafel_id,aantal)
          values ('$gerecht','$subgerecht','$menu_item','$tafel_id','$aantal')";

  if ( $conn->query($query)) {
    echo "data is created";
    header('location: ./Bestellingen.php');

  }
  else
  {
    echo mysqli_error($conn);
  }
  }


 ?>
