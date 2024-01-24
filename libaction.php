<?php
include("DatabaseCon.php");
$dep=$_GET["t1"];
$sem =$_GET["t4"];
$sub =$_GET["t2"];
$pdf =$_GET["file"];
$date =$_GET["t3"];
$q="insert into libnote(dep,sem,sub,pdf,date)values('$dep','$sem','$sub','$pdf','$date')";
$db=new DatabaseCon;
$db->insertQuery($q);
header('location:librarytext.php');

?>