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
<body style="background-image: url('images/pa.jpeg');">
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

                   
                <center>
             <form action="msgaction.php">
                        <table style="background-color: #000000b8;color:white;font-size:20px;">
                    <tr>
                        <td>Message</td><input type="hidden" value="<?php echo $_GET['rno']; ?>" name="t1"/>
                    </tr>
                            <tr>
                        <td><textarea rows="8" cols="30" name="m"></textarea></td>
                    </tr>
                            <tr>
                                <td> <input type="submit" value="SEND MESSAGE"/></td>
                            </tr>
                        </table>
                    </form>
                       <br/><br/>
                    <a href="tpta.php?rno=<?php echo $_GET['rno']; ?>">View Messages</a>
                        

<br/><br/><br/>
         
                             <table border="2">
                    <tr>
                 
                    </tr>
                    <?php
					include("DatabaseCon.php");
					$rno=$_GET['rno'];
					$q="select * from parent where rno='$rno'"; 
					$db=new DatabaseCon;
			        $rr=$db->selectData($q);
			$rs=$db->selectQuery($q);
			
			if($rs==1)
			{
			
					
					?>
                    <tr>
                    <?php 
					while($row=mysql_fetch_array($rr))
					{
					
					
					?>
                               <th>Student Reg No</th> <td><?php echo $row['rno'];?></td>
                    </tr>
                    <tr>
                        <th>Father Name</th><td><?php echo $row['fname'];?></td>
                    </tr>
                    <tr>
                        <th>Father Occupation</th> <td><?php echo $row['focc'];?></td>
                    </tr>
                    <tr>
                        <th>Father Contact Number</th> <td><?php echo $row['fph'];?></td>
                    </tr>
                    <tr>
                        <th>Mother Name</th> <td><?php echo $row['mname'];?></td>
                    </tr>
                    <tr>
                        <th>Mother Occupation</th><td><?php echo $row['mocc'];?></td>
                    </tr>
                    <tr>
                        <th>Mother Contact Number</th><td><?php echo $row['mph'];?></td>
                    </tr>
  <?php } ?>

                </table></center>
                <?php } ?>
                
</body>
</html>

                                    
                               
                 
              
       
       
        
   
                        
                       
                       
                      
                   

                

            
            
                    
                       




























