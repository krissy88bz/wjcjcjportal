<!DOCTYPE HTML>
<!This is the html file of the grade page
    this page can be access by going to the home click grade>
<html>

<head>
  <title>Student | Dash Board | WJC</title>
  <script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
    
    
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="test page.html"><span class="logo_colour"> Wesley Junior College</span></a></h1>
          <p2>Student Dash Board</p2>
         
          <br>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
            
        
            <li><a href="index.html">Home</a></li>
           <li><a href="examples.html">Main Menu</a></li>
          <li><a href="Classoffered.html">Courses</a></li>
           <li class="selected"><a href="GradeTab.html">Grades</a></li>
            <li><a href="Bill test.html">Bill</a></li>
             <li><a href="Transcript.html">Transcript</a></li>
             <li><a href="test page.html">Registration Tools</a></li>
            
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

        <form  id="Student1Networking_Table" action="post">

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wjcjcportal";

$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM student1");

echo "<table border='1'>
<tr>
<th>Subject</th>
<th>Class Code</th>
<th>Assessment</th>
<th>Description</th>
<th>Score</th>
<th>Total</th>
<th>Percentage</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['SubjectName'] . "</td>";
echo "<td>" . $row['ClassCode'] . "</td>";
echo "<td>" . $row['Assessment'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
echo "<td>" . $row['Score'] . "</td>";
echo "<td>" . $row['Total'] . "</td>";
echo "<td>" . $row['Percentage'] . "</td>";


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
