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
<body style="background-image: url('images/staff1.jpg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">
<title>staff</title>
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
<li><a href="adstaffview.php">View staff</a>

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

                 
<h1 align="center">Staff View</h1>
<table border="2" align="center" style="background-color: #000000b8;color:white;font-size:20px;">
<tr>
<th>name</th>
<th>address</th>
<th>gender</th>
<th>qualification</th>
<th>phoneno</th>
<th>email</th>


</tr>
<?php
include 'DatabaseCon.php';
$db=new DatabaseCon;
$q="select * from login inner join staff on staff.sid=login.uid";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['adrs'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['quali'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['email'];?></td>


        </tr>

<?php
}
?>
</table>
</body>
</html>