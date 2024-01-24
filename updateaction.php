<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET["t0"];
$na=$_GET["t1"];
$ad=$_GET["t2"];
$qu=$_GET["t4"];
$pn=$_GET["t5"];
$em=$_GET["t6"];
$q="update staff set name='$na',adrs='$ad',quali='$qu',phone='$pn',email='$em' where sid='$id'";
$db->updateQuery($q);
 header('location:vstaff.php');
?>

