<?php ?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Contact Us</title>
	<script src="freecontactformvalidation.js"></script>
	
	<link rel="stylesheet" type="text/css" href="freecontactform.css">
<style>


</style>
	</head>
	<body>
	<center>
<div style="border:1px solid black;width:60%;background:white;padding-left:40px;padding-right:40px;">
<br/><br/></td>

	<form name="freecontactform" method="post" action="freecontactformprocess.php" onsubmit="return validate.check(this)">
	<table width="400px" class="freecontactform" align="center">
	<tr>
	
<br/><br/></td> 
	<td colspan="2">
	  
	 <div class="freecontactformheader">Contact Us Form</div>
	  
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
	  <label for="Email_Address" class="required">Email Address<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Email_Address" id="Email_Address" maxlength="100" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Telephone_Number" class="not-required">Telephone Number</label>
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
	  <div class="antispammessage">
	  To help prevent automated spam, please answer this question
	  <br /><br />
		  <div class="antispamquestion">
		   <span class="required_star"> * </span>
		   Using only numbers, what is 10 plus 15? &nbsp; 
		   <input type="text" name="AntiSpam" id="AntiSpam" maxlength="100" style="width:30px">
		  </div>
	  </div>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center" >
	 <br /><br />
	  <input type="submit" value=" Submit Form " style="width:200px;height:40px">
	  <br /><br /> </div>
	  <!-- 
	  If you want to remove this author link, 
	  please purchase an unbranded version from: http://www.freecontactform.com/unbranded_form.php 
	  Or upgrade to the professional version at: http://www.freecontactform.com/professional.php
	  -->
	  <div>Form provided by: <a href="http://www.freecontactform.com">FreeContactForm.com</a></div>
	  <br /><br />
	 </td>
	</tr>
	</table>
	</form>



</body>
</html>
