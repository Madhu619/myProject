<?php
include("session.php");

echo "<h3 align='right'> Logged User : ".$_SESSION['login_user']."</h3>";
?>

<title> X-Linked</title>
<head><link rel="stylesheet" type="text/css" href="Style.css" /></head>
<style>
body
{

    background:  url(images/hemo.jpg) no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center align="justify"><div style="align:center;border:1px solid black;width:60%;background:white;padding-left:40px;padding-right:40px;"></p>
<div class="class" align="left">
<center><h2 style="color:green"> See the different levels of Hemophila</h2></center	>
<h3 Style="font-style:italic; color:blue"> Basic Genetics <a href="stages/stage1.php"> view </a> <br/>
<h3 Style="font-style:italic; color:blue"> Hemophilia Genetics <a href="stages/stage2.php"> view </a> <br/>
<h3 Style="font-style:italic; color:blue"> Carrier Mother Genetics<a href="stages/stage3.php"> view </a> <br/>
<h3 Style="font-style:italic; color:blue"> Father with Hemophilia Genetics<a href="stages/stage4.php"> view </a> <br/>
<h3 Style="font-style:italic; color:blue"> Father with Hemophilia and Mother Carrier Genetics<a href="stages/stage5.php"> view </a> <br/>
</div>

<br/>
<br/><br/><br/>

<center><table border="0" padding:15px 35px 0 15px;> <td><a href='home.php'>Home</a></td><td><a href='xlink.php'> X-Linked</a></td><td><a href='medicine.php'> Medicine </a></td><td><a href='images.php'> Gallery </a></td><td><a href='contact.php'>Contact </a></td></table>
<p><center> Copyright &copy;  RVCE,MCA-2015 : All rights reserved</p> 

</div>
