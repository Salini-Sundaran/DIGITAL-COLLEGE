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
<body style="background-image: url('images/2.jpeg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">
<body>

				<li class="c1 active">  <a href="parenthome.php"  >HOME</a></li>
					<li class="c2">   <a href="pvmark.php" >Marks</a></li>
                                      
                                        <li class="c3"> <a href="ppta.php" >Teacher Message</a></li>
                                        <li class="c4"> <a href="pvnotify.php" >Notifications</a></li>
                                        <li class="c4"> <a href="viewparatten.php" >Attendance</a></li>
                                        <li class="c4"> <a href="pfeeview.php" >Sem Fees</a></li>
                                        <li class="c5"><a href="index.php">Log Out</a></li>
					

                    <?php
				include("DatabaseCon.php");
				session_start();
				$rno=$_SESSION['rno'];
	
				$q="select * from subject inner join  marks on marks.subject=subject.subcode where marks.studentid='$rno'";
				$db=new DatabaseCon;
				$rr=$db->selectData($q);
				$rs=$db->selectQuery($q);
				if($rs==1)
				{?>
                    <center>
<h1 align="center">Mark View</h1>
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
			   while($row=mysql_fetch_array($rr))
			   {
			   ?> 
        <td><?php echo $row['subcode']; ?></td>
           <td><?php echo $row['subname']; ?></td>
           <td><?php echo $row['sem']; ?></td>
           <td><?php echo $row['marks']; ?></td>
           <td><?php echo $row['mof']; ?></td>
           <td><?php echo $row['tdate']; ?></td>
            </tr>
    <?php } ?>
        </table>
                    </center>       
				<?php }
				else
				{
				}?>	<!-- .fluid_container -->
		
</body>
</html>

                                    
                               
                 
              
       
       
        
   
                        
                       
                       
                      
                   

                   
                       
                       
                       
                    