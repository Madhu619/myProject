<!DOCTYPE html>
<html>
<head>
<style>
/*LOGIN textboxes*/

	hr
	{
		webkit-filter	:	blur(1.5px);
		-moz-filter	:	blur(1.5px);
		-o-filter	:	blur(1.5px);
		-ms-filter	:	blur(1.5px);
		filter		:	blur(1.5px);
		/*width		:	90%;*/
		border		:	inset .5em solid gray;
		border-color	:	gray;
		border-radius	:	100px;
	}

input[type=text],
input[type=password],
input[type=email]
{
      webkit-user-select:	text;
      -khtml-user-select:	text;
	-moz-user-select:	text;
	-ms-user-select	:	text;
	-o-user-select	:	text;
	user-select	:	text;

font-size:15px;
-webkit-transition: all 0.50s ease-in-out;
  -moz-transition: all 0.50s ease-in-out;
  -ms-transition: all 0.50s ease-in-out;
  -o-transition: all 0.50s ease-in-out;
   transition:	all 0.50s ease-in-out;
  outline: none;
/*  width:100%;*/
  padding:10px;
  padding-left:50px;
  border:1px solid silver;
}
input[type=text]:focus,
input[type=password]:focus,
input[type=email]:focus
{
box-shadow: 0 0 2px rgba(0, 255, 0, 1),inset 0 0 60px 30px rgba(255,255,0,.3);
border: inset 1px solid rgba(0, 255, 0, 1);
}


input[type="submit"]:hover,
input[type="reset"]:hover
{
border:2px solid gray;
outline:0;
box-shadow:inset 0 0 10px rgba(0,0,0,.3);
-webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -ms-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
   transition:	all 0.1s ease-in-out;

}
input[type="submit"]:focus,
input[type="reset"]:focus
{
border:2px solid gray;
outline:0;
box-shadow:inset 0 0 15px rgba(0,0,0,.8);
-webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -ms-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
   transition:	all 0.1s ease-in-out;

}
input[type="submit"]
{
-webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -ms-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
   transition:	all 0.1s ease-in-out;

	width:47%;padding:10px;font-size:18px;
	border:2px solid silver; box-shadow:inset 0 0 15px rgba(0,0,0,.1);border-radius:5px;
	background: white url(images/login.gif) left no-repeat;background-position: 5px;
}
input[type="reset"]
{
-webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -ms-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
   transition:	all 0.1s ease-in-out;

	width:46%;padding:10px;font-size:18px;
	border:2px solid silver; box-shadow:inset 0 0 15px rgba(0,0,0,.1);border-radius:5px;
	background: white url(images/reset.png) left no-repeat;background-position: 5px;
	
}

/*LOGIN textboxes*/




#tabs {
  overflow: hidden;
  /*border:2px solid green;*/
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;

/*    box-shadow: -4px 0 5px -2px rgba(0, 0, 0, .3);*/
}

#tabs li {
  float: left;
  margin: 0 .5em 0 0;
    border-left:1px solid lightgray;
    border-top:1px solid lightgray;
    
}

#tabs a {
  position: relative;
  background: #ddd;
  border-bottom:0px solid lightgray;
  background-image: linear-gradient(to bottom, #fff, #ddd);  
  padding: .7em 2.0em;
  float: left;
  text-decoration: none;
  color: #444;
  text-shadow: 0 1px 0 rgba(255,255,255,.8);
  border-radius: 5px 0 0 0;
  box-shadow: 0 2px 2px rgba(0,0,0,.4);

}

#tabs a:hover,
#tabs a:hover::after,
#tabs a:focus,
#tabs a:focus::after {
  background: #fff;
  
}

#tabs a:focus {
  outline: 0;
border-top:2px solid red;
border-right:2px solid red;
border-radius:0px 5px 0px 0px;
  
}

#tabs a::after {
  content:'';
  position:absolute;
  z-index: 1;
  top: 0;
  right: -.5em;  
  bottom: 0;
  width: 1em;
  background: #ddd;
  background-image: linear-gradient(to bottom, #fff, #ddd);  
  box-shadow: 2px 2px 2px rgba(0,0,0,.4);
  transform: skew(20deg);
  border-radius: 0 5px 0 0;  
  border-right:1px solid lightgray;
  
}

#tabs #current a{
  background: #fff;
  z-index: 3;
border-top:2px solid red;
border-radius:0px 5px 0px 0px;

  }
#tabs #current a::after {
  background: #fff;
  z-index: 3;
        border-right:2px solid red; 
}

#content {
    border-left:1px solid rgba(0,0,0,0.3);
    border-top:1px solid rgba(0,0,0,0.3);
    border-right:1px solid rgba(0,0,0,0.3);
    border-bottom:1px solid rgba(0,0,0,0.3);
  background: #fff;
  padding: 10px;
  margin-top:-1px;
