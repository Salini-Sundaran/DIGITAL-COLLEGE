<?php
include ("DatabaseCon.php");
$username=$_GET["t1"];
$password=$_GET["t2"];
$query="select * from login where uname='$username' and upass='$password'" ;
$db=new DatabaseCon;
$ret=$db->selectQuery($query);
$rst=$db->selectData($query);
$row=mysql_fetch_array($rst);
if($ret==1)
 {
	   session_start();
	   if($row['utype']=="admin")
	   {
  
	$_SESSION['uid']=$row['uid'];
	 header('location:adminhome.php');
	   }
	   else if($row['utype']=="faculty")
	   {
		   $_SESSION['uid']=$row['uid'];
		 
	 header('location:facultyhome.php');
	   }
	    else if($row['utype']=="student")
	   {
		   $_SESSION['uid']=$row['uid'];
		 
	header('location:studenthome.php');
	   }
	   else if($row['utype']=="staff")
	   {
		   $_SESSION['uid']=$row['uid'];
		   
		   header('location:staffhome.php');
	   }
	    else if($row['utype']=="parent")
	   {
		   $_SESSION['uid']=$row['uid'];
		   
		   header('location:parenthome.php');
	   }
	 
 else
 {
	 header('location:index1.php?y=yes');
	 
 }
 $db->closeDatabase();
 }
 ?>