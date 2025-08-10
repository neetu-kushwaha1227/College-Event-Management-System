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
<?php
    include("db.php");
    //Session start
     session_start();
   ?>
  <header class="home" id="home"  style="height: 22vh;">
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
  
  </header>
   
 <?php
  include("db.php");

  $sql="SELECT fullname,email,ename,etype FROM participants ";
  $data= mysqli_query($conn,$sql);

  if(!$data){
    die("Invalid query:");
  }
  $a=array('fullname','email','ename','etype');
  echo "<table border='1' width='100%' >";
  ?>
   <tr>
     <th width="20%">Full Name</th>
    <th width="20%">Email</th>
    <th width="20%">Event name</th>
    <th witdth=20>EType</th>

   </tr>
<?php
while($r=mysqli_fetch_assoc($data))
{
    echo "<tr>
           <td><center>".$r['fullname']."</center></td>
           <td><center>".$r['ename']."</center></td>
           <td><center>".$r['email']."</center></td>
           <td><center>".$r['etype']."</center></td>
           
          </tr>";
}

?> 
</table>




    
</body>
</html>