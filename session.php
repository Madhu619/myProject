<?php
session_start();
include('config.php');


$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select user_name from login where user_name='$user_check' ");
$row=mysql_fetch_array($ses_sql);
$loggedin_session=$row['user_name'];
if(!isset($loggedin_session))
{
header("Location:login.php");
}
else
 {
header("home.php");
}
?>

