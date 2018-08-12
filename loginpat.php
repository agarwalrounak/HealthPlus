

<?php
//Start session
session_start();
//Connect to the database
include("connection.php");
//Check user inputs
    //Define error messages
$missingAadhar = '<p><stong>Please enter your aadhar number</strong></p>';
$missingPassword = '<p><stong>Please enter your password!</strong></p>'; 
    //Get aadhar and password
    //Store errors in errors variable
    $errors = "" ;
    $aadhar = "" ;
    $password = "" ;
if(empty($_POST["loginaadhar"])){
    $errors .= $missingAadhar;   
}else{
    $aadhar = filter_var($_POST["loginaadhar"], FILTER_SANITIZE_EMAIL);
}
if(empty($_POST["loginpatpassword"])){
    $errors .= $missingPassword;   
}else{
    $password = filter_var($_POST["loginpatpassword"], FILTER_SANITIZE_STRING);
}
    //If there are any errors
if($errors){
    //print error message
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;   
}else{
    //else: No errors
    //Prepare variables for the query
    $aadhar = mysqli_real_escape_string($link, $aadhar);
$password = mysqli_real_escape_string($link, $password);
//$password = hash('sha256', $password);
        //Run query: Check combinaton of email & password exists
$sql = "SELECT * FROM patient WHERE aadhar='$aadhar' AND password='$password'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>';
    exit;
}
        //If email & password don't match print error
$count = mysqli_num_rows($result);
if($count !== 1){
    echo '<div class="alert alert-danger">Wrong Aadhar or Password</div>';
}
else {
    //log the user in: Set session variables
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['username']=$row['name'];
    $_SESSION['aadhar']=$row['aadhar'];
//    echo "success" ;
    header('location:patientlogin.php');
}
    }
?>