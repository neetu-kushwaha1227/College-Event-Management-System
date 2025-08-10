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
         <a class='btn btn-primary' style="background:palegreen; padding:11px 39px 9px 35px; margin:14px; text-decoration:none;" href='addevent.php'>Add Events</a>
         <?php
          include("db.php");

          $sql="SELECT * FROM addevent";
          $data= mysqli_query($conn,$sql);

          if(!$data){
            die("Invalid query:");
          }
          $a=array('eid','photo_path','etitle','miniguest','maxguest','dates','Operation');
         echo "<table border='1' width='100%' style='margin:34px '>";
          ?>
           <tr>
             <th width="10%">Eid</th>
             <th width="10%">Image</th>
           <th width="20%">Event title</th>
           <th width="10%">Minimum guest</th>
          <th width="20%">Maxmum guest</th>
          <th width="10%">Dates</th>
          <th width="20%">Operation</th>
           </tr>
        <?php
        while($r=mysqli_fetch_assoc($data))
        {
            echo "<tr>
                   <td><center>".$r['eid']."</center></td>
                   <td><center><img src=".$r['photo_path']." height=89px width=100px></center></td>

                   <td><center>".$r['etitle']."</center></td>
                   <td><center>".$r['miniguest']."</center></td>
                   <td><center>".$r['maxguest']."</center></td>
                   <td><center>".$r['dates']."</center></td>
                   <td>
                      <button class='btn btn-primary' style='background:drakgray; color:white; text-decoration:none; padding:9px 34px 7px 34px; '><a  href='editevent.php?eid=".$r['eid']."'>Edit</a></button>
                       <button class='btn btn-danger' style='background:red; color:white; text-decoration:none;  padding:9px 34px 7px 34px;'><a  href='deleteevent.php?eid=".$r['eid']."'>Delete</a></button>
                   </td>
                  
                  </tr>";
        }

        ?> 
        </table>


  </section>
</body>
</html>
