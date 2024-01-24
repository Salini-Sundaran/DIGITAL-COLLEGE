
<html>
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

                   
            <?php
			include("DatabaseCon.php");
			$rno=$_GET['rno'];
			$q="select * from subject inner join  marks on marks.subject=subject.subcode where marks.studentid='$rno'";
			$db=new DatabaseCon;
			$rr=$db->selectQuery($q);
			$rs=$db->selectData($q);
			if($rr==1)
			{
				
			
		?>
                <center>		
                <table border="1">
            <tr>
               
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Semester</td>
                <td>Mark</td>
                <td>Mark Of</td>
                <td>Test Date</td>
            </tr>
           
            <tr>
             <?php
			 while($row=mysql_fetch_array($rs))
			 {
			 ?>  
          <td><?php echo $row['subcode'];?></td>
          <td><?php echo $row['subname'];?></td>
          <td><?php echo $row['sem'];?></td>
          <td><?php echo $row['marks'];?></td>
          <td><?php echo $row['mof'];?></td>
           <td><?php echo $row['tdate'];?></td>
            </tr>
       <?php } ?>
        </table>
        <?php }
		else
		{
		}?>
                </center>
          
</body>
</html>

                                    
                               
                 
              
       
       
        
   
                    
        