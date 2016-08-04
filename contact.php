<?php
include("session.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="freecontactform.css">
<style>

body
{

    background:  url(images/header.jpg) no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
	</head>
	<body>
	<center>
<div style="float:right"><h4 align=right top><a href="logout.php">Sign Out</a></h4>       </div>
<div style="border:1px solid black;width:50%;background:white;padding-left:80px;padding-right:80px;">
<br/><br/></td>
 <h1><p style="color:blue;">Contact Us</p> </h1>
	<form name=" " method="post" action="store.php">
	<table width="300px" class="freecontactform" align="center">
	<tr>
	
<br/><br/></td> 
	<td colspan="2">
	  
 <div class="freecontactformmessage">Fields marked with <span class="required_star"> * </span> are mandatory.</div>
	  
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Full_Name" class="required">Full Name<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Full_Name" id="Full_Name" maxlength="80" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Email_Address" class="required">E-mail<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Email_Address" id="Email_Address" maxlength="100" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Telephone_Number" class="not-required">Phone Number</label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Telephone_Number" id="Telephone_Number" maxlength="100" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Your_Message" class="required">Your Message<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <textarea style="width:230px;height:160px" name="Your_Message" id="Your_Message" maxlength="2000"></textarea>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center" >
	   </div>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center" >
	 <br /><br />
	  <input type="submit" value=" Submit Form " style="width:100px;height:40px">
	  <br /><br /> </div>
	 
	 </td>
	</tr>
	</table>
	</form>

<center><table border="0" padding:15px 35px 0 15px;> <td><a href='home.php'>Home</a></td><td><a href='xlink.php'> X-Linked</a></td><td><a href='medicine.php'> Medicine </a></td><td><a href='images.php'> Gallery </a></td><td><a href='contact.php'>Contact </a></td></table>
<p><center> Copyright &copy;  RVCE,MCA-2015 : All rights reserved</p> 

</body>
</html>
