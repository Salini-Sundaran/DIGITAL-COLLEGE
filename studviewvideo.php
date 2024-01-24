<!DOCTYPE html>

<!-- 
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProBootstrap:Enlight &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
    
    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Brooklyn, NY 10036, United States</span>
              <span><i class="icon-phone2"></i>+1-123-456-7890</span>
              <span><i class="icon-mail"></i>info@probootstrap.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
                <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="ProBootstrap:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="studenthome.php">Home</a></li>
               <li class="active"><a href="studprofileview.php">My Profile</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Add</a>
                <ul class="dropdown-menu">
                  <li><a href="message.php">Ask Doubts</a></li>
                 
                 </ul></li>
                 
                 <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">View</a>
                <ul class="dropdown-menu">
                                 <li><a href="studviewvideo.php">Recorded Class Video</a></li>

                  <li><a href="svnotify.php">Notification</a></li>
                  <li><a href="vmessage.php">Clear Doubts</a></li>
                  <li><a href="viewnotes.php">Notes</a></li>
                  <li><a href="svmark.php">Marks</a></li>
                  <li><a href="vlib1.php">Library Text</a></li>
                  <li><a href="vtime1.php">Time Table</a></li>
                 </ul></li>
                  <li><a href="index.php">Logout</a></li>
                 
                 
          </div>
        </div>
      </nav>

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image:url(img/2.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2"><h1 align="center"><font color="#FFFFFF"><b>My Profile</b></font></h1>
                  <div class="probootstrap-slider-text text-center">
<table border="1" style="background-color:rgba(0,0,0,0.8);color:white;width:80%">
<tr><th>video class date</th>
<th>Subject Code</th>
<th></th>
				  <?php
				//$s="SELECT location FROM video ORDER BY id DESC";
	include 'DatabaseCon.php';
	$db=new DatabaseCon;
	session_start();
	$uid=$_SESSION['uid'];
	$s="select * from video inner join subject on subject.subcode=video.scode where ccode=(select dept from registration where id=$uid) and sem=(select sem from registration where id=$uid)";
	$rs=$db->selectData($s);
	while($row=mysql_fetch_array($rs))
	
	{	

	
	?>
	<tr>
	<td><?php echo $row['cdate'];?></td>
	<td><?php echo $row['scode'];?></td>
     <td> <video width="320" height="240" controls " >
                                            <source src="<?php echo $row['fpath'];?>" type="video/mp4">
                                            <source src="<?php echo $row['fpath'];?>" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video></td>
										<td><input type="hidden" value="<?php echo $row['vid'];?>" name="vid"/></td>
									
                  </tr>
				  <?php 
				 
	}
	?>
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
  <script type="text/javascript">
        var vid = document.getElementById("myVid");
        function playVid() {
            vid.play();
           /* setTimeout(function () {
                vid.pause()
                var cc = confirm("Do u want to continue?")
                if (cc) {
                    vid.play()
                    setTimeout(function () {
                        vid.pause()
                        var cc = confirm("Do u want to continue?")
                        if (cc) {
                            vid.play()
                        }
                        else {
                            vid.stop()

                        }
                    }, 30000);//60000ms is 1 minute
                }
                else {
                    vid.stop()

                }
            }, 30000);//60000ms is 1 minute*/
        }
        vid.onended = function () {
           
           var fp="attendanceaction.php?vid=";
           var sp=document.getElementById("vid").value;
             alert("The class has ended");
             window.location.href=fp+sp;
        };

    </script>
</html>          
