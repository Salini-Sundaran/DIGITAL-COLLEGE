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
</head>
<body style="background-image: url('images/2.jpeg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">
<title>staff</title>
<body>
<td>

<li><a href="staffhome.php">Home</a></li>
<li><a href="librarytext.php">Library Text</a></li>
<li><a href="vlib.php">View Text</a></li>
<li><a href="vstaff.php">My Profile</a></li>
<li><a href="index.php">Log Out</a></li>




<table border="2" align="center"> 
<h1 align="center">My Profile</h1>
<tr>
<th>name</th>
<th>address</th>
<th>gender</th>
<th>qualification</th>
<th>phoneno</th>
<th>email</th>

<tr>
<?php
include 'DatabaseCon.php';
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$q="select * from staff inner join login on login.uid=staff.sid where staff.sid='$val'";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['adrs'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['quali'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['email'];?></td>


 <td><a href="upstaff.php?id=<?php echo $row['sid']; ?>">update</a></td>
        </tr>

<?php
}
?>
</table>
</body>
</html>