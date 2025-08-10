<?php
include('db.php');

        //  echo $_SESSION['username'];
        
        session_start();
//$un=$_GET['username'];
$username= $_SESSION['username'];
//$username=$_GET['username'];

$sql="SELECT username,fullname,email,course,sem,pno FROM signup where username='$username'";
$result=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($result);

  $fullname=$r['fullname'];
  $email=$r['email'];
  $cn=$r['course'];
  $sem=$r['sem'];
  $pno=$r['pno'];





  if(isset($_POST['submit']))
  {
    $un=$_POST['username'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $cn=$_POST['course'];
    $sem=$_POST['sem'];
    $pno=$_POST['pno'];

    $query="UPDATE signup set username='$un',fullname='$fullname',email='$email',course='$cn',sem='$sem',pno='$pno'";

    $data= mysqli_query($conn,$query);

    if($data){
  // echo "updated succesfully";
    header("location:student.php");
    }
    else{
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
        <h1><a href="student.php" style="color: white; text-decoration:none;">CEMS</a></h1>
        welcome:<?php
          
          echo $_SESSION['username'];
        
    
        ?>
        <div class="navbar" >
            <a href="student.php">Back</a>
            
            
        </div>
    </div>
  </div>  
  <div class="header">
    <h1>Edit your Profile</h1>
  </div>
  
  <div class="form-container">
    <form method="POST" action="#">
      <div class="form-control">
        <b>Enter Username:-</b> <input type="text"  id="username" name="username" value="<?php echo $r['username']; ?>" required>
      </div>  
     <div class="form-control">
        <b>Enter Full Name:-</b> <input type="text"  id="fullname" name="fullname" value="<?php echo $r['fullname']; ?>" required>
      </div>
      <div class="form-control">
     <b> Enter  Email:</b> <input type="email"  id="email" name="email" value="<?php echo $r['email']; ?>" required >
      </div>
      <div class="form-control">
     <b> Enter Course name:-</b> <input type="text" id="course" name="course" value="<?php echo $r['course']; ?>" required>
     </div>
     <div class="form-control">
      <b> Enter  semester:-</b> <input type="text" id="sem" name="sem" value="<?php echo $r['sem']; ?>" required>
      </div>
        <div class="form-control">
          <b>Enter Contact number:-</b> <input type="text" id="pno" name="pno"  value="<?php echo $r['pno']; ?>" required>
          </div>
          <input type=submit name="submit" class="submit-box">
      
        </div>
    </form>
  </div>
    </header>
 

</body>
</html>