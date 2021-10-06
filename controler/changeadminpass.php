<?php
 require_once('../model/adminModel.php');
  if(isset($_POST['changepass'])){
  
  $currentpassword = $_POST['currentPassword'];
  $newpassword = $_POST['newPassword'];
  $retypenewpassword = $_POST['retypePassword'];
  session_start();
  $id = $_SESSION['id'];
  $user=[
    'id'=>$id,
    'password'=>$currentpassword,
  ];
  
  
  if ( $currentpassword == "" || $newpassword == "" ||  $retypenewpassword == "") {

    echo "form is empty";

  }
  elseif(currentPasswordCheck($user)){
    $user=[
      'id'=>$id,
      'password'=>$newpassword,
    ];
    if(updateAdminPassword($user)){
      header('location: ./logout.php');
    }
    else{
      echo "process didn't complete";
    }
  }
  else{
    echo "current password didn't match";
  }

}


?>