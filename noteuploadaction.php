<?php
include("DatabaseCon.php");
$dte=$_GET['t5'];
$title=$_GET['t1'];
$dept=$_GET['t2'];
$sem=$_GET['t4'];
$ftype=$_GET['tp'];
session_start();
$uid=$_SESSION['uid'];
$q="insert into upload(uid,dte,course,sem,type,title,filepath)values('$uid','$dte','$dept','$sem','$ftype','$title','')";
$db=new DatabaseCon;
$db->insertQuery($q);
header('location:fileupload.php');

?>