<?php
include("DatabaseCon.php");

$rno=$_GET['t1'];
$subcode=$_GET['t2'];
$mrk=$_GET['t3'];
$mrkof=$_GET['t4'];
$tdt=$_GET['t5'];
$q="insert into marks(studentid,subject,marks,mof,tdate)values('$rno','$subcode','$mrk','$mrkof','$tdt')";
$db=new DatabaseCon;
$db->insertQuery($q);
header('location:fviewstud.php');

?>