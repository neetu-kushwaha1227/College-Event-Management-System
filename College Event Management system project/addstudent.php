<?php
include("db.php");

if(isset($_POST['submit']))
{

$un=$_POST['username'];
$fname=$_POST['fullname'];
$email=$_POST['email'];
$course=$_POST['course'];
$semester=$_POST['sem'];
$pno=$_POST['pno'];
$password=$_POST['password'];

$sql="INSERT INTO signup VALUES('$un','$fname','$email','$course','$semester','$pno','$password')";
$result=mysqli_query($conn,$sql);

if($result)
{
  echo "successfully stored in database.";

}
else
{
  echo "failed";
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
</head>
<body>

  <header class="home" id="home" >
   <div class="header-scrolled">
    <div class="logo">
        <h1>CEMS</h1>
        <div class="navbar" >
            <a href="managestudent.php">Back</a>
            
            
        </div>
    </div>
  </div>  
  <div class="header">
    <h1>Add Student</h1>
  </div>
  
  <div class="form-container">
    <form method="POST" action="#">
      <div class="form-control">
        <b>Enter Username:-</b> <input type="text"  id="username" name="username" required>
      </div>  
     <div class="form-control">
        <b>Enter Full Name:-</b> <input type="text"  id="fullname" name="fullname" required>
      </div>
      <div class="form-control">
     <b> Enter  Email:</b> <input type="email"  id="email" name="email" required >
      </div>
      <div class="form-control">
     <b> Enter Course name:-</b> <input type="text" id="course" name="course" required>
     </div>
     <div class="form-control">
      <b> Enter  Semester:-</b> <input type="text" id="sem" name="sem" required>
      </div>
        <div class="form-control">
          <b>Enter Contact number:-</b> <input type="text" id="pno" name="pno" required>
          </div>
          <div class="form-control">
          <b>Enter Password:-</b> <input type="password" id="password" name="password" required>
          </div>
          <input type=submit name="submit" class="submit-box">
      
        </div>
    </form>
  </div>
    </header>
 

</body>
</html>