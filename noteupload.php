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
<body style="background-image: url('images/not.jpg');">
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

                    <form action="noteuploadaction.php" onSubmit=" return check()">
					<h1 align="center">Note Upload</h1>
                        <table style="background-color: #000000b8;color:white;font-size:20px;">


                            <tr>
                                <td>Date:</td>
                                              
                                <td><input type="text" name="t5" id="t5"  value="<?php echo date("Y-m-d");  ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Note Title:</td>
                                <td><input type="text" name="t1" placeholder="notes title" id="t1" required="yes"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td><select name="t2" style="width: 170px">
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
                                <td><select name="t4" style="width: 170px">
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
                                <td>File Type</td>
                                <td><input type="radio" name="tp" value="ppt"/>PPT
                                    <input type="radio" name="tp" value="pdf"/>PDF
                                    <input type="radio" name="tp" value="doc"/>DOC
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="SUBMIT"/></td>
                            </tr>
                        </table>



                    </form>
                </center>
           

    </body>
</html>




























































