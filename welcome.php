<?php
include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<title>7topics - Login Demo</title>
</head>
<body>
<h1>Welcome <?php echo $loggedin_session; ?></h1>
<p> You are now logged in. you can logout by clicking on signout link given below.
<h2><a href="logout.php">Sign Out</a></h2>
</body>
</html>
