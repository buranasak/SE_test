<?php
	include('conn.php');
	
	$meetid=$_GET['meetid'];
	
	$title=$_POST['title'];
	$head=$_POST['head'];
	$numattend=$_POST['numattend'];
	$listname=$_POST['listname'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$addequipment=$_POST['addequipment'];
	$meetfile=$_POST['meetfile'];
	$remark=$_POST['remark'];

	
	mysqli_query($conn,"update meeting set  
						meetid='$meetid',title='$title', head='$head', numattend='$numattend', listname='$listname', 
						roomid='$roomid',start='$start', end='$end', addequipment='$addequipment'
						meetfile='$meetfile', remark='$remark' where roomid='$roomid'");
	header('location:addmeet.php');

?>