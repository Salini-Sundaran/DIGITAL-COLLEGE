<?php
include("DatabaseCon.php");
$date=date("Y-m-d");
$rno=$_GET['t1'];
$msg=$_GET['m'];
session_start();
$uid=$_SESSION['uid'];
$q="insert into pta(rno,msg,mdate,faculty,rply)values('$rno','$msg','$date','$uid','')";
$db=new DatabaseCon;
$db->insertQuery($q);
header('location:fviewstud.php');

?>