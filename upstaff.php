<html>
<head>
<title></title>
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
<body>
<form action="updateaction.php">
<table align="center">
<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="select * from staff where sid='$id'";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
?>
<input type="hidden" name="t0" value="<?php echo $row['sid'];?>">
<tr><td>name</td>
<td><input type="text" name="t1" value="<?php echo $row['name'];?>"></td></tr>
<tr><td>address</td>
<td><input type="text" name="t2" value="<?php echo $row['adrs'];?>"></td></tr>
<tr><td>qualification</td>
<td><input type="text" name="t4" value="<?php echo $row['quali'];?>"></td></tr>
<tr><td>phoneno</td>
<td><input type="text" name="t5" value="<?php echo $row['phone'];?>"></td></tr>
<tr><td>email</td>
<td><input type="email" name="t6" value="<?php echo $row['email'];?>"></td></tr>
<?php
}
?>
<tr> <td colspan="2" align="center"><input type="submit" value="update">
</td>
</tr>
</table>
</form>
</body>
</html>