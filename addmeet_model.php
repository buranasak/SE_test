<?php
session_start();
include('conn.php');

$id = $_POST['id'];
$title = $_POST['title'];
$roomid = $_POST['roomid'];
$roomname = $_POST['roomname'];
$listname=$_POST['listname'];
$head = $_POST['head'];
$numattend = $_POST['numattend'];
$end = $_POST['end'];
$start = $_POST['start'];
$addequipment = $_POST['addequipment'];
$remark = $_POST['remark'];

$file = $_FILES['meetfile'];
$filename = $_FILES["meetfile"]["name"];
$filTmpename = $_FILES["meetfile"]["tmp_name"];
$fileExt = explode(".", $filename);
$fileAcExt = strtolower(end($fileExt));
$newFilename = time() . "." . $fileAcExt;
$fileDes = 'upload/' . $newFilename;

move_uploaded_file($filTmpename,$fileDes);
$meetfilelocation=$fileDes;

mysqli_query($conn, "INSERT into events(title,head,numattend,listname,roomid,start,end,addequipment,remark,meetfile) 
                    values('$title','$head','$numattend','$listname','$roomid','$start','$end','$addequipment','$remark','$meetfilelocation')");
header('location:addmeet.php');
