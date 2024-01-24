<html>
<head>
<title>libview</title>
</head>
<body>
<td>
<a href="facultyhome.php" >Home</a>
                          <a href="fviewstud.php" >Students</a>
                        <a href="noteupload.php" >Notes Upload</a>
                         <a href="fviewnotes.php">view Notes</a>
                         <a href="fmsgview.php">view Doubts</a>
                         <a href="attendance.php">Add Attendance</a>
                         <a href="viewatten.php">view Attendance</a>
                        <li class="c4 dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notification <b class="caret"></b></a>
                            <ul class="dropdown-menu">

                               <a href="fnotify.php">Add Notification</a>
                                <a href="fvnotify.php">View Notification</a>
								<li><a href="vtime.php">View Time table</a></li>
								<li><a href="timetable.php">Add Time table</a></li>
								<a href="vlib2.php">View Text</a>

                            </ul>
                        </li>
						
                        <a href="index.php">Log Out</a>
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
	