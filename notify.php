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
<body style="background-image: url('images/no.jpg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">
<body>
<li class="c1 active"> <a href="adminhome.php">HOME</a></li>
                        <li class="c2"> <a href="viewstud.php"  >Students</a></li>
                          <li class="c2"> <a href="subject.php">Subjects</a></li>
                        <li class="c3 dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Faculty <b class="caret"></b></a>
                            <ul class="dropdown-menu">
<li><a href="facultyreg.php">Add Faculty</a></li>
                                
                                <li><a href="vfaculty.php">View Faculty</a></li>
                                <li><a href="fee.php">Add fee</a></li>
                                <li><a href="adfeeview.php">Added fees</a></li>
                                 <li><a href="paymentview.php">fees Payed</a></li>
								   <li><a href="staff.php">Add Staff</a></li>
<a href="adstaffview.php">View staff</a>

                            </ul>
                        </li>
                        <li class="c4 dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notification <b class="caret"></b></a>
                            <ul class="dropdown-menu">

                                <li><a href="notify.php">Add Notification</a></li>
                                <li><a href="vnotify.php">View Notification</a></li>
								<li><a href="vtime2.php">View Time table</a></li>

                            </ul>
                        </li>

                        <li class="c5"><a href="index.php">Log Out</a></li>
                <center>
              <form action="postaction.php">
			  <h1 align="center">Add Notification</h1>
            <table align="center" style="background-color: #000000b8;color:white;font-size:20px;"> 
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

                                    
                               
                 
              
       
       
        
   
       