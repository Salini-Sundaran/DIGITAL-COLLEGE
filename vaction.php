 <?php
    include("DatabaseCon.php");
	$db=new DatabaseCon;
 
    if(isset($_POST['upload'])){

 $cdate=$_POST['cd'];
  $sc=$_POST['sc'];
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg","mp3","m4a");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
        /*  if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else*/
		  
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO video(scode,cdate,fpath) VALUES('".$sc."','".$cdate."','".$target_file."')";

             // $query = mysqli_query($con,$query);
			 $db->insertQuery($query);
			 header('location:class details.php');
              
            
          }

       }
 
     } 
     ?>
    
