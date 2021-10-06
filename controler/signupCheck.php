<?php

require_once('../model/userModel.php');
if(isset($_POST['join'])){

  $name = $_POST['name'];
  $phoneNum1 = $_POST['phone'];
  $phoneNum2 = $_POST['phone2'];
  $password = $_POST['password'];
  $retypePassword = $_POST['retypePassword'];
  $bloodgrp = $_POST['bloodgrp'];
  $district = $_POST['district'];
  $thana = $_POST['thana'];
  $union = $_POST['union'];
  $village = $_POST['village'];
  if ( $name == "" || $phoneNum1 == "" || $password==""   || $retypePassword == ""  ||  $district == "" || $thana =="") {

    echo "form is empty";

  }
  elseif($bloodgrp == "none"){
    $errorMsg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <div class="container" align="center"><strong>Blood Group did not selected!</strong> Please select your blood group.</div>
                  
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                session_start();
                $_SESSION['errorMsg']=$errorMsg;
                $_SESSION['LAST_ACTIVITY'] = time();
                header('location: ../view/signup.php');
  }
  else{
    $user=[
      'name'=>$name, 
      'phoneNum1'=> $phoneNum1,
      'phoneNum2'=> $phoneNum2,
      'password'=> $password,
      'bloodgrp'=> $bloodgrp,
      'district' => $district,
      'thana' => $thana,
      'union' => $union,
      'village' => $village,
    ];
    // database goes here
    $flag = insertUser($user);
    
    if($flag){
      session_start();
      session_destroy();
      header('location: ../index.html');
    }
    else{
      $errorMsg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>There is some error completing signup</strong> Try again.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                session_start();
                $_SESSION['errorMsg']=$errorMsg;
                $_SESSION['LAST_ACTIVITY'] = time();
                header('location: ../view/signup.php');
    }

  }
}
elseif(isset($_POST['add_donner'])){
    $name = $_POST['donnername'];
    $phoneNum1 = $_POST['donnerphone'];
    $phoneNum2 = $_POST['donnerphone2'];
    $password = $_POST['donnerpassword'];
    $retypePassword = $_POST['retypedonnerPassword'];
    $bloodgrp = $_POST['donnerbloodgrp'];
    $district = $_POST['donnerdistrict'];
    $thana = $_POST['donnerthana'];
    $union = $_POST['donnerunion'];
    $village = $_POST['donnervillage'];
    

    if ( $name == "" || $phoneNum1 == "" || $password==""   || $retypePassword == ""  ||  $district == "" || $thana =="") {

      echo "form is empty";

    }
    elseif($bloodgrp == "none"){
      echo "Please select blood group";
    }
    else{
      $user=[
        'name'=>$name, 
        'phoneNum1'=> $phoneNum1,
        'phoneNum2'=> $phoneNum2,
        'password'=> $password,
        'bloodgrp'=> $bloodgrp,
        'district' => $district,
        'thana' => $thana,
        'union' => $union,
        'village' => $village,
      ];
      
      $flag = insertUser($user);
      
      if($flag){
            header('location: ../view/admin/adminpanel.php');
      }
          
      else{
            echo "Donner did not added";
      }
    }
    
}
?>