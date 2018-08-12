<?php
    session_start() ;
    if(!isset($_SESSION['user_id'])){
        header("location: index.php") ;
    }
    include("connection.php") ;

    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM patient WHERE user_id='$user_id'";
    $result = mysqli_query($link, $sql);

    $count = mysqli_num_rows($result);
    if ($count==1){
        $row = mysqli_fetch_assoc($result) ;
        $aadhar = $row['aadhar'] ;
        $name = $row['name'] ;
        $address = $row['address'] ;
        $age = $row['age'] ;
        $gender = $row['gender'] ;
    }
?>

<!DOCTYPE html>
<html>
<title>Health +</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    

body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black" >

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="/w3images/avatar_smoke.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>PROFILE</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>RECORDS</p>
  </a>
  <a href="index.php?logout=1" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-close w3-xxlarge"></i>
    <p>LOG OUT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">PROFILE</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">RECORDS</a>
    <a href="index.php?logout=1" class="w3-bar-item w3-button" style="width:25% !important">LOG OUT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    
      <h1 class="w3-jumbo" style="margin-top:-20px">Welcome to Health+ Portal</h1>
    <p>Dedicated to Providing the Best Transparency in Health Records</p>
    <img src="image4.jpg" alt="medical" class="w3-image" height="700" width="708">  </header>
<h2 class="w3-text-light-grey" style="margin-top:-80px">"I dream of a Digital India where quality healthcare percolates right up to the remotest regions powered by e-Healthcare."</h2>

    <p style="text-align: right; ">- Narendra Modi
    </p>
    
    </div>
    
    
  <!-- About Section -->
 <?php
//session_start();
///*Connect to mysqli server*/ 
//$link = mysqli_connect('dbms.iiitdmj.ac.in', '2016270','86df7dcf');  
///*Check link to the mysqli server*/ 
//if(!$link)
//{ 
//die('Failed to connect to server: ' . mysqli_error());
// } 
///*Select database*/ 
//$db = mysqli_select_db($link,'2016270'); 
//if(!$db)
//{
// die("Unable to select database"); 
//}
//$qry = "Select name, aadhar, age, address, gender From patient Where user_id=2"; 
//$result = mysqli_query($link,$qry);
echo "<div class=\"w3-container\" style=\"margin-left:200px; margin-right:500px; font-size:20px;\">";
echo "<table class=\"w3-table w3-hoverable \" >";
  echo "<div class=\"w3-content w3-justify w3-text-grey w3-padding-64\" id=\"about\">";

echo "<h2 class=\"w3-padding-16 w3-text-light-grey\">Patient Profile</h2>"; echo "<tr><th class=\"w3-wide\" >Name</th><td>".$name."</td></tr>";
    echo "<th class=\"w3-wide\">Aadhar Number</th><td>".$aadhar."</td></tr>";
    echo "<th class=\"w3-wide\">Age</th><td>".$age."</td></tr>";
    echo "<th class=\"w3-wide\">Gender</th><td>".$gender."</td></tr>";
    echo "<th class=\"w3-wide\">Address</th><td>" . $address ."</td></tr>";
  echo "</table>
</div>";
  echo "</div>";
  ?>
  

  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos" style="margin-top:140px;">
    <h2 class="w3-text-light-grey">Patient Record</h2>
    <hr style="width:200px" class="w3-opacity">
      
    <?php
        $sql = "SELECT * FROM records, doctor WHERE patient_aadhar='$aadhar' AND doctor_id=doctor.user_id" ;
        $result = mysqli_query($link , $sql) ;
        if(mysqli_num_rows($result) > 0)
        {
            echo "<div class='w3-responsive' style='color:black;'>" ;
            echo "<table class='w3-table-all w3-hoverable'>" ;
            echo "<tr>" ;
            echo "<th>Doctor's Name</th>" ;
            echo "<th>Date of visit</th>" ;
            echo "<th>Prescription</th>" ;
            echo "<th>Doctor's Notes</th>" ;
            echo "</tr>" ;
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>" ;
                echo "<td>" . $row['name'] . "</td>" ;
                echo "<td>" . $row['visit_date'] . "</td>" ;
                echo "<td>" . $row['medicines'] . "</td>" ;
                echo "<td>" . $row['notes'] . "</td>" ;
                echo "</tr>" ;
            }
            echo "</table>" ;
            echo "</div>" ;
        }
      ?>

    <!-- Grid for photos -->
<!--
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="/w3images/wedding.jpg" style="width:100%">
        <img src="/w3images/rocks.jpg" style="width:100%">
        <img src="/w3images/sailboat.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="/w3images/underwater.jpg" style="width:100%">
        <img src="/w3images/chef.jpg" style="width:100%">
        <img src="/w3images/wedding.jpg" style="width:100%">
        <img src="/w3images/p6.jpg" style="width:100%">
      </div>
-->
    <!-- End photo grid -->
<!--    </div>-->
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
<!--
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
   End Contact Section 
  </div>
-->
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Health+&copy; Copyrights Reserved
<!--        <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a>-->
    </p>
  <!-- End footer -->
  </footer>    

<!-- END PAGE CONTENT -->


</body>
</html>
