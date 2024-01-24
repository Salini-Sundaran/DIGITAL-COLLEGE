<?php
include("DatabaseCon.php");
$date=$_GET['t1'];
$not=$_GET['t2'];
$dept=$_GET['tt'];
$sem=$_GET['S'];
session_start();
$uid=$_SESSION['uid'];
$q="insert into pst(uid,dte,notify,dpt,sem)values('$uid','$date','$not','$dept','$sem')";
$db=new DatabaseCon;
$db->insertQuery($q);
header('location:notify.php');

?>