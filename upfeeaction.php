<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['t0'];
$de=$_GET['t1'];
$sem=$_GET['t2'];
$fee=$_GET['t3'];
$cn=$_GET['t4'];
$cv=$_GET['t5'];
$d=$_GET['t6'];
$q="insert into payment(fid,dept,sem,fee,cname,cvvno,dte)values('$id','$de','$sem','$fee','$cn','$cv','$d')";
$db->insertQuery($q);
header('location:pfeeview.php');
?>
