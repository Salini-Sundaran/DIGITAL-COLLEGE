<?php
include("DatabaseCon.php");
$id=$_GET['t1'];
$msg=$_GET['m'];


$q="update pta set rply='$msg' where mid='$id'";
$db=new DatabaseCon;
$db->updateQuery($q);


header('location:ppta.php');




?>