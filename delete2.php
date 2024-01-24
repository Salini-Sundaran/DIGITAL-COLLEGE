<?php
include 'DatabaseCon.php';
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from attendance where A_id='$id'";
$db->insertQuery($q);
header('location:viewatten.php');
?>