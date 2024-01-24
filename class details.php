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
<body style="background-image: url('images/c.jpg');">
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

          <center>
<!--

<form action="class details.php" style="background-color:rgba(255,255,255,0.8);color:black;padding:20px">
<table>
<tr><td>Department</td>
<td><select name="t1">
   <option value="BCA">BCA</option>
                                        <option value="BSCIT">BSC.IT</option>
                                        <option value="BBA">BBA</option>
                                        <option value="BCOM">B.COM</option>
										</select></td></tr>
<tr><td>Semester</td>
<td>
<select name="t2">
     <option value="0">-----Select----</option>
                                        <option value="Sem1">Sem1</option>
                                        <option value="Sem2">Sem2</option>
                                        <option value="Sem3">Sem3</option>
                                        <option value="Sem4">Sem4</option>
                                        <option value="Sem5">Sem5</option>
                                        <option value="Sem6">Sem6</option></select></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Show Subjects"></td></tr>
</table>
</form>-->
<table border="1" style="background-color:rgba(255,255,255,0.8);color:black;width:80%">
<h1 align="center">Add Video</h1>
	<tr>
	<th>Subject Code</th>
	<th>Subject Name</th>
	<th>Sem</th></tr>
	<tr>
<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
session_start();
$uid=$_SESSION['uid'];
 $s="select * from subject where ccode=(select dpt from faculty where id=$uid) order by sem";
	$rs=$db->selectData($s);
	while($row=mysql_fetch_array($rs))
	{
?>
<td><?php echo $row['subcode']; ?></td>
<td><?php echo $row['subname']; ?></td>
<td><?php echo $row['sem']; ?></td>
<td><a href="addvideo.php?sc=<?php echo $row['subcode']; ?>">Recorded Video</a></td>
</tr>
<?php } ?>


</table>
 </center>
    <br/>
	
    
  </body>
</html>          
