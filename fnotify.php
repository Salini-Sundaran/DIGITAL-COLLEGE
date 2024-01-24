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
<body style="background-image: url('images/noti.jpg');">
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
              <form action="fpostaction.php">
            <table style="background-color: #000000b8;color:white;font-size:20px;">
			<h1 align="center">Notifications</h1>
                <tr>
                    <td>Date:</td>
                   
                   <td><input type="text" name="t1" id="t1" value="<?php echo date("Y-m-d") ?>" readonly="1"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Notification:</td>
                    <td><textarea rows="10" cols="21" name="t2" id="t2" required="yes"></textarea></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                 <tr>
                    <td>Department</td>
                    <td><select name="tt" style="width: 170px">
                            <option value="BCA">BCA</option>
                            <option value="BSCIT">BSC.IT</option>
                            <option value="BBA">BBA</option>
                            <option value="BCOM">B.COM</option>
                        </select></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>

                    <td>Semester</td>
                    <td><select name="S" style="width: 170px">
                            <option value="0">-----Select----</option>
                            <option value="Sem1">Sem1</option>
                            <option value="Sem2">Sem2</option>
                            <option value="Sem3">Sem3</option>
                            <option value="Sem4">Sem4</option>
                            <option value="Sem5">Sem5</option>
                            <option value="Sem6">Sem6</option>
                        </select></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="POST"/></td>
                </tr>
            </table>
        </form>
                </center>
   
		
</body>
</html>

                                    
                               
                 
              
       
       
        
   
       