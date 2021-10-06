<?php
  require_once('../../model/userModel.php');
	session_start();
	if(isset($_SESSION['status'])){
    $id = $_SESSION['id'];
    $user=[
      'id'=>$id,
    ];
    $userifo = getUserInfo($user);
    $i=0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
  <title>Blood Donation</title>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--  CSS properties -->
  <style>
    body {
      background-color: antiquewhite;
    }

    .paddingright {
      padding-right: 1%;
    }

    .paddingtop {
      padding-top: 1%;
    }

    .modelButtonsize {
      width: 150px;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./userpanel.html">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./userpanel.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="../../controler/logout.php" method="POST">

        <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
      </form>

    </div>
  </nav>
  <!-- profile info table start-->
  <!-- ==================================================================================================
======================================================================================================= -->
  <div id="profileinfo" class="container"></div>

  <!-- profile info table end-->

  <div class="container">
    <!-- Edit profile start -->
    <!-- Button trigger modal -->
    <div class="float-left paddingright paddingtop">
      <button type="button" class="btn btn-primary float-left modelButtonsize" data-toggle="modal"
        data-target="#editProfileModal">
        Edit Profile
      </button>
    </div>


    <!-- Modal -->
    <form action="../../controler/updateuser.php" method="post">
      <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Change information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <h6>Full Name:</h6>
                <input type="text" class="form-control" name="name" id="inputName" value="<?php echo $userifo[$i]['name'];?>" required>

              </div>
              <div class="form-group">
                <h6>Phone Number:</h6>
                <input type="tel" class="form-control" name="phone" id="inputNumber" value="<?php echo $userifo[$i]['phoneNum'];?>" required>

              </div>

              <div class="form-group">
                <h6>Second Phone Number(Optional):</h6>
                <input type="tel" class="form-control" name="phone2" id="input2ndNumber"
                value="<?php echo $userifo[$i]['phoneNum2'];?>">

              </div>


              <h6>Select Blood Group:</h6>
              <select class="form-control" name="bloodgrp">
                <option value="<?php echo $userifo[$i]['bloodgrp'];?>"><?php echo $userifo[$i]['bloodgrp'];?></option>

                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>

              <div class="form-group">
                <h4>Your Location</h4>
                <div>
                  <h6>District:</h6>
                  <input type="text" class="form-control float-left" list="distric-option" name="district" id="distric"
                  value="<?php echo $userifo[$i]['district'];?>" required onkeyup="thanaName();">
                  <datalist id="distric-option">
                    <option value="Dhaka">
                    <option value="Faridpur">
                    <option value="Gazipur">
                    <option value="Gopalganj">
                    <option value="Kishoreganj">
                    <option value="Madaripur">
                    <option value="Manikganj">
                    <option value="Munshiganj">
                    <option value="Naryanganj">
                    <option value="Narsingdi">
                    <option value="Rajbari">
                    <option value="Shariatpur">
                    <option value="Tangail">
                    <option value="Barguna">
                    <option value="Barisal">
                    <option value="Bhola">
                    <option value="Jhalokati">
                    <option value="Patuakhali">
                    <option value="Pirojpur">
                    <option value="Bandarban">
                    <option value="Brahmanbaria">
                    <option value="Chandpur">
                    <option value="Chittagong">
                    <option value="Comilla">
                    <option value="Cox's Bazar">
                    <option value="Feni">
                    <option value="Khagrachhari">
                    <option value="Lakshmipur">
                    <option value="Noakhali">
                    <option value="Rangamati">
                    <option value="Bagerhat">
                    <option value="Chuadanga">
                    <option value="Jessore">
                    <option value="Jhenaidah">
                    <option value="Khulna">
                    <option value="Kushtia">
                    <option value="Magura">
                    <option value="Meherpur">
                    <option value="Narail">
                    <option value="Satkhira">
                    <option value="Bogra">
                    <option value="Joypurhat">
                    <option value="Naogaon">
                    <option value="Natore">
                    <option value="Nawabganj">
                    <option value="Pabna">
                    <option value="Rajshahi">
                    <option value="Sirajganj">
                    <option value="Dinajpur">
                    <option value="Gaibandha">
                    <option value="Kurigram">
                    <option value="Lalmanirhat">
                    <option value="Nilphamari">
                    <option value="Panchagarh">
                    <option value="Rangpur">
                    <option value="Thakurgaon">
                    <option value="Habiganj">
                    <option value="Moulvibazar">
                    <option value="Sunamganj">
                    <option value="Sylhet">
                    <option value="Jamalpur">
                    <option value="Mymensingh">
                    <option value="Netrakona">
                    <option value="Sherpur">
                  </datalist>
                </div>
                <div>
                  <h6>Police Station:</h6>
                  <input type="text" class="form-control float-left" list="Thana-option" name="thana" id="Thana" value="<?php echo $userifo[$i]['thana'];?>" required>
                  <datalist id="Thana-option"></datalist>
                </div>
                <div>
                  <h6>Union:</h6>
                  <input type="text" class="form-control" name="union" id="union" value="<?php echo $userifo[$i]['union_pl'];?>">
                </div>
                <div>
                  <h6>Village:</h6>
                  <input type="text" class="form-control " name="village" id="village" value="<?php echo $userifo[$i]['village'];?>">
                </div>


              </div>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="edit_info">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!-- Edit profile end -->
    

    
    <!-- ====================================================================================================
    ========================================================================================================= -->
    <!-- Change password start -->
    <!-- Button trigger modal -->
    <div class="float-left paddingright paddingtop">
      <button type="button" class="btn btn-primary float-left modelButtonsize" data-toggle="modal"
        data-target="#changePasswordModal">
        Change Password
      </button>
    </div>


    <!-- Modal -->
    <form action="../../controler/changeuserpassword.php" method="post">
      <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">

                <input type="password" class="form-control" name="currentPassword" id="currentPassword"
                  placeholder="Current Password" required>
              </div>
              <div class="form-group">

                <input type="password" class="form-control" name="newPassword" id="newPassword"
                  placeholder="New Password" required>
              </div>
              <div class="form-group">

                <input type="password" class="form-control" name="retypePassword" id="retypePassword"
                  placeholder="Retype Password" required>
                  <span id = "message" style="color:red"> </span> 
              </div>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="changepass">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Change password end -->
    <!-- =========================================================================================
    ================================================================================================ -->
   <!-- Deactivate Account start -->
   <?php 
  
    if($userifo[$i]['status']!="deactivated")
    {
   ?> 
  
  
  
    <div class="float-left paddingright paddingtop">
      <button type="button" class="btn btn-warning float-left modelButtonsize" data-toggle="modal"
        data-target="#deactivateModal">
        Deactivate
      </button>
    </div>


    <!-- Modal -->
    <form action="../../controler/deactivateActive.php" method="post">
      <div class="modal fade" id="deactivateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure?If you continue,you won't be showed in the donner list.

            </div>
            <div class="modal-footer justify-content-center">
               <button type="submit" class="btn btn-danger" name="deContinue">Continue</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </form>
     <!-- Deactivate Account end -->
      <!-- =========================================================================================
    ================================================================================================ -->
    <!-- Activate Account start -->
    <?php
    
     }
     else{

     ?>
    <div class="float-left paddingright paddingtop">
      <button type="button" class="btn btn-warning float-left modelButtonsize" data-toggle="modal"
        data-target="#activateModal">
        Activate
      </button>
    </div>


    <!-- Modal -->
    <form action="../../controler/deactivateActive.php" method="post">
      <div class="modal fade" id="activateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure?If you continue,you would be showed in the donner list.
            </div>
            <div class="modal-footer justify-content-center">
               <button type="submit" class="btn btn-success" name="acContinue">Continue</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <?php
      }
    ?>
    <!-- Activate Account end -->
      <!-- ========================================================================================
    =============================================================================================== -->

    <!-- Delete Account Start -->
    <div class="float-left paddingright paddingtop">
      <button type="button" class="btn btn-danger float-left modelButtonsize" data-toggle="modal"
        data-target="#deleteModal">
        Delete
      </button>
    </div>


    <!-- Modal -->
    <form action="../../controler/deleteAccount.php" method="post">
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Your Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure?If you continue,your account will be deleted.
                <br><br>            

              <input type="password" class="form-control" name="password" id="password"
                  placeholder="Password" required>
          
            </div>
            <div class="modal-footer justify-content-center">
               <button type="submit" class="btn btn-danger" name="continue">Continue</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Delete Account end -->


   </div>



  <!-- JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script>
      thanaName();
    function thanaName() {
      const districtName = document.getElementById('distric').value;
      const xhttp = new XMLHttpRequest();
      xhttp.open('POST', '../../controler/thanaOption.php', true);
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send('districtName=' + districtName);

      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //alert(this.responseText);
          document.getElementById('Thana-option').innerHTML = this.responseText;
        }
      }
    }
    

    $(document).ready(function () {
      load_info();
      function load_info() {

        $.ajax({
          url: "../../controler/userprofileinfo.php",
          type: "POST",
          success: function (data) {
            $("#profileinfo").html(data);
          }

        });
      }
      $("#retypePassword").on("keyup", function () {
        const newpass = document.getElementById('newPassword').value;
        const newretypepass = document.getElementById('retypePassword').value;
        if(newpass!=newretypepass){
          document.getElementById("message").innerHTML="Password didn't match with new password";
        }
        else{
          document.getElementById("message").innerHTML="";
        }
      });

    });
  </script>
</body>

</html>

<?php		
	}else{
		header('location: ../../index.html');
  }
?>