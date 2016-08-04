<?php
include("session.php");
?>


<!DOCTYPE HTML>
<html>
<head><title>Hemophilia Home</title>
<link rel="stylesheet" type="text/css" href="Style1.css" />
<style>
p
{
text-align:justify;
}
</style>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no"/>

    <title>JQuery Slideshow plugin</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/demopage.css">
    <link rel="stylesheet" type="text/css" href="assets/jQuery-slideshow-plugin/plugin.css">

</head>
<body bgcolor=d0e4fe>

<style>
#header {height: 80px;width: 100%;z-index: 1000;
background: radial-gradient(blue,cyan,blue); /* Standard syntax */
}

.fixed {
position: fixed;left: 0;
-webkit-box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);
-moz-box-shadow: 0 7px 8px rgba(1, f, 0, 0.12);
box-shadow: 0 7px 8px rgba(0, 0, 0, 0.12);}

.inner {width: 940px;margin: 0 auto;height: 48px;}


.shadow{width: 100%;height: 5px;position: absolute;left: 0;bottom: -5px;z-index: 500;display: none;}
​</style>


<div id="header" class="fixed" style="display: block; top: 0px; ">

  <h1 style="color:#ff0"><center> Hemophilia an X-Linked Hierarchy </h1></center>	

</div>
<h2><a id="home"></a></h2>

<center>
<br/><br/><br/>

<?php echo "<h5 align='right'> Logged User : ".$_SESSION['login_user']."</h5>"; ?>
<a style="color:red; float:right" href="logout.php">Sign Out </a> 
<div style="float:left"><h2 style="color:blue"><marquee>Hemophilia Genetics</marquee></h2></div>

<br/><br/><br/><br/>
	<td>

<div class="drop" style="width:93%;">
<ul class="drop_menu">
<li><a href='#'>Home</a>
	<ul>
	<li align="left"><br/><a href='history.php'>History</a></li>
	<lialign="left"><br/><a href='symptoms.php'>Symptoms</a></li>
	</ul>
</li>
<li><a href='xlink.php'>X-Linked</a>
	<ul>
	<!--<li><a href='#'>Basic Genetics </a></li>
	<li><a href='#'>Hemophilia Genetics </a></li>
	<li><a href='#'>Carrier Mother Genetics</a></li>
	<li><a href='#'>Father with Hemophilia Genetics</a></li>
	<li><a href='#'>Father with Hemophilia and Mother Carrier Genetics </a></li>-->
	</ul>
</li> 
<li><a href='medicine.php'>Medicines</a>
	<ul>
	<li align="left"><a href='class1.php'>Class 1</a></li>
	<li align="left"><a href='class2.php'>Class 2</a></li>
	<li align="left"><a href='class3.php'>Class 3</a></li>
	
	</ul>
</li>
<li><a href='#'>Gallery</a>
	<ul>
	<li><a href='images.php'>Photos</a></li>
	<li><a href='video.php'>Videos</a></li>
	</ul>
</li>
<li><a href='contact.php'>Contact Us</a>
	
</li>


</ul>
</div>

<div class="navbar navbar-top text-center">
    <button id="activate" type="button" class="btn btn-default navbar-btn"> Activate Plugin</button>
</div>

<div class="container-fluid text-center">
    <div class="header">
        <img class="headerImg"
             src="images/blood.jpg"
             data-slideshow='images/hemo.jpg|images/index.jpeg|images/Hemophilia1.jpg|images/index.jpeg'>
    </div>

    <!--<div class="container-fluid">
        <div class="col-lg-7">
        </div>

        <div class="col-lg-5">
        </div>

    </div>

</div>

<div class="credit">
   </div> -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/jquery.hammer-full.min.js"></script>
<script src="assets/jQuery-slideshow-plugin/plugin.js"> </script>
<script src="assets/js/demo.js"></script>
    
</body>

<style>
td
{
    padding:0 25px 0 25px;
}
</style>

<center><table border="0" padding:0 15px 0 15px;> <td><a href='home.php'>Home</a></td><td><a href='xlink.php'> X-Linked</a></td><td><a href='medicine.php'> Medicine </a></td><td><a href='Gallery.php'> Gallery </a></td><td><a href='contact.php'>Contact </a></td></table>
<p><center> Copyright &copy;  RVCE,MCA-2015 : All rights reserved</p> 
	</html>


