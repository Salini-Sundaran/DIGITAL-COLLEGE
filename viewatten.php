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
   <li class="active"><a href="facultyhome.php">Home</a></li>
              
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Add</a>
                <ul class="dropdown-menu">
					<li><a href="registration.php">Student</a></li>

                  <li><a href="noteupload.php">Notes Upload</a></li>
                  <li><a href="class details.php">Class Details</a></li>
                  <li><a href="attendance.php">Attendance</a></li>
                  <li><a href="fnotify.php">Notifications</a></li>
                  <li><a href="timetable.php">Time Table</a></li>
                 </ul></li>
                 
                 <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">View</a>
                <ul class="dropdown-menu">
                  <li><a href="fviewstud.php">Students</a></li>
                  <li><a href="fviewnotes.php">Notes</a></li>
                  <li><a href="fmsgview.php">Doubts</a></li>
                  <li><a href="viewatten.php">Attendance</a></li>
                  <li><a href="fvnotify.php">Notification</a></li>
                  <li><a href="vtime.php">Time Table</a></li>
                 </ul></li>
                  <li><a href="index.php">Logout</a></li>
                 
                 
          </div>
        </div>
      </nav>
<h1 align="center">attendance</h1>
<table border="2" align="center" style="background-color: #000000b8;color:white;font-size:20px;">
<tr>
<th>A_id</th>
<th>Name</th>
<th>Class</th>
<th>Type</th>
</tr>
<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$q="select * from attendance";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
	<tr>
	<td><?php echo $row['A_id'];?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Class'];?></td>
	<td><?php echo $row['Type'];?></td>
	<td><a href="delete2.php?id=<?php echo $row['A_id'];?>">Delete</a></td>
	</tr>
	<?php
}
?>
</table>
</body>
</html>