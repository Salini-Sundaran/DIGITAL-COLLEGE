<?php
include("DatabaseCon.php");
$date=$_GET["t1"];

$dow=$_GET["file"];
$q="insert into timetable(date,dow)values('$date','$dow')";
$db=new DatabaseCon;
$db->insertQuery($q);
header('location:timetable.php');

?>