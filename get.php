<?php
 echo "<center><h1 style='color:Green; font-style-italic'> Images Related to Hemophilia</h1>"; 
// Store File in a name : DisplayPhoto.php
 
$host = 'localhost';
$user = 'root';
$pass = 'madhu';
$db = 'project';
 
// some basic sanity checks

//connect to the db
$link = mysql_connect("$host", "$user", "$pass")
or die("Could not connect: " . mysql_error());
 
// select our database
mysql_select_db("$db") or die(mysql_error());
 
// get the image from the db
$sql = "SELECT * FROM sample;";

// the result of the query
$result = mysql_query("$sql") or die("Invalid query: " . mysql_error());

 while ($row = 	mysql_fetch_array($result))
 {
   // set the header for the image
   //header("Content-type: image/jpeg");
   //echo mysql_result($result,$count);
 $msg.= '<img src="data:image/jpg;base64,'.base64_encode($row['image']). ' " width="400px" height="400px"/>	</a>';
   //$count++;

 }
echo $msg; 
// set the header for the image

//header("Content-type: image/jpg");
//echo mysql_result($result, 0);
 
// close the db link
mysql_close($link);
?>
<center align="right"><div style="align:center;border:1px solid black;width:100%;background:white;padding-left:40px;padding-right:40px;"></p>

<center><table border="0" padding:0 15px 0 15px;> <td><a href='home.php'>Home</a></td><td><a href='xlink.php'> X-Linked</a></td><td><a href='medicine.php'> Medicine </a></td><td><a href='images.php'> Gallery </a></td><td><a href='contact.php'>Contact </a></td></table>
<p><center> Copyright &copy;  RVCE,MCA-2015 : All rights reserved</p> 
</div>
