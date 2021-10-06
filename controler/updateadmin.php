<?php
  require_once('../model/adminModel.php');
  if(isset($_POST['edit_info'])){
    $name = $_POST['name'];
    $phoneNum1 = $_POST['phone'];
    $phoneNum2 = $_POST['phone2'];
    $bloodgrp = $_POST['bloodgrp'];
    $district = $_POST['district'];
    $thana = $_POST['thana'];
    $union = $_POST['union'];
    $village = $_POST['village'];

    if ( $name == "" || $phoneNum1 == "" ||  $district == "" || $thana =="") {

      echo "form is empty";

    }
    elseif($bloodgrp == ""){
      echo "Please select blood group";
    }
    else{
      session_start();
      $id = $_SESSION['id'];
      $user=[
        'id'=>$id,
        'name'=>$name, 
        'phoneNum1'=> $phoneNum1,
        'phoneNum2'=> $phoneNum2,
        'bloodgrp'=> $bloodgrp,
        'district' => $district,
        'thana' => $thana,
        'union' => $union,
        'village' => $village,
      ];
      // database goes here
      $flag = updateAdminInfo($user);
      
      if($flag){
        header('location: ../view/admin/adminpanel.php');
      }
      else{
        echo "Update didn't complete";
      }

    }

  }

?>