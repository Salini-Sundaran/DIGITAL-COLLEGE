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
<body style="background-image: url('images/staff.jpg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">

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
<h1 align="center">Registration</h1>
<form action="staffaction.php">
<table bgcolor="#993399" align="center" style="background-color: #000000b8;color:white;font-size:20px;">
<tr>
<td>Name</td>
<td><input type="text" name="t1">
</td>
</tr><tr><td>&nbsp;&nbsp;</td></tr>
<tr>
<td>Address</td>
<td><textarea name="t2" cols="20" rows="10"></textarea>
</td>
</tr><tr><td>&nbsp;&nbsp;</td></tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="t3" value="male">male
<input type="radio" name="t3" value="female">female
</td>
</tr><tr><td>&nbsp;&nbsp;</td></tr>
<tr>
<td>Qualification</td>
<td><textarea name="t4" cols="14" rows="7"></textarea>
</td>
</tr><tr><td>&nbsp;&nbsp;</td></tr>
<tr>
<td>Phone no</td>
<td><input type="text" name="t5">
</td>
</tr><tr><td>&nbsp;&nbsp;</td></tr>
<tr>
<td>Email</td>
<td><input type="email" name="t6">
</td>
</tr><tr><td>&nbsp;&nbsp;</td></tr>
<tr>
<td>Password</td>
<td><input type="password" name="t7">
</td>
</tr><tr><td>&nbsp;&nbsp;</td></tr>
<tr>
<td align="center" colspan="2">
<input type="submit" name="t8" value="submit">
</td>
</tr>
</table>
</form>
</body>
</html>