<?php
  session_start();
  $_SESSION['LAST_ACTIVITY']=30;
  header('location: ../view/signup.php');

?>