<?php
include('db.php');

$eid=$_GET['eid'];

$sql="SELECT * FROM eventtype where eid=$eid";
$result=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($result);

  $etype=$r['etype'];
  $st=$r['starttime'];
  $et=$r['endtime'];
  $price=$r['price'];
  $ld=$r['lastdate'];





  if(isset($_POST['submit']))
  {
    $etitle=$_POST['etitle'];
    $etype=$_POST['etype'];
    $st=$_POST['starttime'];
    $et=$_POST['endtime'];
    $price=$_POST['price'];
    $ld=$_POST['lastdate'];

    $query="UPDATE addevent set etitle=$eid,etype='$etype',starttime='$st',endtime=$et,price=$price,lastdate='$ld' where etitle=$etitle";

    $data= mysqli_query($conn,$query);

    if($data){
  // echo "updated succesfully";
       header("location:manageEventType.php");
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
        <b>Select Event Title:-</b>  <select name="etitle" id="etitle" value="<?php echo $r['etitle']; ?>">
                                         <option value=" "></option>
                                         <option value="fresher party">fresher party</option>
                                         <option value="sports day">Sports Day</option>
                                      </select>
      </div>
      <div class="form-control">
     <b> Enter  Event Type:-</b> <textarea name="etype" id="etype"  value="<?php echo $r['etype']; ?>" required ></textarea>
      </div>
      <div class="form-control">
     <b> Enter  Start Time:-</b> <input type="time" name="starttime" id="starttime"  value="<?php echo $r['starttime']; ?>" required>
     </div>
     <div class="form-control">
      <b> Enter  End Time:-</b> <input type="time" name="endtime" id="endtime" value="<?php echo $r['endtime']; ?>" required>
      </div>
      <div class="form-control">
        <b> Enter  Price:-</b> <input type="text" name="price" id="price" value="<?php echo $r['price']; ?>" required>
        </div>

      <div class="form-control">  
      <b>Last Registration Date:-</b> <input type="date" name="lastdate" id="lastdate" value="<?php echo $r['lastdate']; ?>" required>
      </div>
          <input type=submit name="submit" class="submit-box">
      
        </div>
    </form>
  </div>
    </header>
 
 
</body>
</html>
