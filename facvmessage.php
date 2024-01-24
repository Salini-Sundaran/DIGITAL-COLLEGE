<html>
<head>
<title>staff</title>
</head>
<body>

                            <a href="facultyhome.php" >Home</a>
                          <a href="fviewstud.php" >Students</a>
                         <a href="noteupload.php" >Notes Upload</a>
                         <a href="fviewnotes.php">view Notes</a>
                        
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notification</a> 
                            
                                <a href="fnotify.php">Add Notification</a>
                              <a href="fvnotify.php">View Notification</a>
                                 <a href="subject.php">add subject</a>
                            
                        
                       <a href="index.php">Log Out</a>

<table border="2">
<tr>
<th>faculty name</th>
<th>message</th>
<th>Reply</th>
</tr>
<?php
include 'DatabaseCon.php';
$db=new DatabaseCon;
$q="select * from message";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
?>
<tr>
<td><?php echo $row['faculty name'];?></td>
<td><?php echo $row['message'];?></td>
<td><?php echo $row['replay'];?></td>
</tr>

<?php
}
?>
</table>
</body>
</html>