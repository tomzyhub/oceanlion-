

<?php
session_start();
include_once 'dbh.inc.php';




$ID =$_POST['ID'];
$sName =$_POST['sName'];
$sAD =$_POST['sAD'];
$sE =$_POST['sE'];
$spn =$_POST['spn'];
$rN =$_POST['rN'];
$rA =$_POST['rA'];
$rpN =$_POST['rpN'];
$rE =$_POST['rE'];
$pf =$_POST['pf'];
$pt =$_POST['pt'];
$dd =$_POST['dd'];
$ad =$_POST['ad'];
$cl =$_POST['cl'];
$rmk =$_POST['rmk'];


  $query = "INSERT INTO clients(ID,sName,sAD,sE,spn,rN,rA,rpN,rE,pf,pt,dd,ad,cl,rmk)
   VALUES('$ID','$sName','$sAD','$sE','$spn','$rN','$rA','$rpN','$rE','$pf','$pt','$dd','$ad','$cl','$rmk');";
  $query_run = mysqli_query($conn,$query) or die(mysqli_error($query_run));
  if($query_run){

    $_SESSION['message'] = "client saved successful !";
  $_SESSION['msg_type'] ="success";
    
  }
  else{
    $_SESSION['message'] = "client not saved  !";
  $_SESSION['msg_type'] ="danger";
  };

  header("location: dashboard.php");
  




