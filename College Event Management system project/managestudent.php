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
  <header class="home" id="home" >
   <div class="header-scrolled">
    <div class="logo">
        <h1><a href="admin.php" style="color: white; text-decoration:none;">CEMS</a></h1>
        welcome:<?php
          
          echo 'admin';
        
    
        ?>
        <div class="navbar" >
            <a href="admin.php">Home</a>
            <a href="manageEvent.php">Manage Event</a>
            <a href="manageEventType.php">Manage Event Type</a>
            <a href="managestudent.php">Manage student</a>
            <a href="request_show.php">Participant list</a>
            <a href="homepage.php">Logout</a>
            
            
        </div>
    </div>
  </div>    
 
  <section>
 
         <div class="add" style="padding-top: 41px;">
         <a class='btn btn-primary' style="background:palegreen; padding:11px 39px 9px 35px; margin:14px; text-decoration:none;" href='addstudent.php'>Add Events</a>
         <?php
          include("db.php");

          $sql="SELECT * FROM signup";
          $data= mysqli_query($conn,$sql);

          if(!$data){
            die("Invalid query:");
          }
          $a=array('username','fullname','email','course','sem','pno','Operation');
         echo "<table border='1' width='100%' style='margin:34px '>";
          ?>
           <tr>
             <th width="10%">Username</th>
             <th width="10%">Full Name</th>
           <th width="20%">Email ID</th>
           <th width="10%">Course Name</th>
          <th width="20%">Semester</th>
          <th width="10%">Contact</th>
          <th width="20%">Operation</th>
           </tr>
        <?php
        while($r=mysqli_fetch_assoc($data))
        {
            echo "<tr>
                   <td><center>".$r['username']."</center></td>
                   <td><center>".$r['fullname']."</center></td>
                   <td><center>".$r['email']."</center></td>
                   <td><center>".$r['course']."</center></td>
                   <td><center>".$r['sem']."</center></td>
                   <td><center>".$r['pno']."</center></td>
                   <td>
                      <button class='btn btn-primary' style='background:drakgray; color:white; text-decoration:none; padding:9px 34px 7px 34px; '><a  href='editstudent.php?username=".$r['username']."'>Edit</a></button>
                       <button class='btn btn-danger' style='background:red; color:white; text-decoration:none;  padding:9px 34px 7px 34px;'><a  href='deletestudent.php?username=".$r['username']."'>Delete</a></button>
                   </td>
                  
                  </tr>";
        }

        ?> 
        </table>


  </section>
</body>
</html>
