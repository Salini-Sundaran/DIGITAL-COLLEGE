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
				$q="select *from pst order by dte desc";
				$db=new DatabaseCon;
				$rr=$db->selectData($q);
				$rs=$db->selectQuery($q);
				if($rs==1)
				{
					
				
				?>
                    <center>
					<h1 align="center">Notification</h1>
					<table border="2" bgcolor="white" style="font-size: medium">
            <tr>

                <th>Date</th>
                <th>Notify</th>

                <th>Department</th>
                <th>Sem</th>


            </tr>
          <?php 
		  while($row=mysql_fetch_array($rr))
		  {
		  ?>
            <tr>

        <td><?php echo $row['dte']; ?></td>
<td><?php echo $row['notify']; ?></td>
<td><?php echo $row['dpt']; ?></td>
<td><?php echo $row['sem']; ?></td>

            </tr>
        <?php } ?>

        </table>
                    </center>      
            <?php  }
			else
			{
			}?>
					
</body>
</html>

                                    
                               
                 
              
       
       
        
   
                        
                       
                       
                      
                   

                   
                       
                       
                       
            
                            
                       