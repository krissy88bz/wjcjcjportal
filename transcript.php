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

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Student | Transcript | WJC</title>
  <script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        
         <?php
                                    if(!isset($_SESSION['email'])) // If session is not set that redirect to Login Page                            {
                                         header("Location:index.php");  
                                    
                                         $email =  $_SESSION['email'];
                                         
                                    $q1 =  "SELECT DISTINCT fname, lname FROM login ";
                                    
                                    if ($results1 = mysqli_query($conn, $q1)) {

                                        /* fetch associative array */
                                        while ($row1 = mysqli_fetch_assoc($results1)) {
                                         echo " <div align='right'><h4><b>&nbsp;<br />You are logged in as: ". $row1["fname"]." ". $row1["lname"]." </b> <a href='logout.php'>  Logout</a></h4></div>";
                                         }

                                    }
                                      
                              ?>    
           <div id="logo_text"> 
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="studentdashboard.php"><span class="logo_colour"> Wesley Junior College</span></a></h1>
          <p2>Student Transcript<br></p2>
         <br><br>
          <br>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
            
        
            <li><a href="studentdashboard.php">Home</a></li>
            <li><a href="mainmenu.php">Main Menu</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="grades.php">Grades</a></li>
            <li><a href="bill.php">Bill</a></li>
            <li><a href="transcript.php">Transcript</a></li>
            <li><a href="registrationtools.php">Registration Tools</a></li>
            
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
            <?php
              
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { 
                    
                     echo '<h3>Announcements</h3>
            
                            <h4>'.$row["lnews1"].'</h4>
                            <h5>'.$row["lnews2"].'</h5>
                            <br>'.$row["lnews3"].' ';
                ?>            
            
            
            
           <br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
              <?php
              
          
                    echo '  <h3>Useful Links: </h3>
                            <ul>
                              <li><a href="#">'.$row["link1"].'</a></li>
                              <li><a href="#">'.$row["link2"].'</a></li>    
                              <li><a href="#">'.$row["link3"].'</a></li>
                              <li><a href="#">'.$row["link4"].'</a></li></ul>';
                    
                   
                }
            } 
              ?>
            
          </div>
            <div class="sidebar_item">
            <h3>WJC Social Life</h3>
            <ul>
              <li><a href="#">Pictures</a></li>
              <li><a href="#">Upcoming Events</a></li>
          
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            <form method="post" action="#" id="search_form">
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>
            </form>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
     
        
        
        <!----begin------Insert to your webpage where you want to display the slider-->

        
        
        
        
 <br>
 
      </div>
    </div>
     <div id="content_footer"></div>
    <div id="footer">
        <p><a href="studentdashboard.php">Home</a> | <a href="mainmenu.php">Main Menu</a> | <a href="courses.php">Courses</a> | <a href="grades.php">Grades</a> | <a href="bill.php">Bill | <a href="transcript.php">Transcript | <a href="registrationtools.php">Registration Tools | <a href="contact.php">Contact</a></p>
      <p>Copyright &copy; Wesley Junior College | Design by Kristen Gentle </a></p>
    </div>
  </div>
</body>
</html>
