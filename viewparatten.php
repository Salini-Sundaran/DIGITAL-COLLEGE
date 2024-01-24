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
<body>
<li class="c1 active">  <a href="parenthome.php"  >HOME</a></li>
					<li class="c2">   <a href="pvmark.php" >Marks</a></li>
                                      
                                        <li class="c3"> <a href="ppta.php" >Teacher Message</a></li>
                                        <li class="c4"> <a href="pvnotify.php" >Notifications</a></li>
                                        <li class="c4"> <a href="viewparatten.php" >Attendance</a></li>
                                        <li class="c4"> <a href="pfeeview.php" >Sem Fees</a></li>
                                        <li class="c5"><a href="index.php">Log Out</a></li>
					
			

<h1 align="center">attendance</h1>
<table border="2" align="center">
<tr>
<th>A_id</th>
<th>Name</th>
<th>Class</th>
<th>Type</th>
</tr>
<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$q="select * from attendance where A_id='$val'";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
	<tr>
	<td><?php echo $row['A_id'];?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Class'];?></td>
	<td><?php echo $row['Type'];?></td>
	
	<?php
}
?>
</table>
</body>
</html>