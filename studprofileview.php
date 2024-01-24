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
</head>
<body style="background-image: url('images/2.jpeg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<body>
<tr><td>  <li class="active"	> <a href="studenthome.php">HOME</a></li>
                           <li> <a href="studprofileview.php">My Profile</a></li>
                            <li> <a href="svnotify.php">Notifications</a></li>
                        <li>  <a href="message.php">Ask Doubts</a></li>
                        <li>  <a href="vmessage.php">Message</a></li>
                       <li>  <a href="viewnotes.php" >Notes</a></li>
					   <li><a href="class details.php">Class Details</a></li>
                        <li>    <a href="svmark.php" class="but2">Marks</a></li>
						<li>	<a href="vlib1.php">View Text</a></li>
						<li>	<a href="vtime1.php">View Time table</a></li>
                  <li>    <a href="index.php">Log Out</a></li>

               

<form action="updateteacher.php">
<h1 align="center">My Profile</h1>
<table bgcolor="#0099FF" align="center">
<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$q="select * from registration where id='$val'";
$rs=$db->SelectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
<tr>
<td align="center"><?php echo "<img src='uploads/".$row['image']."' width='50px' height='50px'";?></td></tr><tr><td>&nbsp;</td></tr>
<tr>
<td>Registration Number</td>
<td><input type="text" name="t0" value="<?php echo $row['rno']; ?>"></td></tr>
<tr>
<td>Name</td>
<td><input type="text" name="t1" value="<?php echo $row['name']; ?>"></td></tr>
<tr><td>Address</td>
<td><input type="text" name="t2" value="<?php echo $row['addr']; ?>"></td></tr>
<tr>     
<td>City</td>
<td><input type="text" name="t3" value="<?php echo $row['city']; ?>"></td></tr>
<tr>   
<td>District</td>
<td><input type="text" name="t4" value="<?php echo $row['dist']; ?>"></td></tr>
<tr>
<td>Phone</td>
<td><input type="text" name="t5" value="<?php echo $row['ph']; ?>"></td></tr> 
 <tr>     
<td>Email</td>
 <td><input type="text" name="t6" value="<?php echo $row['emid']; ?>"></td></tr>
 <tr>
<td>Gender</td>
<td><input type="text" name="tt" value="<?php echo $row['gen']; ?>"></td></tr>
<tr>
<td>Department</td>
 <td><input type="text" name="s" value="<?php echo $row['dept']; ?>"></td></tr>
 <tr>
<td>Semester</td>

<td><input type="text" name="t1" value="<?php echo $row['sem']; ?>"></td></tr>
  
  <tr><td colspan="2" align="center"><input type="submit" name="submit" value="update" /></td></tr> 
    

    <?php
}
?>
</table>
</form>
</body>

</body>
</html>