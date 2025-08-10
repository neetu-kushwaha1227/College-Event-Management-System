<?php
include("db.php");

if(isset($_POST['Register']))
{
  $un=$_POST['username'];
  $fn=$_POST['fullname'];
  $email=$_POST['email'];
  $ename=$_POST['ename'];
  $etype=$_POST['etype'];

   $sql="INSERT INTO participants (username,fullname, email,ename,etype)  VALUES ('$un','$fn','$email','$ename','$etype')";
   $result=mysqli_query($conn,$sql);



  if($result)
  {
   
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location: eventshow.php");


  }
  else
  {
     $conn->error;
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEMS</title>

  <link rel="stylesheet" href="event.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" >

<body>

  <header class="home" id="home" >
   <div class="header-scrolled">
    <div class="logo">
        <h1>CEMS</h1>
        <div class="navbar" >
            <a href="eventshow.php">Back</a>
            
            
        </div>
    </div>
  </div>   
  <div class="header">
    <h1>Participates form</h1>
  </div>
  
  <div class="form-container">
    <form method="POST" action="#">
      <div class="form-control">
        <b>Enter username:-</b> <input type="text"  id="username" name="username" required>
      </div>  
     <div class="form-control">
        <b>Enter full Name:-</b> <input type="text"  id="fullname" name="fullname" required>
      </div>
      <div class="form-control">
     <b> Enter Email:-</b> <input type="text"  id="email" name="email" required >
      </div>
      <div class="form-control">
     <b> Enter  Event name:-</b> <input type="text" id="ename" name="ename" required>
     </div>
     <div class="form-control">
     <b> Enter  Event Type:-</b> <input type="text" id="etype" name="etype" required>
     </div>
     
          <input type=submit name="Register" value='Register' class="submit-box" >
      
        </div>
    </form>
  </div>
    </header>
 
 
</body>
</html>
