<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"DELETE from events where id='$id'");
	header('location:addmeet.php');

?>