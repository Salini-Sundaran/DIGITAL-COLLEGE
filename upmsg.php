<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="upmsgaction.php">
<table style="background-color: #000000b8;color:white;font-size:20px;">
<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="select * from message where msid='$id'";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
    <input type="hidden" name="t0" value="<?php echo $row['msid'];?>" >
<tr><td>Faculty Name</td>
<td><input type="text" name="t1" readonly="readonly" value="<?php echo $row['faname'];?>">
</td>
</tr>
<tr>
<td>Message</td>
<td><input type="text" name="t2" readonly="readonly" value="<?php echo $row['message'];?>">
</td>
</tr>



<?php
}
?>
<tr><td>Doubt Solved</td>
<td><input type="text" name="t3" >
<tr><td colspan="2" align="center"><input type="submit" value="update" />
</td></tr></table>
</form>
</body>
</html>