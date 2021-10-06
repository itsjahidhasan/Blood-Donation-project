<?php
require_once('../../model/adminModel.php');
	session_start();
	if(isset($_SESSION['status'])){
    $id = $_SESSION['id'];
    $user=[
      'id'=>$id,
    ];
    $adminifo = getAdminIfo($user);
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
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./adminpanel.php">Home <span class="sr-only">(current)</span></a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="./search.php">Search Donner</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="../../controler/logout.php" method="POST">

        <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
      </form>

    </div>
  </nav>

  <div id="profileinfo" class="container"></div>

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
    <form action="../../controler/updateadmin.php" method="post">
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
                <input type="text" class="form-control" name="name" id="inputName" value="<?php echo $adminifo[0]['name']?>" required>

              </div>
              <div class="form-group">
                <h6>Phone Number:</h6>
                <input type="tel" class="form-control" name="phone" id="inputNumber" value="<?php echo $adminifo[0]['phoneNum']?>" required>

              </div>

              <div class="form-group">
                <h6>Second Phone Number(Optional):</h6>
                <input type="tel" class="form-control" name="phone2" id="input2ndNumber"
                value="<?php echo $adminifo[0]['phoneNum2']?>">

              </div>


              <h6>Select Blood Group:</h6>
              <select class="form-control" name="bloodgrp">
                <option value="<?php echo $adminifo[0]['bloodgrp']?>"><?php echo $adminifo[0]['bloodgrp']?></option>

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
                  value="<?php echo $adminifo[0]['district']?>" required onkeyup="thanaName();">
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
                  <input type="text" class="form-control float-left" list="Thana-option" name="thana" id="Thana" value="<?php echo $adminifo[0]['thana']?>" required>
                  <datalist id="Thana-option"></datalist>
                </div>
                <div>
                  <h6>Union:</h6>
                  <input type="text" class="form-control" name="union" id="union" value="<?php echo $adminifo[0]['union_pl']?>">
                </div>
                <div>
                  <h6>Village:</h6>
                  <input type="text" class="form-control " name="village" id="village" value="<?php echo $adminifo[0]['village']?>">
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
    <!-- =======================================================================================================
============================================================================================================= -->
    <!-- Add Donner start-->
    <!-- Button trigger modal -->
    <div class="float-left paddingright paddingtop">
      <button type="button" class="btn btn-primary float-left paddingright modelButtonsize" data-toggle="modal"
        data-target="#addDonnerModal">
        Add Donner
      </button>
    </div>


    <!-- Modal -->
    <form action="../../controler/signupCheck.php" method="post">
      <div class="modal fade" id="addDonnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add donner</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">

                <input type="text" class="form-control" name="donnername" id="inputdonnerName" placeholder="Full Name" required>

              </div>

              <div class="form-group">

                <input type="tel" class="form-control" name="donnerphone" id="inputdonnerNumber"
                  placeholder="Phone Number " required>

              </div>

              <div class="form-group">

                <input type="tel" class="form-control" name="donnerphone2" id="inputdonner2ndNumber"
                  placeholder="Second Phone Number(Optional)">

              </div>

              <div class="form-group">

                <input type="password" class="form-control" name="donnerpassword" id="inputdonnerPassword"
                  placeholder="Password" required>
              </div>

              <div class="form-group">

                <input type="password" class="form-control" name="retypedonnerPassword" id="inputRetypdonnerPassword"
                  placeholder="Retype Password" required>
                  <span id = "donnerpassmessage" style="color:red"> </span>
              </div>

              <select class="form-control" name="donnerbloodgrp">
                <option value="none">Select Blood Group</option>

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
                <input type="text" class="form-control" list="distric-option-donner" name="donnerdistrict"
                  id="donnerDistrict" placeholder="District" required onkeyup="donnerThanaName();">
                <datalist id="distric-option-donner">
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

                <input type="text" class="form-control" list="Thana-option-donner" name="donnerthana" id="donnerThana"
                  placeholder="Police Station" required>
                <datalist id="Thana-option-donner"></datalist>

                <input type="text" class="form-control" name="donnerunion" id="donnerUnion" placeholder="Union">

                <input type="text" class="form-control" name="donnervillage" id="donnerVillage" placeholder="Village">


              </div>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" name="add_donner">Confirm</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Add Donner end-->
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
    <form action="../../controler/changeadminpass.php" method="post">
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
    function donnerThanaName() {
      const districtName = document.getElementById('donnerDistrict').value;
      const xhttp = new XMLHttpRequest();
      xhttp.open('POST', '../../controler/thanaOption.php', true);
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send('districtName=' + districtName);

      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //alert(this.responseText);
          document.getElementById('Thana-option-donner').innerHTML = this.responseText;
        }
      }
    }
    $(document).ready(function () {
      load_info();
      function load_info() {

        $.ajax({
          url: "../../controler/profileinfo.php",
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
      $("#inputRetypdonnerPassword").on("keyup", function () {
        const newpass = document.getElementById('inputdonnerPassword').value;
        const newretypepass = document.getElementById('inputRetypdonnerPassword').value;
        if(newpass!=newretypepass){
          document.getElementById("donnerpassmessage").innerHTML="Password didn't match with new password";
        }
        else{
          document.getElementById("donnerpassmessage").innerHTML="";
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
