<?php
	include("connect.php");
	$id = $_GET['id'];
	$q = "delete from test where id = $id ";
	mysqli_query($conn,$q);	
?>
