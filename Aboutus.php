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
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-vcard w3-xxlarge"></i>
    <p>OUR MISSION</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-group w3-xxlarge"></i>
    <p>MEET OUR TEAM</p>
  </a>
  
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
</nav>
<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">OUR MISSION</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">MEET OUR TEAM</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
	<a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    
      <h1 class="w3-jumbo" style="margin-top:-20px">Here’s to a stronger, healthier world.</h1>
	  </header>
    <p style="font-size:120%; margin-left:200px; margin-right:100px;"><i>Health+</i> wants to be your most trusted ally in your pursuit of health and well-being. The medical and health records of individuals are digitised to improve ease of access for both the patient and the doctor. We are meant to provide for creation and maintenance of health records in a standardised manner that would allow for interoperability across platforms and institutions across the country.</p>
	<p style="font-size:120%; margin-left:200px; margin-right:100px;">Whenever an individual interacts with any healthcare service, a digital summary of various medical records is generated. <i>Health+</i> is designed to be used beyond any one health organisation and to share information with other health care providers, such as laboratories and specialists, so as to contain information from all professionals involved in the patient’s care. <i>Health+</i> allows better diagnosis and care for the patient as it provides an overview of the patient’s history. </p>
	<br/><br/>
      
<!--<h2 class="w3-text-light-grey" style="margin-top:-90px">Mission</h2>

    <p style="text-align: right; ">- Narendra Modi
    </p>-->
    
    </div>
    
    
  <!-- About Section -->
 
<div class="w3-container" style="margin-left:100px; margin-right:100px">
 <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
 
 <h1 class="w3-padding-16 w3-text-light-grey" style="margin-bottom:-20px;  text-align:center">MEET OUR TEAM</h1></br>
  <table class="w3-table " >
    <tr>
     <td><img src="/Health+/rounak.jpg" alt="Rounak" width=250 height=300></td>
	 <td><img src="/Health+/anurag.jpg" alt="Anurag" width=250 height=300></td>
	 <td><img src="/Health+/sumit.jpg" alt="Sumit" width=250 height=300></td>
	 <td><img src="/Health+/ujjwal.jpg" alt="Ujjwal" width=250 height=300></td>
	</tr>
	<tr > <th style="text-align:center" >Rounak Agarwal</th><th style="text-align:center">Anurag Bisht</th><th style="text-align:center">Sumit Chauhan</th><th style="text-align:center" >Ujjwal Kumar</th></tr>
     
    
  </table>
</div>

  <!-- End About Section -->

 
  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h1 class="w3-text-light-grey">Contact Us</h1>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> <b>Jabalpur, Madhya Pradesh</b></p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i><b> Phone: +9876543210</b></p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> <b>Email: mail@iiitdmj.ac.in</b></p>
    </div><br>
    <p>Lets get in touch. </p>

   
  <!-- End Contact Section -->
  </div>
  
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    
  <!-- End Portfolio Section -->
  </div>
  
       

<!-- END PAGE CONTENT -->


</body>
</html>
