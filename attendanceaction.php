<?php
include ('DatabaseCon.php');
$db=new DatabaseCon();
$n=$_GET['t1'];
$c=$_GET['t2'];
$t=$_GET['status'];
$q="insert into attendance(Name,Class,Type) values('$n','$c','$t')";
$db->insertQuery($q);
echo"<script> alert('successfully stored'); window.location='attendance.php'; </script>";
?>