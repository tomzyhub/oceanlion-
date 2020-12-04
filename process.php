<?php

session_start();
include_once 'dbh.inc.php';

if(isset($_GET['delete'])){
  $id= $_GET['delete'];
  $conn->query("DELETE FROM clients WHERE ID ='$id' ") or die($mysqli->error($conn));

  $_SESSION['message'] = "client deleted successful !";
  $_SESSION['msg_type'] ="danger";
};

header("location: dashboard.php");






  




