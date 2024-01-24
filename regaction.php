<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
if(isset($_POST['submit']))
{
	$name=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];
	if(isset($name))
	{
		if(!empty($name))
		{
			$location='uploads/';
			echo"file is".$name;
			if(move_uploaded_file($tmpname,$location.$name))

$uregno=$_POST["t0"];
$nme=$_POST["t1"];

$adr=$_POST["t2"];
$city=$_POST["t3"];
$dis=$_POST["t4"];
$phn=$_POST["t5"];
$eml=$_POST["t6"];
$gen=$_POST["t7"]; 
  $dept=$_POST["tt"];
  $se=$_POST["S"];
$unme=$_POST["t8"];
$upass=$_POST["t9"];
$fnm=$_POST["t110"];
$mnm=$_POST["t11"];
$fo=$_POST["t12"];
$mo=$_POST["t13"];
$fc=$_POST["t14"];
$mc=$_POST["t15"];
$qry="insert into registration(rno,image,name,addr,dist,city,ph,emid,gen,dept,sem)values('$uregno','$name','$nme','$adr','$dis','$city','$phn','$eml','$gen','$dept','$se')";

$db->insertQuery($qry);
$s="select max(id) as id from registration";
$result=$db->selectData($s);
$row=mysql_fetch_array($result);
$rid=$row['id'];
$qry="insert into login(uid,uname,upass,utype) values('$rid','$unme','$upass','student')";
$db->insertQuery($qry);

$q1="insert into parent(rno,fname,focc,mname,mocc,fph,mph) values('$uregno','$fnm','$fo','$mnm','$mo','$fc','$mc')";
$db->insertQuery($q1);
$k="select max(pid) as id from parent";
$re=$db->selectData($k);
$row=mysql_fetch_array($re);
$jid=$row['id'];
$q="insert into login(uid,uname,upass,utype)values('$jid','$nme','$fc','parent')";
$db->insertQuery($q);
$db->closeDatabase();
 header('location:index.php?g=yes');
		}}}
?>
