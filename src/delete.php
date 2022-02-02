<?php
include("connect.php")

if(isset($_POST['id'])){
	foreach($_POST['id'] as $id){
		$query="DELETE FROM assignmentdb WHERE id='$id'"
		mysqli_query($conn, $query)
	}
}
?>
