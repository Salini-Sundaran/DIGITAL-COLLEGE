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

                        <tr><td>  <li class="active"	> <a href="studenthome.php">HOME</a></li>
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
				$q="select *from pst order by dte desc";
				$db=new DatabaseCon;
				$rr=$db->selectData($q);
				$rs=$db->selectQuery($q);
				if($rs==1)
				{
					
				
				?>
                <center>
				<h1 align="center">Notifications</h1>

                      <table border="2" style="color: black;font-family: Times New Roman">
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
            <?php
		 }?>

        </table>
                </center>
                <?php } ?>
                      
    </body>
</html>























