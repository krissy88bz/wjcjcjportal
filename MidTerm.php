<!DOCTYPE HTML>
<!This is the html file of the grade page
    this page can be access by going to the home click grade>
<html>

<head>
  <title>Student | Mid-Term | WJC</title>
  <script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
    
    
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="studentdashboard.php"><span class="logo_colour"> Wesley Junior College</span></a></h1>
          <p2>Student Dash Board</p2>
         
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
            <!-- insert your side bar items here -->
            <h3>Latest News</h3>
            <h4>First WJCJC Pageant</h4>
            <h5>Place: Bird's Isle</h5>
            <h5>Time: 8:00 pm -10:00 pm</h5>
            <p>Come out and support!!<br /><a href="#">Read more</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="#">link 1</a></li>
              <li><a href="#">link 2</a></li>
              <li><a href="#">link 3</a></li>
              <li><a href="#">link 4</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Search</h3>
            
              <p>
                <input class="search" type="text" name="search_field" value="Enter keywords....." />
                <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
              </p>  
            
               
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
     <div id="content">
     
        <!-- insert the page content here -->
        <h1>Overview</h1>

        <form  id="CurrentGrade_Table" action="post">

 <?php
$servername = "localhost";
$username = "root";
$password = "Password13";
$dbname = "wjcjcportal";

$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM courses");

echo "<table border='1'>
<tr>
<th>Subject</th>
<th>Lecturer</th>
<th>Class Code</th>
<th>Letter Grade</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['SubjectName'] . "</td>";
echo "<td>" . $row['TeacherName'] . "</td>";
echo "<td>" . $row['ClassCode'] . "</td>";
echo "<td>" . $row['LetterGrade'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

       
        
      <div id="content">
    <input type="button" onClick="window.print()"  value="Print" class="button"/>
           <br>
        
</div></div>
 
       </div>
        
    
 
 <!----end------Insert to your webpage where you want to display the slider-->

        
      </div>
       <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Login</a> | <a href="examples.html">Sign Up</a></p>
      <p>Copyright &copy; Wesley Junior College | Created By: Kristen Gentle - krissy88bz@gmail.com</a></p>
    </div>
  
</body>
</html>
