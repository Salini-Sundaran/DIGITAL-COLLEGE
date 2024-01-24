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
<body style="background-image: url('images/1.jpeg');">
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

</div>
                 
            
                 <?php
				   include("DatabaseCon.php");
				   $q="select *from registration";
				   $db=new DatabaseCon;
				   $rs=$db->selectQuery($q);
				   $rr=$db->selectData($q);
				   if($rs==1)
				   {
				   ?>	
                       <center>
                 <h1 align="center">View Students</h1>      	
                <table border="2" style="background-color: #000000b8;color:white;font-size:20px;">
				
                    <tr >
                        <th>REg No</th>
                        <th>Name</th>


                        <th>Address</th>

                        <th>City</th>
                        <th>District</th>
                        <th>Phone Number</th>
                        <th>Email Id</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Semester</th>
                    </tr>
                  
                    <tr>
                    <?php
                    while($row=mysql_fetch_array($rr))
					{
                    ?>
                    <td><?php echo $row['rno'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['addr'];?></td>
                     <td><?php echo $row['city'];?></td>
                     <td><?php echo $row['dist'];?></td>
                      <td><?php echo $row['ph'];?></td>
                   <td><?php echo $row['emid'];?></td>
                    <td><?php echo $row['gen'];?></td>
                   
                     
                   
                      
                      
                        <td><?php echo $row['dept'];?></td>
                         <td><?php echo $row['sem'];?></td>
                      <td><a href="vmark.php?rno=<?php echo $row['rno']; ?>" style="color:red;font-size:15px;">Mark</a></td>
                        
</tr>
<?php } ?>
                </table>
                <?php
				   }
				   else
				   {
				   }
				?>
                </center>
           
</body>
</html>

                                    
                               
                 
              
       
       
        
   