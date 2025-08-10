<?php
  include('db.php');

  if(isset($_GET['etitle']))
  {
    $etitle=$_GET['etitle'];

    $sql="DELETE FROM `eventtype` WHERE etitle='$etitle'";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
       // echo "delete successfully";
       header("location:manageEvent.php");
    }
    else{
        echo "not deleted";
    }
  }
?>