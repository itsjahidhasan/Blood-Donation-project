<?php
require_once('../model/userModel.php');
session_start();
if(isset($_POST['deContinue'])){

  $id = $_SESSION['id'];
    $user=[
      'id'=>$id,
      'status'=>"deactivated",
    ];
    if(updateUserStatus($user)){
      header('location: ../view/user/userpanel.php');
    }
    else{
      echo "<h1>Error try again</h1>";
    }

}
elseif(isset($_POST['acContinue'])){
  $id = $_SESSION['id'];
  $user=[
    'id'=>$id,
    'status'=>"",
  ];
  if(updateUserStatus($user)){
    header('location: ../view/user/userpanel.php');
  }
  else{
    echo "<h1>Error try again</h1>";
  }
}
?>