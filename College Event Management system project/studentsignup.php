
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <link rel="stylesheet" href="login.css">
</head>
<body>

    <header class="home" id="home" >
        <div class="header-scrolled">
         <div class="logo">
             <h1>CEMS</h1>
             <div class="navbar fixed-top" >
                 <a href="#home">Home</a>
                 
                 
             </div>
         </div>
       </div>
    </header>


     <!--Signup page start-->
     <div class="login">
        <div class="container">
            <div class="row">
               <div class="card">
                 <div class="card-header">
                    <h1>Signup form</h1>
                 </div>
                  <!--Form start-->
                 <div class="card-body">
                     <form method="POST" action="#">
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" id="username" class="form-control" name="username" size="20" placeholder="username" required>
                    
                        </div>
                        <div class="form-group">
                            <label>Full Name:</label>
                            <input type="text" id="fullname" class="form-control" name="fullname" size="20" placeholder="name" required>
                    
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" id="email" class="form-control" name="email" size="20" placeholder="email" required>
                    
                        </div>
                        <div class="form-group">
                            <label>Course name:</label>
                            <input type="text" id="course" class="form-control" name="course" size="20" placeholder="Course name" required>
                    
                        </div>
                        <div class="form-group">
                            <label>semester:</label>
                            <input type="text" id="sem" class="form-control" name="sem" size="20" placeholder="sem" required>
                    
                        </div>
                        <div class="form-group">
                            <label>Contact number:</label>
                            <input type="text" id="pno" class="form-control" maxlength="10" name="pno" size="20" placeholder="phone no" required>
                    
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" class="form-control" name="password" minlength="8" placeholder="password" required>
                      
                        </div>
                        <div class="form-group">
                            <label for="password">Conform Password</label>
                            <input type="password" id="password" class="form-control" name="conform password" minlength="8" placeholder="password" required>
                         
                        </div>
                        <!--<div class="form-group">
                           <input type="checkbox" id="showpassword" onclick="myfunction()"><label>Show password</label>
                        </div>-->
                        <div class="signup">
                            <p>we have already account?<a href="studentLogin.php">Login</a></p>
                        </div>
                        
                        <input type="submit" name="submit" value="Register" >
                       </form>
                   </div>
                 <!--Form end-->
               </div>
            </div>
        </div>
    </div>
    <!--login page end-->
    
<!--password script-->
    <script type="text/javascript">
 
 let password= document.getElementById("password");
 let showpassword= document.getElementById("showpassword");
 showpassword.onclick = function(){
  if(showpassword.checked)
  {
    password.type = 'text';
  }
  else
  {
    password.type = 'password';
  }
  
 }


</script>
    
</body>
</html>


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