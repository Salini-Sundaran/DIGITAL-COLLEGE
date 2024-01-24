<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
$de=$_GET["t1"];
$se=$_GET["t2"];
$fe=$_GET["t3"];
$q1="insert into fee(dept,sem,fees) values('$de','$se','$fe')";
$db->insertQuery($q1);
 header('location:fee.php');
 ?>