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
<body style="background-image: url('images/time.jpg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">
<title>timetable</title>
</head>
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
<h1 align="center">TIME TABLE</h1>
<form action="timeaction.php" onSubmit=" return check()">
<table align="center" style="background-color: #000000b8;color:white;font-size:20px;">
<tr>
<td>Date:</td>
<td><input type="date" name="t1" id="t1" required="yes"></td>
</tr>

<tr>
                                <td>Download:</td>
								<td><input type="file" name="file" id="file" required="yes"></td></tr>
								<tr>
                                <td align="center" colspan="3"><input type="submit" name="submit" value="submit"></td></tr>
                            </tr>
							</table>
							</form>
							</body>
							</html>