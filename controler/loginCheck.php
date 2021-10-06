<?php
require_once('../model/userModel.php');
require_once('../model/adminModel.php');
// 
// 
if(isset($_POST['login'])){
  $phonenumber = $_POST['number'];
  $password = $_POST['password'];
  if($phonenumber == "" || $password == ""){
    echo "from is empty";
  }
  else{
    $flag = userLogin($phonenumber, $password);
    if($flag){
      session_start();
      $_SESSION['id'] = $flag[0]['id'];
      $_SESSION['status']=true;
      header('location: ../view/user/userpanel.php');
    }
    else{
      $flag2 = adminLogin($phonenumber, $password);
      if($flag2){
        session_start();
        $_SESSION['id'] = $flag2[0]['id'];
        $_SESSION['status']=true;
        header('location: ../view/admin/adminpanel.php');
      }
      else{
        echo "Wrong values";
      }
    }
  }
}



?>