<?php
  include('db.php');

  if(isset($_GET['username']))
  {
    $username=$_GET['username'];

    $sql="DELETE FROM signup where username=$username";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
       // echo "delete successfully";
        header("location:managestudent.php");
    }
    else{
        echo "not deleted";
    }
  }
?>
