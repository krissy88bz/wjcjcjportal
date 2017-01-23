<?php

include 'Connection/Credentials.php';
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT lnews1, lnews2,lnews3, link1, link2, link3, link4 FROM latestnews";
$result = $conn->query($sql);




//login info

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $email = mysqli_real_escape_string($conn,$_POST['email']);
     $pass = mysqli_real_escape_string($conn,$_POST['password']);
     
      $sel_user = "select * from login where email='$email' AND pw='$pass' ";

    $run_user = mysqli_query($conn, $sel_user);

    $check_user = mysqli_num_rows($run_user);
    
    if($check_user>0){
        
          $_SESSION['email']=$email;
          //$_SESSION['last_time'] = time();
          

         echo '<script type="text/javascript"> window.open("studentdashboard.php","_self");</script>';            //  On Successfull Login redirects to home.php
        }
        else
        {
            echo "<script>alert('Invalid UserName or Password')</script>";        
        }
}

$conn->close();

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>MyWJC</title>
  <script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour"> Wesley Junior College</span></a></h1>
          <p2>School Portal- MyWJC</p2>
          <h2>Login Page</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
            <li class="selected"><a href="changepassword.php">Change Password</a></li>
         </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
      
            
            </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
              
            
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
         
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
       <div class="container">
<div class="row">
<div class="col-sm-12">
<h1>Change Password</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<p class="text-center">Use the form below to change your password. Your password cannot be the same as your username.</p>
<form method="post" id="passwordForm">
<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
<div class="row">
<div class="col-sm-6">
<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter
</div>
<div class="col-sm-6">
<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
</div>
</div>
<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
<div class="row">
<div class="col-sm-12">
<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
</div>
</div>
<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
</form>
</div><!--/col-sm-6-->
</div><!--/row-->
</div>
        <p>          
              
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Login</a> | <a href="examples.html">Sign Up</a></p>
      <p>Copyright &copy; Wesley Junior College | Created By: Kristen Gentle - krissy88bz@gmail.com</a></p>
    </div>
  </div>
</body>
</html>
