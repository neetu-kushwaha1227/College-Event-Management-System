<?php
include("db.php");

if(isset($_POST['submit']))
{
  $etitle=$_POST['etitle'];
  $etype=$_POST['etype'];
  $st=$_POST['starttime'];
  $et=$_POST['endtime'];
  $price=$_POST['price'];
  $ld=$_POST['lastdate'];

   $sql="INSERT INTO eventtype VALUES('$etitle','$etype','$st','$et','$price','$ld')";
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
            <a href="manageEventType.php">Back</a>
            
            
        </div>
    </div>
  </div>   
  <div class="header">
    <h1>Add Event Type</h1>
  </div>
  
  <div class="form-container">
    <form method="POST" action="#">
     <div class="form-control">
        <b>Select Event Title:-</b>  <select name="etitle" id="etitle">
                                         <option value=" "></option>
                                         <option value="fresher party">fresher party</option>
                                         <option value="sports day">Sports Day</option>
                                      </select>
      </div>
      <div class="form-control">
     <b> Enter Event type:-</b> <textarea name="etype" id="etype" required ></textarea>
      </div>
      <div class="form-control">
     <b> Enter Start time:-</b> <input type="time" name="starttime" id="starttime" required>
     </div>
     <div class="form-control">
      <b> Enter End time:-</b> <input type="time" name="endtime" id="endtime" required>
      </div>
      <div class="form-control">
        <b> Enter Price:-</b> <input type="text" name="price" id="price" required>
        </div>

      <div class="form-control">  
      <b>Last Registration Date:-</b> <input type="date" name="lastdate" id="lastdate" required>
      </div>
          <input type=submit name="submit" class="submit-box">
      
        </div>
    </form>
  </div>
    </header>
 
 
</body>
</html>
