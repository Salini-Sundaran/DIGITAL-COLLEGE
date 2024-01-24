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
<body style="background-image: url('images/v.jpg');">
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
      <form>
                    <?php
					include("DatabaseCon.php");
					$q="select *from pst order by dte desc";
					$db=new DatabaseCon;
					$rr=$db->selectQuery($q);
					$rs=$db->selectData($q);
					if($rr==1)
					{
					?>
					<h1 align="center">View Notification</h1>
        <table border="2" align="center" style="background-color: #000000b8;color:white;font-size:20px;">
            <tr>

                <th>Date</th>
                <th>Notify</th>

                <th>Department</th>
                <th>Sem</th>


            </tr>
           
            <tr>
<?php 
while($row=mysql_fetch_array($rs))
{
?>
<td><?php echo $row['dte']; ?></td>
<td><?php echo $row['notify']; ?></td>
<td><?php echo $row['dpt']; ?></td>
<td><?php echo $row['sem']; ?></td>
            </tr>   
<?php } ?>
        </table>
<?php } ?>
   </form>
  
           	 

                    
                </center>
   
			
    
</body>
</html>

                                    
                               
                 
              
       
       
        
   
                

    
      
                    
      
       
   
	
			

   
        
    
    
   
   