/*  width:100%;*/
  height: 500px;
  position: relative;
  z-index: 2; 
  border-radius: 0 5px 5px 5px;
/*  box-shadow: 0 0 10px rgba(0, 0, 0, .5);*/
}
</style>
<script src="js/jquery-1.7.2.min.js"></script>
<script>
$(document).ready(function() {
    $("#content").find("[id^='tab']").hide(); // Hide all content
    $("#tabs li:first").attr("id","current"); // Activate the first tab
    $("#content #tab1").fadeIn(); // Show first tab's content
    
    $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
         return;       
        }
        else{             
          $("#content").find("[id^='tab']").hide(); // Hide all content
          $("#tabs li").attr("id",""); //Reset id's
          $(this).parent().attr("id","current"); // Activate this
          $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
        }
    });
});
</script>
</head>
<body>
<div style="width:290px;">
<ul id="tabs">
    <li><a href="#" name="tab1" style="cursor:default;" 
    onclick="document.myForm1.username.focus();" 
    onmouseout="document.myForm1.username.focus();">Log In</a></li>
    <li><a href="#" name="tab2" style="cursor:default;" 
    onclick="document.myForm2.username.focus();" 
    onmouseout="document.myForm2.username.focus();">Sign Up</a></li>
</ul>

<div id="content"> 
    <div id="tab1">
              <center><span style="font-size:23px;">User Login</span></center><br/>
              <hr style="width:90%;"/><br/>
    <form name="myForm1" method="post" action="process/process.php">
<center>
<!--
<a style="font-size:1.2em;" href="#" class="button next" onclick="form.submit(); return true;">Login</a>
-->

<input type="text" name="uniqueid" placeholder="Enter Unique ID" pattern="(^[aA-zZ0-9]*)" 
	maxlength="5" required autofocus title="Only alphanumeric. Spaces are not allowed." 
	style="background: white url(images/iconUser.png) left no-repeat;
	background-position: 6px;"/><br/>

<input type="password" name="password" placeholder="Enter Password" pattern="(^[aA-zZ0-9]*)" 
	maxlength="20" required title="Only alphanumeric. Spaces are not allowed." 
	style="margin-top:5px;background: white url(images/iconLock.png) left no-repeat;
	background-position: 8px; "/><br/><br/>

<input type="submit" value="&nbsp;&nbsp;Login" onclick="document.myForm1.uniqueid.focus();" />
<input type="reset" value="&nbsp;&nbsp;Reset" onclick="document.myForm1.uniqueid.focus();" />
	<br/><br/>

	<?php $val=base64_decode(base64_decode(base64_decode($m))); ?>
	<span class="errmsg" style="font-weight:bold;color:red;">&nbsp;<?php echo "<br/>".$val;?></span>

<a href="#" style="font-size:15px;">Forgot Unique-Id / Password?</a>

	<br/><br/>
	<hr style="width:90%;"/>

</center>
</form>
    
    
    </div>
    <div id="tab2">
          <center><span style="font-size:23px;">New User Sign Up</span></center><br/>
              <hr style="width:90%;"/><br/>
    <form name="myForm2" method="post" action="process/signup.php">
	<center>


<input type="text" name="username" placeholder="Enter Username" pattern="(^[aA-zZ]*)" 
	maxlength="20" required autofocus title="Only alphabets. Spaces are not allowed." 
	style="background: white url(images/iconUser.png) left no-repeat;
	background-position: 6px;"/><br/>

<input type="password" name="password" placeholder="Enter Password" pattern="(^[aA-zZ0-9]*)" 
	maxlength="20" required title="Only alphanumeric. Spaces are not allowed." 
	style="margin-top:5px;background: white url(images/iconLock.png) left no-repeat;
	background-position: 8px; "/><br/>

<input type="email" name="emailid" placeholder="Enter email id"
	maxlength="30" required title="Only valid and existing email id are allowed." 
	style="margin-top:5px;background: white url(images/email.png) left no-repeat;
	background-position: 6px; "/><br/>
	
<input type="text" name="phoneno" placeholder="Enter 10 digit Mobile no" pattern="[^9][0-9]{9}" 
	maxlength="10" title="Only 10 digit mobile no. is allowed." 
	style="margin-top:5px;background: white url(images/phone.png) left no-repeat;
	background-position: 10px; "/><br/><br/>
 
<input type="submit" value="&nbsp;&nbsp;Sign In" onclick="document.myForm2.username.focus();" />
<input type="reset" value="&nbsp;&nbsp;Reset" onclick="document.myForm2.username.focus();" />
	<br/><br/>

	<?php $val=base64_decode(base64_decode(base64_decode($m))); ?>
	<span class="errmsg" style="font-weight:bold;color:red;">&nbsp;<?php echo "<br/>".$val;?></span>
	<br/><br/>
	<hr style="width:90%;"/>

	</center>
	</form>
    </div>
</div>
</body>
</html>
