<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="update login  set status='approved' where uid='$id'";
$db->insertQuery($q);
header('location:adstaffview.php');
?>