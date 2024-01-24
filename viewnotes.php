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

               

                   
               <form>
			   <h1 align="center">Notes</h1>
               <table width="80%" border="1" style="font:'Times New Roman', Times, serif;color:black;" align="center">
    <tr>
    <th>Date</th>
         <th>Faculty</th>
    <th><font color="#333333">Course</font></th>
    <th>Sem</th>
 <th>Title</th>
  <th>Type</th>
   <th>Filepath</th>
    <th>View</th>
    </tr>
    <?php
	include("DatabaseCon.php");
 $sql="SELECT * FROM upload inner join faculty on faculty.id=upload.uid order by dte desc";
 $db=new DatabaseCon;
$rr=$db->selectData($sql);
 while($row=mysql_fetch_array($rr))
 {
  ?>
        <tr>
           <td><?php echo $row['dte'] ?></td>
             <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['course'] ?></td>
        <td><?php echo $row['sem'] ?></td>
        <td><?php echo $row['title'] ?></td>
        <td><?php echo $row['type'] ?></td>
        
        <td><?php echo $row['filepath'] ?></td>
     
      
        <td><a href="uploads/<?php echo $row['filepath'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
</table>
</form>

    </body>
</html>























