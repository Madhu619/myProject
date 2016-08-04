<?php
echo "hello";
session_start();
include("config.php");
$username=$_POST['username']; 
echo $username;
echo $username;
$password=$_POST['password']; 
$selectsql="SELECT id FROM login WHERE user_name='$username' and user_pass='$password'";
$result=mysql_query($selectsql);
$row=mysql_fetch_array($result);
$count=mysql_num_rows($result);
echo $count;
if($count==1)
{
$_SESSION['login_user']=$username;
header("location:home.php");
}
else
{
header("Location:login.php?msg=Invalid User name and password");
}



?>
