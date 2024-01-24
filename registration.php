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
<body style="background-image: url('images/sa.jpg');">
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
<h1>STUDENT REGISTRATION</h1>

                           <form action="regaction.php" method="post" enctype="multipart/form-data">
            <table style="background-color: #000000b8;color:white;font-size:20px;">
            <input type="hidden" name="m1">
            <tr><td>Image</td>
            <td><input type="file" name="file"></td></tr>
            
                <tr>
                <td> Registration No</td>
                    <td><input type="text" name="t0" id="t0" required="yes"/></td>
                </tr>
               
                <tr><td>Name</td>
                    <td><input type="text" name="t1" id="t1" required="yes"/></td>
                </tr>
                <tr><td>Address</td>
                    <td><textarea rows="5" cols="21" name="t2" id="t2" required="yes"></textarea></td>
                </tr>
                <tr><td>City</td>
                    <td><input type="text" name="t3" id="t3" required="yes"/></td>
                </tr>
                <tr><td>District</td>
                    <td><input type="text" name="t4" id="t4" required="yes"/></td>
                </tr>
                <tr><td>phone</td>
                    <td><input type="text" name="t5" id="t5" required="yes" maxlength="10"/></td>
                </tr>
                <tr><td>email</td>
                    <td><input type="email" name="t6" id="t6" required="yes"/></td>
                </tr>
                <tr><td>Gender</td>
                    <td><input type="radio" name="t7" value="Male" checked="yes"/>Male
                        <input type="radio" name="t7" value="Female"/>Female
                    </td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td><select name="tt" id="tt" required="yes">
                            <option value="BCA">BCA</option>
                            <option value="BSCIT">BSC.IT</option>
                            <option value="BBA">BBA</option>
                            <option value="BCOM">B.COM</option>
                        </select></td>
                </tr>
                <tr>

                    <td>Semester</td>
                    <td><select name="S" id="S" required="yes">
                            <option value="0">-----Select----</option>
                            <option value="Sem1">Sem1</option>
                            <option value="Sem2">Sem2</option>
                            <option value="Sem3">Sem3</option>
                            <option value="Sem4">Sem4</option>
                            <option value="Sem5">Sem5</option>
                            <option value="Sem6">Sem6</option>
                        </select></td>
                </tr>
                <tr><td>Username</td>
                    <td><input type="text" name="t8" id="t8" required="yes"/></td>
                </tr>
                <tr>
                <tr><td>Password</td>
                    <td><input type="password" name="t9" id="t9" required="yes"/></td>
                </tr>
                <tr>
                    <td>Father Name</td>
                    <td><input type="text" name="t110" id="t110" required="yes"/></td>
                </tr>
                <tr>
                    <td>Mother Name</td>
                    <td><input type="text" name="t11" id="t11" required="yes"/></td>
                </tr>
                    <tr>
                    <td>Father Occupation</td>
                    <td><input type="text" name="t12" id="t12" required="yes"/></td>
                </tr>
                   <tr>
                    <td>Mother Occupation</td>
                    <td><input type="text" name="t13" id="t13" required="yes"/></td>
                </tr>
                      <tr>
                    <td>Father Contact Number</td>
                    <td><input type="text" name="t14" id="t14" required="yes" maxlength="10"/></td>
                </tr>
                   <tr>
                    <td>Mother Contact Number   </td>
                    <td><input type="text" name="t15" id="t15" required="yes" maxlength="10"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="REGISTER"/></td>
                </tr>
            </table>
        </form>  
       
        </body> 
        </center>
      <script type="text/javascript">
            var numbers=/^[0-9]+$/;
            var letters=/^[a-z A-Z]+$/;
            function check(){
                if(!document.getElementById("t0").value.match(numbers)){
                    alert('Register Number Should be digits');
                    return false;
                }
				 else if(!document.getElementById("t1").value.match(letters))
				 {
               
                
            alert('Please input alphabet characters only,enter first name');
            return false;
        }
				
				
				 else if(!document.getElementById("t5").value.match(numbers))
        {
            alert('Please input numeric characters only,enter phone number');
            return false;
        }
        else if(document.getElementById("t5").value.length<10)
        {
            alert('invalid Phone number,enter phone number');
            return false;
        }
		
		 else if(!document.getElementById("t110").value.match(letters))
				 {
               
                
            alert('Please input alphabet characters only,enter Father name');
            return false;
        }
		
           else if(!document.getElementById("t11").value.match(letters))
				 {
               
                
            alert('Please input alphabet characters only,enter Mother name');
            return false;
        }   
		
		 else if(!document.getElementById("t14").value.match(numbers))
        {
            alert('Please input numeric characters only,enter father phone number');
            return false;
        }
        else if(document.getElementById("t14").value.length<10)
        {
            alert('invalid Phone number, father phone number should be 10 digit');
            return false;
        }
		 else if(!document.getElementById("t15").value.match(numbers))
        {
            alert('Please input numeric characters only,enter mother phone number');
            return false;
        }
        else if(document.getElementById("t15").value.length<10)
        {
            alert('invalid Phone number, mother phone number should be 10 digit');
            return false;
        }   
              
			    else
                    {
                        return true;
                    }
                  
			}
           
        </script>


  </body>
</html>          


