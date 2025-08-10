<?php
include("db.php");

if(isset($_POST['submit']))
{
  $eid=$_POST['eid'];
  $photo=$_POST['photo_path'];
  $etitle=$_POST['etitle'];
  $min=$_POST['miniguest'];
  $max=$_POST['maxguest'];
  $date=$_POST['dates'];

   $sql="INSERT INTO addevent VALUES('$eid','$photo','$etitle','$min','$max','$date')";
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
<body>

  <header class="home" id="home" >
   <div class="header-scrolled">
    <div class="logo">
        <h1>CEMS</h1>
        <div class="navbar" >
            <a href="manageEvent.php">back</a>
            
            
        </div>
    </div>
  </div>   
  <div class="header">
    <h1>Add Event</h1>
  </div>
  
  <div class="form-container">
    <form method="POST" action="#">
      <div class="form-control">
        <b>Enter Event number:-</b> <input type="number"  id="eid" name="eid" required>
      </div>  
     <div class="form-control">
        <b>Enter Photo:-</b> <input type="file"  id="photo_path" name="photo_path" required>
      </div>
      <div class="form-control">
     <b> Enter  Event Title:-</b> <input type="text"  id="etitle" name="etitle" required >
      </div>
      <div class="form-control">
     <b> Enter  Minimum Guest:-</b> <input type="text" id="miniguest" name="miniguest" required>
     </div>
     <div class="form-control">
      <b> Enter  Maximum Guest:-</b> <input type="text" id="maxguest" name="maxguest" required>
      </div>
        <div class="form-control">
          <b>Enter Event date:-</b> <input type="date" id="date" name="dates" required>
          </div>
          <input type=submit name="submit" class="submit-box">
      
        </div>
    </form>
  </div>
    </header>
 
 
</body>
</html>
