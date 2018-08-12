<?php
session_start();
if(!isset($_SESSION['user_id']))
{
     header('location: createses.php');
}
include('connect.php');
$user=$_SESSION['username'];
echo $user;


?>