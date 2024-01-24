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
                    
                <center>

                    <form action="marksaction.php" onSubmit="return check()">
					<h1 align="center">Mark Add</h1>
                        <table>
                            <tr>
                                <td> Student Reg No</td>
                                <td><input type="text" name="t1" />
                                </td> 
                            </tr> 
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td> Subject Code </td>
                                <td><input type="text" name="t2"/></td> 
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            </tr> 
                            <tr>
                                <td> Marks</td>
                                <td><input type="text"name="t3" required="yes"/></td> 
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    Mark Of
                                </td>
                                <td>
                                    <select name="t4" style="width: 170px">
                                        <option value="FI">First Internal</option>
                                        <option value="SI">Second Internal</option>
                                        <option value="CT">Class Tests</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Test Date</td>
                                <td><input type="date" name="t5" style="width: 170px"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit"name="add"></td></tr>
                        </table>
                    </form>   </center>
           

    </body>
    <script type="text/Javascript">
	  var numbers=/^[0-9]+$/;
            var letters=/^[a-z A-Z]+$/;
            function check(){
				
	 if(!document.getElementById("t3").value.match(numbers))
        {
            alert('Please input numeric characters only,enter marks');
            return false;
        }
		else
		{
			return true;
		}
			}
	</script>
</html>
























































