<?php
include("session.php");

echo "<h3 align='right'> Logged User : ".$_SESSION['login_user']."</h3>";
?>

<title> Medicine </title>
<head><link rel="stylesheet" type="text/css" href="Style.css" /></head>
<style>
body
{

    background:  url(images/med.jpg) no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<?php 
if($_SESSION['login_user']=="admin" || $_SESSION['login_user']=="madhu")
{?> 
<center><div style="align:center;border:1px solid black;width:40%;background:white;padding-left:40px;padding-right:40px;">
<form action="store.php" method="POST">
<h1 style="color:blue"> <center> Enter New Medicine </center> </h2>
<center>
<input type="text" name="class" placeholder="Enter Class of Medicine" pattern="(^[aA-zZ0-9]*)" 
	maxlength="20" required title="Class1 , Class2 or Class3." 
	style="margin-top:5px;background: 
	background-position: 8px; "/><br/>

<input type="text" name="name" placeholder="Enter Medicine Name" pattern="(^[aA-zZ0-9]*)" 
	maxlength="20" required autofocus title="Only alphanumeric. Spaces are not allowed." 
	style="background: white url(images/tablet.png) left no-repeat;
	background-position: 6px;"/><br/>

<input type="text" name="quantity" placeholder="Quantity" pattern="(^[aA-zZ0-9]*)" 
	maxlength="20" required autofocus title="Only alphanumeric. Spaces are not allowed." 
	style="background: white url(images/question.png) left no-repeat;
	background-position: 6px;"/><br/>

<input type="text" name="price" placeholder="Price" maxlength="20" required autofocus title="Only alphanumeric. Spaces are not allowed." 
	style="background: white url(images/price.png) left no-repeat;
	background-position: 6px;"/><br/>
<input type="submit" value="Save" style="background: white url(images/save.jpg) left no-repeat;" /></div>

</center>
<br/>
<?php } ?>
<center align="right"><div style="align:center;border:1px solid black;width:40%;background:white;padding-left:40px;padding-right:40px;"></p>
<div class="class" align="left">
<h2 style="color:green"> See the Available Medicine </h2>
<h3 Style="font-style:italic; color:blue"> Class I  Medicines <a href="class1.php"> view </a> <br/>
<h3 Style="font-style:italic; color:blue"> Class II Medicines <a href="class2.php"> view </a> <br/>
<h3 Style="font-style:italic; color:blue"> Class III Medicines<a href="class3.php"> view </a> <br/>
</div>

<br/>

<center><table border="0" padding:0 15px 0 15px;> <td><a href='home.php'>Home</a></td><td><a href='xlink.php'> X-Linked</a></td><td><a href='medicine.php'> Medicine </a></td><td><a href='Gallery.php'> Gallery </a></td><td><a href='contact.php'>Contact </a></td></table>
<p><center> Copyright &copy;  RVCE,MCA-2015 : All rights reserved</p> 
</div>
