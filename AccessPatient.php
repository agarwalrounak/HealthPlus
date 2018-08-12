


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

    <?php
    session_start() ;
    if(!isset($_SESSION['user_id'])){
        header("location: index.php") ;
    }
    include("connection.php") ;

    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM doctor WHERE user_id='$user_id'";
    $result1 = mysqli_query($link, $sql);

    $count = mysqli_num_rows($result1);
    if ($count==1){
        $row = mysqli_fetch_assoc($result1) ;
        $docname = $row['name'] ;
    }
    $aadhar = $_GET['loginaadhar'] ;
    $sql = "SELECT * FROM patient WHERE aadhar='$aadhar'" ;
    $result2 = mysqli_query($link , $sql) ;
    $count = mysqli_num_rows($result2);
    if ($count==1){
        $row = mysqli_fetch_assoc($result2) ;
        $name = $row['name'] ;
        $address = $row['address'] ;
        $age = $row['age'] ;
        $gender = $row['gender'] ;
    }
    else{
        echo "<div class='alert alert-danger'>The entered Aadhar number is not fed in our database or it is incorrectly entered</div>" ;
        exit() ;
    }
    
?>
    
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
  <a onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-search w3-xxlarge"></i>
    <p>ADD RECORD</p>
  </a>
  <a href="doctorlogin.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-arrow-left w3-xxlarge"></i>
    <p>BACK</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">PROFILE</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">RECORDS</a>
    <a onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button" style="width:25% !important">ADD RECORD</a>  
    <a href="doctorlogin.php" class="w3-bar-item w3-button" style="width:25% !important">LOG OUT</a>
  </div>
</div>
    
<!--    Add Record form-->
    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="addRecord.php" method="post">
        <div class="w3-section">
            <?php
                echo "<input type='number' name='addaadhar' class='w3-input w3-border w3-margin-bottom' value='$aadhar'>" ;
                $date = date("Y-m-d") ;
                echo "<input type='date' name='visit' class='w3-input w3-border w3-margin-bottom' value='$date'>" ;
            ?>
            <textarea class="w3-input w3-border w3-margin-bottom"  name="medicines" rows="4" placeholder="Prescription" style="color:black;" required></textarea>
            <textarea class="w3-input w3-border w3-margin-bottom" rows="6"  name="notes" placeholder="Notes" style="color:black;" required></textarea>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    
      <h1 class="w3-jumbo" style="margin-top:-20px">Welcome to Health+ Portal</h1>
    <p>Dedicated to Providing the Best Transparency in Health Records</p>
    <img src="image4.jpg" alt="medical" class="w3-image" height="700" width="708">  </header>
<h2 class="w3-text-light-grey" style="margin-top:-90px">"I dream of a Digital India where quality healthcare percolates right up to the remotest regions powered by e-Healthcare."</h2>

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
echo "<div class=\"w3-container\" style=\"margin-left:200px; margin-right:500px\">";
echo "<table class=\"w3-table \" >";
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
  <div class="w3-padding-64 w3-content" id="photos">
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

  <!-- End Portfolio Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Health+&copy; Copyrights Reserved</p>
  <!-- End footer -->
  </footer>    

<!-- END PAGE CONTENT -->


</body>
</html>
