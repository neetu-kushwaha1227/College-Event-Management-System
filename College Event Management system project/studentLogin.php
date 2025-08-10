<?php
  include("db.php");

  if(isset($_POST['submit']))
  {
    session_start();
    
     $username= $_POST['username'];
      $password= $_POST['password'];

      $query= "select * from signup where username= '$username' && password='$password' ";;

      $data= mysqli_query($conn,$query);
      
      $total= mysqli_num_rows($data);
      if($total == 1)
     {
             $_SESSION['username']=$username;
      header("location:student.php");
     }
     else{
        echo "login failed";
     }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="login.css">


</head>
<body>

    <header class="home" id="home" >
        <div class="header-scrolled">
         <div class="logo">
             <h1>CEMS</h1>
             <div class="navbar fixed-top" >
                 <a href="homepage.php">Back</a>
                 
                 
             </div>
         </div>
       </div>
    </header>

        <!--Donor Login page start-->
        <div class="login">
            <div class="container">
                <div class="row">
                   <div class="card">
                    <div class="card-header">
                        <h1>Student Login</h1>
                    </div>
                    <!--Form start-->
                    <div class="card-body">
                        <form action="#" method="POST" id="loginform">
                            <div class="form-group">
                                <label>username:</label>
                                <input type="username" id="username" class="form-control" name="username" size="20" placeholder="Enter a Username"  required>
                        
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" id="password" class="form-control" name="password" minlength="8" placeholder="Enter a password" required>
                        
                            </div>
                            <input type="checkbox" id="showpassword" onclick="myfunction()" ><label>Show Password</label>
                            <div class="signup">
                                <p>Don't have an account?<a href="studentsignup.php">Register</a></p>
                            </div>
                            <input type="submit" name="submit" value="login">
    
                        </form>
                    </div>
                    <!--Form end-->
                   </div>
                </div>
            </div>
        </div>
        <!--login page end-->


    
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