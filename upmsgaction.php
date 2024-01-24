<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['t0'];
$fn=$_GET['t1'];
$msg=$_GET['t2'];
$re=$_GET['t3'];
$q="update message set replay='$re' where msid='$id'";
$db->insertQuery($q);
header('location:fmsgview.php');
?>
