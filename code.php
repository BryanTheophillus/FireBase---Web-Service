<?php
session_start();
include('dbcon.php');

if(isset($_POST['storing-allnamadata'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];

  $postData = [  
  'fname'=>$fname,
  'lname'=>$lname,
  'uname'=>$uname
  ];
  $ref_table ="Data";
  $postResult = $database->getReference($ref_table)->push($postData);
  if($postResult) {
    $_SESSION['status'] = "Data Has Been Added";
    header("location: index.php");
  } else {
    $_SESSION['status'] = "Data Not Added";
    header("location: index.php");
  }
}

?>