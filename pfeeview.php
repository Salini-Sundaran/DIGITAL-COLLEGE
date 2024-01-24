<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body
{
 	background-size:cover;
	background-repeat:no-repeat;
}
li a{
	color:white;
}
</style>
<body style="background-image: url('images/2.jpeg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<li class="c1 active">  <a href="parenthome.php"  >HOME</a></li>
					<li class="c2">   <a href="pvmark.php" >Marks</a></li>
                                      
                                        <li class="c3"> <a href="ppta.php" >Teacher Message</a></li>
                                        <li class="c4"> <a href="pvnotify.php" >Notifications</a></li>
                                        <li class="c4"> <a href="viewparatten.php" >Attendance</a></li>
                                        <li class="c4"> <a href="pfeeview.php" >Sem Fees</a></li>
                                        <li class="c5"><a href="index.php">Log Out</a></li>
					
					
<br /><br />
<h1 align="center">Sem fee</h1>
<table border="2" align="center">
<tr>
<th>Department</th>
<th>Semester</th>
<th>Fees</th>
</tr>
<?php
include 'DatabaseCon.php';
$db=new DatabaseCon;
$q="select * from fee";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
?>
<tr>
<td><?php echo $row['dept'];?></td>
<td><?php echo $row['sem'];?></td>
<td><?php echo $row['fees'];?></td>
<td><a href="upfee.php?id=<?php echo $row['fid'];
	?>">Pay</a></td>
</tr>

<?php
}
?>
</table>
</body>
</html>