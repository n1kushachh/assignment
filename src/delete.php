<?php
	include("connect.php");
	$id = $_GET['id'];
	$q = "delete from assignmentdb where id = $id ";
	mysqli_query($conn,$q);	
?>
