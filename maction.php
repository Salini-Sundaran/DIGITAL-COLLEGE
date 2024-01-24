<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$q="select * from registration where id='$val'";
$rs=$db->selectData($q);
$row=mysql_fetch_array($rs);
$n=$row['name'];
$fn=$_GET["t1"];
$m=$_GET["t2"];
$re=$_GET["t3"];
$q1="insert into message(faname,message,studname,vid,replay) values('$fn','$m','$n','$val','nil')";
$db->insertQuery($q1);
 header('location:message.php');
 ?>