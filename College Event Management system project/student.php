<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEMS</title>

  <link rel="stylesheet" href="student.css">
  <link rel="stylesheet" href="responsive.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" >
<body>
<?php
    include("db.php");
    //Session start
     session_start();
   ?>
  <header class="home" id="home" >
   <div class="header-scrolled">
     <div class="logo">
          <h1><a href="student.php" style="color: white; text-decoration:none;">CEMS</a></h1>
          welcome:<?php
          
          echo $_SESSION['username'];
        
    
        ?>
         <div class="navbar fixed-top" >
              <a href="student.php">Home</a>
              <a href="eventshow.php">Event show</a>
              <a href="student_status.php">Participant Event</a>
              <a href="editstudprofile.php">change profile</a>
              <a href="homepage.php">Logout</a>
              
            </div>
        </div>
    </div>

    <div class="banner_wraper">
        <div class="banner">
          <div class="slogan">
            <h4>Welcome to college events</h4>
            <p>Best Events</p>
      
          </div>
        </div>
      </div>
       

    </header>
</body>
</html>