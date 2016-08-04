<?php
include("session.php");

echo "<h3 align='right'> Logged User : ".$_SESSION['login_user']."</h3>";
?>

<title> Medicine </title>
<head><link rel="stylesheet" type="text/css" href="Style.css" /></head>
<style>
body
{

    background:  url(images/camera.jpg) no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><center align="right"><div style="align:center;border:1px solid black;width:40%;background:white;padding-left:40px;padding-right:40px;"></p>
<div class="class" align="left">
<center><h2 style="color:green"> Select your Option </h2>
<h3 Style="font-style:italic; color:blue"> <a href="images.php">  Images </a><br/>
<h3 Style="font-style:italic; color:blue"> <a href="video.php">  Videos</a>   <br/>
</div>

<br/>

<center><table border="0" padding:0 15px 0 15px;> <td><a href='home.php'>Home</a></td><td><a href='xlink.php'> X-Linked</a></td><td><a href='medicine.php'> Medicine </a></td><td><a href='Gallery.php'> Gallery </a></td><td><a href='contact.php'>Contact </a></td></table>
<p><center> Copyright &copy;  RVCE,MCA-2015 : All rights reserved</p> 
</div>
