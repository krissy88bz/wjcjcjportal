<?php

 session_start();

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
          <li class="selected"><a href="index.html">Login</a></li>
         </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            
            <form name="form" action="index.php" method="POST">
             <h3>Login In:</h3>
            <h4>Email: <input ID="tb1" type="text" name="email" value="" /> 
            Password: <input ID="tb2" type="password" name="password" value="" />
            <br><br><input id="btn1" type="submit" value="Login" name="login" /><br>
            <br>           
                
            </form>
            
            
            <span class="link">
            <p align="center"><a href="">Can't Login?</a></p>
            </span>
            <br>
            
            </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
              <?php
              
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<h3>Latest News</h3>
            
                            <h4>'.$row["lnews1"].'</h4>
                            <h5>'.$row["lnews2"].'</h5>
                            <br>'.$row["lnews3"].'
                            

                            <h3>Useful Links: </h3>
                            <ul>
                              <li><a href="#">'.$row["link1"].'</a></li>
                              <li><a href="#">'.$row["link2"].'</a></li>    
                              <li><a href="#">'.$row["link3"].'</a></li></ul>';
                    
                   
                }
            } 
              ?>
            
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h5>Need to search something? </h5>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="" />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <form action="Login">
            <br> 
            <center><img src="Images/Wesley_Junior_College_Logo2.gif" width="365" height="449" alt="Wesley_Junior_College_Logo2"/></center>

            <br>
          </h4>
        </form>
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
