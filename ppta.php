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
	
				$q="select * from pta inner join faculty on faculty.id=pta.faculty where pta.rno='$rno'";
				$db=new DatabaseCon;
				$rr=$db->selectData($q);
				$rs=$db->selectQuery($q);
				if($rs==1)
				{?>
                    <center>
					<h1 align="center">Message</h1>
                    <table border="2">
            <tr>
                <th>REG No</th>
                <th>Messages</th>


                <th>Date</th>
                <th>Faculty</th>
               <th>Reply</th>
                    
            </tr>
     <?php
	 while($row=mysql_fetch_array($rr))
	 {
	 ?>
            <tr>
                  <td><?php echo $row['rno']; ?></td>
                     <td><?php echo $row['msg']; ?></td>
                        <td><?php echo $row['mdate']; ?></td>
                           <td><?php echo $row['name']; ?></td>
                       <td><?php echo $row['rply']; ?></td>          
                                      
                    <td>                     
               <?php
			   if($row['rply']=='')
			   {
			   ?>
              <a href="reply.php?id=<?php echo $row['mid']; ?>">Reply</a></td>
        <?php
			   }
			   else
			   {
			   }
		?>
                      
          </tr>
    <?php } ?>

        </table>
                    </center>  
                    <?php } ?>    
            
					
</body>
</html>

                                    
                               
                 
              
       
       
        
   
                        
                       
                       
                      
                   

                   
                       
                       
                       
            