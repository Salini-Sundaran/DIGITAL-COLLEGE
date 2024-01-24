<html>
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
                  
                <?php
					include("DatabaseCon.php");
					$sem=$_GET['sem'];
					$rno=$_GET['rno'];
					$q="select *from subject where sem='$sem'";
					$db=new DatabaseCon;
					$rr=$db->selectQuery($q);
					$rs=$db->selectData($q);
					if($rr==1)
					{
					?>
                <center>
         
      <h1 align="center">Mark View</h1>
                            <table border="1" bgcolor="white" style="font-size: medium">
            <tr>
                <td>Department</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Semester</td>
            </tr>
           
            <tr>
            
               <?php 
			   while($row=mysql_fetch_array($rs))
			   {
			   ?>
               <td><?php echo $row['ccode']; ?></td>
                              
                                             <td><?php echo $row['subcode']; ?></td>
                                                            <td><?php echo $row['subname']; ?></td>
                                                                           <td><?php echo $row['sem']; ?></td>
                <td><a href="Marks.php?sc=<?php echo $row['subcode']; ?>&rno=<?php  echo $rno;?>">Add Marks</a></td>
            </tr>
           <?php } ?>
        </table>  </center>
        <?php } ?>
                </body></html>