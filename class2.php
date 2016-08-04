<?php
session_start();
include("config.php");
echo "<title> Class1 </title>";


echo "<center><div style='align:center;border:1px solid black;width:40%;background:white;padding-left:40px;padding-right:40px;'>";
echo "<center><h2 style='color:blue'> Available Class2 Medicine </h2>";
$selectsql="select * from medicine where class='class2'";
$result=mysql_query($selectsql);
echo "<br/><center><table border=3><tr> <th> Class </th> <th> Medicine Name </th><th> Quantity </th><th> Price </th>";
while($row = mysql_fetch_array($result))
{
echo " <tr> <td>".$row['class']."</td><td>".$row['name']."</td><td>".$row['quantity']."</td><td>".$row['price'];
}

echo "</table> </center>";
?>

<style>
body
{

    background:  url(images/med2.jpg) no-repeat center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<body> </body>
<br/> 	<br/>

<center><table border="0" padding:0 15px 0 15px;> <td><a href='home.php'>Home</a></td><td><a href='medicine.php'> Medicine </a></td><td><a href='images.php'> Gallery </a></td><td><a href='contact.php'>Contact </a></td></table>
<p><center> Copyright &copy;  RVCE,MCA-2015 : All rights reserved</p> 
	

