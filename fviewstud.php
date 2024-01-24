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
<body style="background-image: url('images/25.jpg');">
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
                 <?php
					include("DatabaseCon.php");
					$q="select *from registration";
					$db=new DatabaseCon;
					$rr=$db->selectQuery($q);
					$rs=$db->selectData($q);
					if($rr==1)
					{
					?>
                <table border="2" style="background-color: #000000b8;color:white;font-size:20px;">
				<h1 align="center">View Students</h1>
                    <tr>
                        <th><b>Reg No</b></th>
                        <th>Name</th>


                        <th>Address</th>

                        <th>City</th>
                        <th>District</th>
                        <th>Phone Number</th>
                        <th>Email Id</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th></th>
                        <th></th>
                    </tr>
                 <?php 
				 while($row=mysql_fetch_array($rs))
				 {
				 ?>
                    <tr>
                  <td><?php echo $row['rno'];  ?></td>
                  <td><?php echo $row['name'];  ?></td>
                  <td><?php echo $row['addr'];  ?></td>
                  <td><?php echo $row['city'];  ?></td>
                  <td><?php echo $row['dist'];  ?></td>
                  <td><?php echo $row['ph'];  ?></td>
                  <td><?php echo $row['emid'];  ?></td>
                  <td><?php echo $row['gen'];  ?></td>
                  <td><?php echo $row['dept'];  ?></td>
                  <td><?php echo $row['sem'];  ?></td>
                
                        <td><a href="vparent.php?rno=<?php echo $row['rno']; ?>">Parent</a></td>
                        <td><a href="vsub.php?rno=<?php echo $row['rno'];?>&sem=<?php echo $row['sem']; ?>">Add Marks</a></td>
                    </tr>
         
<?php } ?>
                </table>
                </center>
                <?php } ?>
                
</body>
</html>

                                    
                               
                 
              
       
       
        
   
                        
                       
                       
                      
                   

                

            