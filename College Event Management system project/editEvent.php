<?php
include('db.php');

$eid=$_GET['eid'];

$sql="SELECT * FROM addevent where eid=$eid";
$result=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($result);

  $photo=$r['photo_path'];
  $etitle=$r['etitle'];
  $min=$r['miniguest'];
  $max=$r['maxguest'];
  $date=$r['dates'];





  if(isset($_POST['submit']))
  {
    $eid=$_POST['eid'];
    $photo=$_POST['photo_path'];
    $etitle=$_POST['etitle'];
    $min=$_POST['miniguest'];
    $max=$_POST['maxguest'];
    $date=$_POST['dates'];

    $query="UPDATE addevent set eid=$eid,photo_path='$photo',etitle='$etitle',miniguest=$min,maxguest=$max,dates='$date' where eid=$eid";

    $data= mysqli_query($conn,$query);

    if($data){
  // echo "updated succesfully";
    header("location:manageEvent.php");
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
    <h1>Edit Event</h1>
  </div>
  
  <div class="form-container">
    <form method="POST" action="#">
      <div class="form-control">
        <b>Enter Event number:-</b> <input type="number"  id="eid" name="eid" value="<?php echo $r['eid']; ?>" required>
      </div>  
     <div class="form-control">
        <b>Enter Photo:-</b> <input type="file"  id="photo_path" name="photo_path" value="<?php echo $r['photo_path']; ?>" required>
      </div>
      <div class="form-control">
     <b> Enter  Event Title:-</b> <input type="text"  id="etitle" name="etitle" value="<?php echo $r['etitle']; ?>" required >
      </div>
      <div class="form-control">
     <b> Enter  Minimum Guest:-</b> <input type="text" id="miniguest" name="miniguest" value="<?php echo $r['miniguest']; ?>" required>
     </div>
     <div class="form-control">
      <b> Enter  Maximum Guest:-</b> <input type="text" id="maxguest" name="maxguest" value="<?php echo $r['maxguest']; ?>" required>
      </div>
        <div class="form-control">
          <b>Enter Event Date:-</b> <input type="date" id="dates" name="dates" value="<?php echo $r['dates']; ?>" required>
          </div>
          <input type=submit name="submit" class="submit-box">
      
        </div>
    </form>
  </div>
    </header>
 
 
</body>
</html>
