<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_GET['deleteid']))
  {
    $eid=$_GET['deleteid'];

    $query=mysqli_query($con, "update  tblservices set is_deleted='Y' where ID='$eid' ");
    if ($query) {
     header('location:manage-services.php?result=success');
     }
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
  ?>
