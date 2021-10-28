<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        font-size: 50px;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php

echo " Excellent Taste ";

$servername = "localhost";
$databasename = "excellenttaste";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password,$databasename);
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}
echo "<br />";
echo "connected successfully";

 ?>
