<?php
  require_once('../model/userModel.php');
  session_start();
  if(isset($_POST['continue'])){

    $id = $_SESSION['id'];
    $user=[
      'id'=>$id,
      'password'=>$_POST['password'],
    ];
    if(deleteUser($user)){
      header('location: ../index.html');
    }
    else{
      echo "<h1>Error try again</h1>";
    }    

  }
?>