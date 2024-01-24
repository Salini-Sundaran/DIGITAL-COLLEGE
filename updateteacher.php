<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['m1'];
$reg=$_GET['t0'];
$na=$_GET['t1'];
$ads=$_GET['t2'];
$city=$_GET['t3'];
$dis=$_GET['t4'];
$ph=$_GET['t5'];
$em=$_GET['t6'];
$dep=$_GET['tt'];
$sem=$_GET['s'];
$q="update registration set rno='$na',image='$ad',name='$phn',addr='$em',city='$city',dist='$dis',ph='$ph',emid='$em',dept='$dep',sem='$sem' where id='$id'";
$db->updateQuery($q);
header('location:studprofileview.php');
?>