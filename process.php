<?php
include_once 'database.php';
if(isset($_POST['save']))
{
  if (!empty($_POST['menu_item'])){
	 $menu_item = $_POST['menu_item'];

	 $sql = "INSERT INTO bestellingen (menu_item_id)

   FROM menu_item inner join bestellingen ON bestellingen.menu_item_id = menu_item.id
	 VALUES ('?')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}}
?>
