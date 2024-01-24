<?php
include("DatabaseCon.php");
$name=$_GET["t1"];
$gnder =$_GET["sex"];
$dob =$_GET["t3"];
$adr =$_GET["t4"];
$phn =$_GET["t12"];
$eml =$_GET["t13"];
$qua =$_GET["t"];
$up=$_GET["file"];
$dpt =$_GET["tt"];
$unme =$_GET["t14"];
$upass =$_GET["t15"];
$qry="insert into faculty(name,gnder,dob,adr,phn,eml,qua,up,dpt) values('$name','$gnder','$dob','$adr','$phn','$eml','$qua','$up','$dpt')";
$db=new DatabaseCon;
$db->insertQuery($qry);
$s="select max(id) as id from faculty";
$result=$db->selectData($s);
$row=mysql_fetch_array($result);
$rid=$row['id'];
$qry="insert into login(uid,uname,upass,utype) values('$rid','$unme','$upass','faculty')";
$db->insertQuery($qry);
header('location:index.php');
?>