<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td>File Type</td>

    <td>View</td>
    </tr>
    <?php
	include("DatabaseCon.php");
 $sql="SELECT * FROM up";
 $db=new DatabaseCon;
$rr=$db->selectData($sql);
 while($row=mysql_fetch_array($rr))
 {
  ?>
        <tr>
        
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
      
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
</table>
</body>
</html>