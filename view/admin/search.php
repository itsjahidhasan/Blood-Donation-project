<?php
	session_start();
	if(isset($_SESSION['status'])){
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

    .search {
      padding-top: 1%;
      padding-left: 2%;
    }

    .search-info {
      padding-left: 15%;
    }

    .left {
      float: left;
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
        <li class="nav-item">
          <a class="nav-link" href="./adminpanel.php">Home <span class="sr-only">(current)</span></a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="./search.php">Search Donner</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="../../controler/logout.php" method="POST">

        <button class="btn btn-danger my-2 my-sm-0" type="submit">Logout</button>
      </form>

    </div>
  </nav>
  <div class="search left container-fluid">
    <h3>Search for Blood Donner:</h3>

    <div class="search-info">
      <!-- Select option for Blood grp -->
      <div class="form-group left">
        <select class="form-control">
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
      </div>
      <!-- Select option for District -->
      <div class="form-group left">

        <input class="form-control" list="distric-option" name="district" id="distric" placeholder="Select District"
          onkeyup="district();">
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
      <!-- Select option for Thana -->
      <div class="form-group left">
        <input class="form-control" list="Thana-option" name="Thana" id="Thana" placeholder="Select Thana">
        <datalist id="Thana-option">

        </datalist>
      </div>
      <!-- Select option for union -->
      <div class="form-group left">
        <input type="text" class="form-control" name="union" id="" placeholder="Union">
      </div>
      <!-- Select option for Village -->
      <div class="form-group left">
        <input type="text" class="form-control" name="village" id="" placeholder="Village">
      </div>
      <div class="login-btn left" align="center">
        <button type="submit" class="btn btn-info">Search</button>
      </div>
    </div>
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
  <script>
    function district() {
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


  </script>



  
</body>

</html>

<?php		
	}else{
		header('location: ../../index.html');
  }
?>