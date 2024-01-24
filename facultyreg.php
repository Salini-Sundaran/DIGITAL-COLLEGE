<html
<head>
<title></title>
</head>
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
                    <form action="facultyaction.php" onSubmit=" return check()">
                        <table class="table-striped table-hover">
						<h1>Faculty Registration</h1>
                            <tr>
							
                                <td>Name:</td>
                                <td><input type="text" name="t1" id="t1" required="yes"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td><input type="radio" name="sex" value="Male"/>Male
                                    <input type="radio" name="sex" value="Female"/>Female</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>

                            <tr>
                                <td>Date Of Birth:</td>
                                <td><input type="date" name="t3" id="t3" required="yes" style="width: 170px"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><textarea rows="4" cols="21" name="t4" id="t4" required="yes"></textarea></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>

                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="t12" id="t12" required="yes" maxlength="10"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Email-ID:</td>
                                <td><input type="email" name="t13" id="t13" required="yes"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
							<tr>
                                <td>Qualification:</td>
                                <td><select name="t" id="t" required="yes">
								<option value="MSC">MSC</option>
								<option value="MCA">MCA</option>
								<option value="MBA">MBA</option>
								<option value="MTECH">MTECH</option>
								<option value="MED">MED</option></select>
								</td>
                            </tr>
							<td>&nbsp;</td>
							<tr> 
							
							
					<td>Upload Certificate</td>
							<td>
							<input type="file" name="file">
							</td>
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
                                <td>UserName:</td>
                                <td><input type="text" name="t14" id="t14" required="yes"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="t15" id="t15" required="yes"/></td>
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
