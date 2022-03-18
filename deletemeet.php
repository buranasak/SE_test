<?php
	include('conn.php');
	$roomid=$_GET['id'];
	mysqli_query($conn,"delete from events where id='$id'");
	header('location:addmeet.php');

?>