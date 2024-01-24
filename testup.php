<html>
<head><title>File Insert</title></head>
<body bgcolor="#99FFFF">
<h3 style="color:#FFF">Please Choose a File and click Submit</h3>
<center>
<form enctype="multipart/form-data" action=
"<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
<h2 ><?php echo"Upload Photo " ?>
<input name="userfile" type="file" /><br>

<?php 
include("DatabaseCon.php");
session_start();
//$val= $_SESSION['uid'];
//echo $val;

/*$s="select page from pages";

$d=new DatabaseCon;
$result=$d->selectData($s);

while($row = mysql_fetch_array($result))
  {
  */
?>

<input type="submit" value="Submit" /></h2>
</form>
</center>
<?php

// check if a file was submitted
if(!isset($_FILES['userfile']))
{
   
}
else
{
    try {
    $msg= upload();  //this will upload your image
    echo $msg;  //Message showing success or failure.
	
    }
    catch(Exception $e) {
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
    }
}

// the upload function

function upload() {
    include "../ex temp1/file_constants.php";
    $maxsize = 50000000; //set to approx 400 MB

    //check associated error code
    if(($_FILES['userfile']['error']==UPLOAD_ERR_OK)) {

        //check whether file is uploaded with HTTP POST
        if((is_uploaded_file($_FILES['userfile']['tmp_name']))) {    

            //checks size of uploaded image on server side
            if(( $_FILES['userfile']['size'] < $maxsize)) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                // $finfo = finfo_open(FILEINFO_MIME_TYPE);
                //if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {    
if ((($_FILES['userfile']['type'] =="image/jpeg" OR $_FILES['userfile']['type'] =="image/gif" OR $_FILES['userfile']['type'] =="image/png" OR $_FILES['userfile']['type'] =="image/doc" OR $_FILES['userfile']['type'] =="image/pdf" OR $_FILES['userfile']['type'] =="image/pptx"))){
                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
 
                    // put the image in the db...
                    // database connection
                    mysql_connect($host, $user, $pass) OR DIE (mysql_error());

                    // select the db
                    mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());
//$val= $_SESSION['uid'];
                    // our sql query
					
                   /* $sqll = "INSERT INTO posts
                    (pdate,post, cid,typ)
                    VALUES
                    ('$dt','$i','$val','$t');";
mysql_query($sqll) or die("Error in Query: " . mysql_error());*/



//$s="select max(rid) as rid from register";
//$d= new DatabaseCon;
//$result=$d->selectData($s);
//$row=mysql_fetch_array($result);
//$tr=$row['rid'];



 //$sql = "INSERT INTO pimg (image,pid) VALUES('{$imgData}','{$tr}');";
                    // insert the image
				//$sql="update register set photo='{$imgData}'  where rid='{$tr}'";
				$sql = "INSERT INTO up (up) VALUES('{$imgData}');";
                    mysql_query($sql) or die("Error in Query: " . mysql_error());
                    $msg='<p>Image successfully saved in database with id ='. mysql_insert_id().' </p>';
                header('location:login.php');
				}
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
    return $msg;
}

// Function to return error message based on error code


function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
?>

</body>
</html>