<?php
include('conn.php');

$title = $_POST['title'];
$roomid = $_POST['roomid'];
$roomname = $_POST['roomname'];
$listname=$_POST['listname'];
$head = $_POST['head'];
$numattend = $_POST['numattend'];
$end = $_POST['end'];
$start = $_POST['start'];


$file = $_FILES['meetfile'];
$filename = $_FILES["meetfile"]["name"];
$filTmpename = $_FILES["meetfile"]["tmp_name"];
$fileExt = explode(".", $filename);
$fileAcExt = strtolower(end($fileExt));
$newFilename = time() . "." . $fileAcExt;
$fileDes = 'upload/' . $newFilename;

move_uploaded_file($filTmpename,$fileDes);
$meetfilelocation=$fileDes;

mysqli_query($conn, "insert into events(title,roomid,meetfile,numattend,head,end,start,roomname) values('$title','$roomid','$meetfilelocation','$numattend','$head','$end','$start','$roomname')");
header('location:addmeet.php');
