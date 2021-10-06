<?php
  session_start();
  

  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 20)) {
    
    $_SESSION['errorMsg']="";
}

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
      background-color: rgb(182, 214, 224);
    }

    .signup {
      align-items: center;
      width: 50%;
      height: 83%;

      margin-top: 50px;
      margin-bottom: 50px;
      border-radius: 15px;
      padding-bottom: 2%;

    }

    .cancel-sinup-btn {
      width: 100%;
    }

    .join {
      width: 100px;
    }

    .cancel {
      width: 100px;
    }

    .areainfo {
      width: 165px;
    }

    .mrgareaiputleft {
      margin-left: 10px;
    }

    .mrgareaiputtop {
      margin-top: 7px;

    }



    /* // Small devices (landscape phones, 576px and up) */
    @media (min-width: 280px) {
      .signup {
        width: 97%;
      }


    }

    @media (min-width: 320px) {
      .signup {
        width: 97%;
      }

      .cancel-sinup-btn {
        width: 100%;
        float: right;
      }
    }

    @media (min-width: 576px) {
      .signup {
        width: 97%;
      }
    }

    /* // Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {
      .signup {
        width: 97%;
      }


    }
  </style>

</head>

<body>
    <?php
      
      echo $_SESSION['errorMsg'];
    ?>

  <div class="container-fluid">



    <div class="container signup bg-light">
      <div class="container" align="center">
        <br><br>
        <h2>Become a Blood Donner</h2>
      </div>
      <br> <br>
      <form action="../controler/signupCheck.php" method="POST" class="table-responsive">
        <div class="form-group">

          <input type="text" class="form-control form-control-lg" name="name" id="inputName" placeholder="Full Name"
            required>

        </div>

        <div class="form-group">

          <input type="tel" class="form-control form-control-lg" name="phone" id="inputNumber"
            placeholder="Phone Number " required>

        </div>

        <div class="form-group">

          <input type="tel" class="form-control form-control-lg" name="phone2" id="input2ndNumber"
            placeholder="Second Phone Number(Optional)">

        </div>

        <div class="form-group">

          <input type="password" class="form-control form-control-lg" name="password" id="inputPassword"
            placeholder="Password" required>
        </div>

        <div class="form-group">

          <input type="password" class="form-control form-control-lg" name="retypePassword" id="inputRetypPassword"
            placeholder="Retype Password" required onkeyup="passwordMatch();">
          <span id="message" style="color:red"> </span>
        </div>

        <select class="form-control form-control-lg" name="bloodgrp" id="bloodgrp">
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
        <span id="bloodmessage" style="color:red"> </span>

        <div class="form-group">
          <h4>Your Location</h4>
          <input type="text" class="form-control form-control-lg areainfo float-left mrgareaiputleft"
            list="distric-option" name="district" id="distric" placeholder="District" required onkeyup="thanaName();">
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
          <input type="text" class="form-control form-control-lg areainfo float-left mrgareaiputleft"
            list="Thana-option" name="thana" id="Thana" placeholder="Police Station" required>
          <datalist id="Thana-option"></datalist>
          <input type="text" class="form-control form-control-lg areainfo float-left mrgareaiputleft" name="union"
            id="union" placeholder="Union">
          <input type="text" class="form-control form-control-lg areainfo float-left mrgareaiputleft " name="village"
            id="village" placeholder="Village">
          <br><br><br>
        </div>



        <div class="cancel-sinup-btn" align="center">

          <a href="../index.html" class="btn btn-outline-danger cancel" role="button" aria-pressed="true"
            align="center">Cancel</a>
          <button type="submit" class="btn btn-outline-success join" name="join">Join</button>

        </div>

      </form>
    </div>
  </div>


  <!-- JavaScript -->


  <script>
    function thanaName() {
      const districtName = document.getElementById('distric').value;
      const xhttp = new XMLHttpRequest();
      xhttp.open('POST', '../controler/thanaOption.php', true);
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send('districtName=' + districtName);

      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          //alert(this.responseText);
          document.getElementById('Thana-option').innerHTML = this.responseText;
        }
      }
    }
    function passwordMatch() {
      const newpass = document.getElementById('inputPassword').value;
      const newretypepass = document.getElementById('inputRetypPassword').value;
      if (newpass != newretypepass) {
        document.getElementById("message").innerHTML = "Password didn't match with new password";
      }
      else {
        document.getElementById("message").innerHTML = "";
      }
    }
  </script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>



</body>

</html>
<?php
  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 30)) {
    
    $_SESSION['errorMsg']="";
}

?>