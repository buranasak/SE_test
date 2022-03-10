<?php
	include('conn.php');
	$roomid=$_GET['roomid'];
	mysqli_query($conn,"delete from meeting where roomid='$roomid'");
	header('location:addmeet.php');

?>