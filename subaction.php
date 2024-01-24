<?php
include("DatabaseCon.php");
$dept=$_GET['t1'];
$scode=$_GET['t3'];
$snm=$_GET['t2'];
$sem=$_GET['t4'];
$q="insert into subject(ccode,subcode,subname,sem)values('$dept','$scode','$snm','$sem')";
$db=new DatabaseCon;
$db->insertQuery($q);
header('location:subject.php');


?>