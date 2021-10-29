<?php
$servername = "localhost";
$databasename = "excellenttaste";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password,$databasename);
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}

if(isset($_GET['id'])) {

  $sql = "DELETE FROM reservering WHERE id='".$_GET['id']."'";
  $rs  = $conn->query($sql);
  if ( !$rs) {
    echo mysqli_error($conn);
  }
}
header('location: ./Reserveringen.php');

 ?>
