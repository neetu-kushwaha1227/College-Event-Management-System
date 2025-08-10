<?php
  include('db.php');

  if(isset($_GET['eid']))
  {
    $eid=$_GET['eid'];

    $sql="DELETE FROM addevent where eid=$eid";
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