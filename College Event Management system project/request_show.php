<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEMS</title>
 
  <style>
        .event-container { border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; }
        .past-event { background-color: #f8d7da; }
        .current-event { background-color: #d4edda; }
        .participate-btn { padding: 8px 15px; border: none; cursor: pointer; }
        .disabled-btn { background-color: grey; cursor: not-allowed; }
    </style>
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
 <?php
  include("db.php");

  $sql="SELECT * FROM participants";
  $data= mysqli_query($conn,$sql);

  if(!$data){
    die("Invalid query:");
  }
  $a=array('username','fullname','email','ename','etype','operation');


echo "<table border='1' width='100%' style='margin-top:78px ' >";
?>
   <tr>
     <th width="20%">Usename</th>
     <th width="20%">Full Name</th>
   <th width="20%">Email</th>
   <th width="20%">Event Name</th>
  <th width="20%">Event Type</th>
   </tr>

   <?php
while($r=mysqli_fetch_assoc($data))
{
    echo "<tr  height=33px>
            <td><center>".$r['username']."</center></td>
           <td><center>".$r['fullname']."</center></td>
           <td><center>".$r['email']."</center></td>
           <td><center>".$r['ename']."</center></td>
           <td><center>".$r['etype']."</center></td>
           
          </tr>";
}

?> 

   
</table>


</section>

    
</body>
</html>
