<html>
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
<title>libview</title>
</head>
<body>
<tr>
<td><align="left">
<li><a href="staffhome.php">Home</a></li>
<li><a href="librarytext.php">Library Text</a></li>
<li><a href="vlib.php">View Text</a></li>
<li><a href="vstaff.php">My Profile</a></li>
<li><a href="index.php">Log Out</a></li>

<h1 align="center"> Library Text</h1>
<table border="2" align="center">
<tr>
<th>Department</th>
<th>Semester</th>
<th>Subject</th>
<th>Pdf</th>
<th>Date</th>
</tr>
<?php
include 'DatabaseCon.php';
$db=new DatabaseCon;
$q="select * from libnote";
$rs=$db->selectData($q);
while ($row=mysql_fetch_array($rs))
{
	?>
	<tr>
	<td><?php echo $row['dep'];?></td>
	<td><?php echo $row['sem'];?></td>
	<td><?php echo $row['sub'];?></td>
	<td><?php echo $row['pdf'];?></td>
	<td><?php echo $row['date'];?></td>
	
	
	</tr><?php
}
?>
</table>
</body>
</html>
	