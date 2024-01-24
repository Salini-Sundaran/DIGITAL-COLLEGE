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

               <form>
               <table align="center" width="80%" border="1" style="background-color: #000000b8;color:white;font-size:20px;">
			   <h1 align="center">View Notes</h1>
    <tr>
    <th>Date</th>
      <th>Faculty</th>
    <th><font color="#333333">Course</font></th>
    <th>Sem</th>
 <th>Title</th>
  <th>Type</th>
   <th>Filepath</th>
    <th>View</th>
    </tr>
    <?php
	include("DatabaseCon.php");
 $sql="SELECT * FROM upload inner join faculty on faculty.id=upload.uid order by dte desc";
 $db=new DatabaseCon;
$rr=$db->selectData($sql);
 while($row=mysql_fetch_array($rr))
 {
  ?>
        <tr>
         <td><?php echo $row['dte'] ?></td>
            <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['course'] ?></td>
        <td><?php echo $row['sem'] ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['type'] ?></td>
        
        <td><?php echo $row['filepath'] ?></td>
     
      
        <td><a href="uploads/<?php echo $row['filepath'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
</table>
</form>

    </body>
</html>























