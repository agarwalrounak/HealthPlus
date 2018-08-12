<?php
session_start();
include('connection.php');

//logout
include('logout.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health +</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="styling.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
      <style>
          body{
              font-family: Arvo, serif;
    background: url("image.jpg") no-repeat center center;
    background-attachment: fixed;
    background-size: 100% 87%;
          }
      
      </style>
  </head>
  <body>
    <!--Navigation Bar-->  
      <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
      
          <div class="container-fluid">
            
              <div class="navbar-header">
              
                  <a class="navbar-brand">Health +</a>
                  <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  
                  </button>
              </div>
              <div class="navbar-collapse collapse" id="navbarCollapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="Aboutus.php">About</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModaldoctor" data-toggle="modal">Login as Doctor</a></li>
                    <li><a href="#loginModalpatient" data-toggle="modal">Login as Patient</a></li>
                  </ul>
              
              </div>
          </div>
      
      </nav>
    
    <!--Jumbotron with Sign up Button-->
      <div class="jumbotron" id="myContainer">
          <h1>Health +</h1>
          <p>Medical Records at your hand.</p>
<!--          <p>Keep yourself updated!!</p>-->
      </div>

    <!--Doctor Login form-->    
      <form action = "logindoc.php" method="post" id="doctorloginform">
        <div class="modal" id="loginModaldoctor" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Login: 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Login message from PHP file-->
                  <div id="doctormessage"></div>
                  

                  <div class="form-group">
                      <label for="loginemail" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="logindocpassword" class="sr-only">Password</label>
                      <input class="form-control" type="password" name="logindocpassword" id="logindocpassword" placeholder="Password" maxlength="30">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="login" type="submit" value="Login">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>
      
<!--      Login as patient-->
      <!--Login form-->    
      <form action = "loginpat.php" method="post" id="patientloginform">
        <div class="modal" id="loginModalpatient" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Login: 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Login message from PHP file-->
                  <div id="patientmessage"></div>
                  

                  <div class="form-group">
                      <label for="loginaadhar" class="sr-only">Aadhar Number:</label>
                      <input class="form-control" type="number" name="loginaadhar" id="loginaadhar" placeholder="Aadhar Number" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="loginpatpassword" class="sr-only">Password</label>
                      <input class="form-control" type="password" name="loginpatpassword" id="loginpatpassword" placeholder="Password" maxlength="30">
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="login" type="submit" value="Login">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>
    
    <!-- Footer-->
      <div class="footer">
          <div class="container">
              <p>Health+ Copyright &copy; 2015-<?php $today = date("Y"); echo $today?>.</p>
          </div>
      </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>