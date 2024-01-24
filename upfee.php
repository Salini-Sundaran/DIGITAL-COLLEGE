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
<form action="upfeeaction.php">
<table align="center"><br><br>
<h1 align="center">Fees</h1>
<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="select * from fee where fid='$id'";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
    <input type="hidden" name="t0" value="<?php echo $row['fid'];?>" >
<tr><td>Department</td>
<td><input type="text" name="t1" readonly="readonly" value="<?php echo $row['dept'];?>"  id="t1" required="yes">
</td>
</tr>
<tr>
<td>Sem</td>
<td><input type="text" name="t2" readonly="readonly" value="<?php echo $row['sem'];?>" id="t2" required="yes">
</td>
<tr>
<td>Fees</td>
<td><input type="text" name="t3" readonly="readonly" value="<?php echo $row['fees'];?>" id="t3" required="yes">
</td>
</tr>
<tr><td>Card Holder name</td><td><input type="text" name="t4"  id="t4" required="yes"/></td></tr>
<tr><td>C v v No</td><td><input type="text" name="t5" id="t5" required="yes" /></td></tr>
<tr><td>Date</td><td><input type="date" name="t6" id="t6" required="yes" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="pay" />
</td></tr>

<?php
}
?>

</table>
</form>
</body>
</html>