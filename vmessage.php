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

               


<h1 align="center">Message View</h1>
<table border="2" align="center">
<tr>
<th>faculty name</th>
<th>message</th>
<th>Reply</th>
</tr>
<?php
include 'DatabaseCon.php';
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$q="select * from message where vid='$val'";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
?>
<tr>
<td><?php echo $row['faname'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['replay'];?></td>
</tr>

<?php
}
?>
</table>
</body>
</html>