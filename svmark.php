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


                       <tr><td> <li class="active"	> <a href="studenthome.php">HOME</a></li>
                           <li> <a href="studprofileview.php">My Profile</a></li>
                            <li> <a href="svnotify.php">Notifications</a></li>
                        <li>  <a href="message.php">Ask Doubts</a></li>
                        <li>  <a href="vmessage.php">Message</a></li>
                       <li>  <a href="viewnotes.php" >Notes</a></li>
					   <li><a href="class details.php">Class Details</a></li>
                        <li>    <a href="svmark.php" class="but2">Marks</a></li>
						<li>	<a href="vlib1.php">View Text</a></li>
						<li>	<a href="vtime1.php">View Time table</a></li>
                  <li>    <a href="index.php">Log Out</a></li>
                  
                 <?php
				include("DatabaseCon.php");
				session_start();
				$uid=$_SESSION['uid'];
	
				$q="select * from subject inner join  marks on     marks.subject=subject.subcode where marks.studentid=(select rno from registration where id='$uid')";
				$db=new DatabaseCon;
				$rr=$db->selectData($q);
				$rs=$db->selectQuery($q);
				if($rs==1)
				{?>
					
				
                <center>
				<h1 align="center">Marks</h1>

                      <table border="2" style="color: black;font-family: Times New Roman">
        
   
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
           </tr>
           <td><?php echo $row['subcode']; ?></td>
           <td><?php echo $row['subname']; ?></td>
           <td><?php echo $row['sem']; ?></td>
           <td><?php echo $row['marks']; ?></td>
           <td><?php echo $row['mof']; ?></td>
           <td><?php echo $row['tdate']; ?></td>
           <?php } ?>
        </table>
		<?php } ?>

                      
                </center>
                    
    </body>
</html>























 