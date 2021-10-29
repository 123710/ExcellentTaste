<?php
$servername = "localhost";
$databasename = "excellenttaste";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password,$databasename);
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);

}
//hier gegevens ophalen aan de hand van $_GET['id']
?>
<html>
<body>
<form method="post">
<?php
if (isset($_GET['id'])) {
$sql = "SELECT * FROM reservering WHERE id='".$_GET['id']."'";
$rs  = $conn->query($sql);
while ($row = $rs->fetch_assoc()) {
echo "<tr>";
echo "<td>".$row['id']."<input type=hidden name=id value = ".$row['id']."></td>";
echo "<td>datum: <input type=text name=datum value='".$row['datum']."'></td>";
echo "<td>Tijd:<input type=text name=tijd value='".$row['tijd']."'></td>";
echo "<td>klant_id:<input type=text name=klant_id value='".$row['klant_id']."'></td>";
echo "<td>tafel_id:<input type=text name=tafel_id value='".$row['tafel_id']."'></td>";
echo "<td>aantal:<input type=text name=aantal value='".$row['aantal']."'></td>";
echo "<td><input type=submit name=ok value=ok></td>";
}
}
?>
</form>
</body>
</html>
<?php
  if(isset($_POST['ok'])) {
    $sql = "UPDATE reservering SET datum='".$_POST['datum']."' ,tijd='".$_POST['tijd']."',klant_id='".$_POST['klant_id']."'tafel_id='".$_POST['tafel_id']."'aantal='".$_POST['aantal']."' where id='".$_POST['id']."'";
//echo $sql;
    $rs  = $conn->query($sql);
    if ( $rs) {
      header('location: ./Reserveringen.php');
    }
    else
    {
      echo mysqli_error($conn);
    }
  }

 ?>
