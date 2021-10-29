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

 if (isset($_POST['create'])) {
   $datum=$_POST['datum'];
   $tijd= $_POST['tijd'];
   $klant_id=$_POST['klant_id'];
   $tafel_id= $_POST['tafel_id'];
   $aantal=$_POST['aantal'];
   $query ="INSERT into reservering (datum,tijd,klant_id,tafel_id,aantal)
           values ('$datum','$tijd','$klant_id','$tafel_id','$aantal')";

   if ( $conn->query($query)) {
     echo "data is created";
     header('location: ./Reserveringen.php');

   }
   else
   {
     echo mysqli_error($conn);
   }
   }


  ?>
