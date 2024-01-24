


  <?php
include("DatabaseCon.php");
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
// $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
$q="select max(id)as id from upload";
$db=new DatabaseCon;
$rr=$db->selectData($q);
$row=mysql_fetch_array($rr);
$id=$row['id'];
 $sql="update upload set filepath= '$file' where id='$id'";

$db->updateQuery($sql);
}
?>