<?php
session_start();
include("config.php");
echo "<title> Store </title>";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 
$username=$_POST['username']; 
//echo $username;
$password=$_POST['password']; 
$address=$_POST['adder']; 
$phone=$_POST['phone']; 
$mail=$_POST['mail']; 
if (!($mail==null || $phone==null))
{
$selectsql="INSERT into signup (userName,pass,address,mail,phone)values('$username','$password','$address','$mail','$phone')";
$result=mysql_query($selectsql);
}
if(!$username==null)
{
$selectsql="INSERT into login (user_name,user_pass)values('$username','$password')";
$result=mysql_query($selectsql);
if ($result==1)
{
echo "<h1>Successfully Registered </h1>";
echo "<h2>Click to proceed <a href='login.php'>Login</a></h2>";
}
}
$name=$_POST['Full_Name'];
$email=$_POST['Email_Address'];
$number=$_POST['Telephone_Number'];
$msg=$_POST['Your_Message'];
if(!($name==null || $email==null || $msg==null))
{
$selectsql1="INSERT into feedback (userName,mail,phone,message)values('$name','$email','$number','$msg')";
$result=mysql_query($selectsql1);
if ($result==1)
{
echo "<h1 style='color:Green'>Thanks for Your FeedBack</h1>";
echo "<h2>Click to Redirect <a href='home.php'> Home </a> page</h2>";
}
}

else
{
echo "<center><h1 style='color:red'> Enter Valid Inputs</h1>";
}

$class=$_POST['class'];
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
if(!($name==null || $class==null || $quantity==null || $price==null))
{
$selectsql1="INSERT into medicine(class,name,quantity,price)values('$class','$name','$quantity','$price')";
$result=mysql_query($selectsql1);
if ($result==1)
{
echo "<h1 style='color:Green'>Thanks for Your FeedBack</h1>";
echo "<h2>Click to Redirect <a href='home.php'> Home </a> page</h2>";
}
}
} ?>

