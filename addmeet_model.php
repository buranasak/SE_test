<?php
include('conn.php');

$title = $_POST['title'];
$roomid = $_POST['roomid'];
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

mysqli_query($conn, "insert into meeting(title,roomid,meetfile,numattend,head,end,start) values('$title','$roomid','$meetfilelocation','$numattend','$head','$end','$start')");
header('location:addmeet.php');
