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
      <form>
                    <?php
					include("DatabaseCon.php");
					$q="select *from pst order by dte desc";
					$db=new DatabaseCon;
					$rr=$db->selectQuery($q);
					$rs=$db->selectData($q);
					if($rr==1)
					{
					?>
        <table border="2" style="background-color: #000000b8;color:white;font-size:20px;">
		<h1 align="center">Notifications</h1>
            <tr>

                <th>Date</th>
                <th>Notify</th>

                <th>Department</th>
                <th>Sem</th>


            </tr>
           
            <tr>
<?php 
while($row=mysql_fetch_array($rs))
{
?>
<td><?php echo $row['dte']; ?></td>
<td><?php echo $row['notify']; ?></td>
<td><?php echo $row['dpt']; ?></td>
<td><?php echo $row['sem']; ?></td>
            </tr>   
<?php } ?>
        </table>
<?php } ?>
   </form>
  
           	 

                    
                </center>
   
</body>
</html>

                                    
                               
                 
              
       
       
        
   
                

    
      
                    
      
       
   
	
			

   
        
    
    
   
   