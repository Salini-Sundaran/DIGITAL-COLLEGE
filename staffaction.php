<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
$name=$_GET['t1'];
$ads=$_GET['t2'];
$gen=$_GET['t3'];
$qua=$_GET['t4'];
$phn=$_GET['t5'];
$ema=$_GET['t6'];
$upass=$_GET['t7'];
$q="insert into staff(name,adrs,gender,quali,phone,email)values('$name','$ads','$gen','$qua','$phn','$ema')";
$db->insertQuery($q);

$s="select max(sid) as id from staff";
$result=$db->selectData($s);
$row=mysql_fetch_array($result);
$rid=$row['id'];
$qry="insert into login(uid,uname,upass,utype) values('$rid','$ema','$upass','staff')";
$db->insertQuery($qry);
header('location:staff.php');


?>