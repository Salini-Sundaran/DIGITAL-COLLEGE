<?php
include ("DatabaseCon.php");
 session_start();
$rno=$_GET["t1"];
$nme=$_GET["t2"];
$q="select * from registration where rno='$rno' and name='$nme'" ;
$db=new DatabaseCon;
$ret=$db->selectQuery($q);
echo $ret;
if($ret==1)
{
$rs=$db->selectData($q);
$row=mysql_fetch_array($rs);

$_SESSION['rno']=$row['rno'];
header('location:parenthome.php');
}
else
{
header('location:plogin.php');
}?>