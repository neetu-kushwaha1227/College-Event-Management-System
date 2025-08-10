
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEMS</title>

  <link rel="stylesheet" href="adminstyle.css">
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
        <h1>CEMS</h1>
        welcome:<?php
          
          echo 'admin';
        
    
        ?>
        
        <div class="navbar" >
            <a href="admin.php">Home</a>
            <a href="manageEvent.php">Manage Event</a>
            <a href="manageEventType.php">Manage Event type</a>
            <a href="managestudent.php">Manage student</a>
            <a href="request_show.php">Participant list</a>
            <a href="homepage.php">Logout</a>
            
            
        </div>
    </div>
  </div>    
    </header>
  <!--Navbar End-->
</body>
</html>