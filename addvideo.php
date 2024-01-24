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
<body style="background-image: url('images/up.jpg');">
<div style="
    background-color: #000000b8;
    color: white;
    list-style: none;
">
  <body>

    

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
             <li class="active"><a href="facultyhome.php">Home</a></li>
              
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Add</a>
                <ul class="dropdown-menu">
                              <li><a href="registration.php">Student</a></li>

                  <li><a href="noteupload.php">Notes Upload</a></li>
                  <li><a href="class details.php">Class Details</a></li>
                  <li><a href="attendance.php">Attendance</a></li>
                  <li><a href="fnotify.php">Notifications</a></li>
                  <li><a href="timetable.php">Time Table</a></li>
                 </ul></li>
                 <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">View</a>
                <ul class="dropdown-menu">
                  <li><a href="fviewstud.php">Students</a></li>
                  <li><a href="fviewnotes.php">Notes</a></li>
                  <li><a href="fmsgview.php">Doubts</a></li>
                  <li><a href="viewatten.php">Attendance</a></li>
                  <li><a href="fvnotify.php">Notification</a></li>
                  <li><a href="vtime.php">Time Table</a></li>
                 </ul></li>
                  <li><a href="index.php">Logout</a></li>
                 
                 
          </div>
        </div>
      </nav>

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image:url(img/cd.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
				
                  <div class="probootstrap-slider-text text-center">    <center>
				  <h3 style="color:white;">Subject:<?php echo $_GET['sc'];?></h3>
<table style="background-color:rgba(0,0,0,0.8);color:white;padding:20px">
<h1 align="center">Video</h1>
    <form method="post" action="vaction.php" enctype="multipart/form-data" >
	
	<input type="hidden" name="sc" value="<?php echo $_GET['sc'];?>"/>
       <tr><th>Upload Video</th><td><input type='file' name='file' class="btn musica-btn" required="yes"/></td></tr>
        <tr><th>Video of(Date)</th>
<td><input type="date" name="cd" style="color:black"/></td></tr>     
  <tr><th></th><td><input type='submit' value='Upload' name='upload' style="color:black"></td></tr>
    </form></table>
<br> <div class="bg-gradients"></div>

    <div>
    <table border="1" style="background-color:rgba(0,0,0,0.8);width:80%">
       <tr>
       
         <th>Video of(Date)</th>
       <th>Video</th>
       </tr>
    <?php
	include "DatabaseCon.php";
							$db=new DatabaseCon;
	//$s="SELECT location FROM video ORDER BY id DESC";
	
	$s="SELECT * FROM video where scode='".$_GET['sc']."'";
	$rs=$db->selectData($s);
	while($row=mysql_fetch_array($rs))
	{
    // $fetchVideos = mysqli_query($con, "SELECT location FROM video ORDER BY id DESC");
    // while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['fpath'];
	   ?>
       <tr>
       
       <td><?php echo $row['cdate'];?></td>
       <td><?php echo "<video src='".$location."' controls width='120px' height='100px' >";?></td>
       <td><a href="delvdo.php?id=<?php echo $row['vid'];?>"><font color="#33FFFF">Delete</font></a></td>
       </tr>
       
 <?php
      /* echo "<div >";
       echo "<video src='".$location."' controls width='320px' height='200px' >";
       echo "</div>";*/
     }
     ?>
     </table>
 </center>
           

     </div>
                </div>
              </div>
            </div>
          </li>
            </ul>
      </section>
            <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>          
