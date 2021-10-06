<?php
  require_once('db.php');

  function insertUser($user){
    $conn = getConnection();
    $sql ="insert into users values('', '{$user['name']}', '{$user['phoneNum1']}', '{$user['phoneNum2']}', '{$user['bloodgrp']}', '{$user['district']}', '{$user['thana']}', '{$user['union']}', '{$user['village']}', '{$user['password']}','')";

    if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

  }
  function userLogin($phonenumber, $password){
		$conn = getConnection();
		$sql = "select * from users where phoneNum='{$phonenumber}' and password='{$password}'";
    $row=0;

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    $users = [];
    
		if($row){
			array_push($users, $row);
			return $users;
		}else{
			return false;
		}
	}

	function getUserInfo($user){
		$conn = getConnection();
		$sql = "select * from users where id='{$user['id']}'";
		$result = mysqli_query($conn, $sql);
		$users = [];

			while ($row = mysqli_fetch_assoc($result)) {
				array_push($users, $row);
			}
			return $users;	
	}


	function getDonnerFlag($bloodgrp){
		$conn = getConnection();
		$sql = "select * from users where status='' and bloodgrp='{$bloodgrp}'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)>0){
			return true;
		}
		else{
			return false;
		}
	}


	function getAllDonner($user){
		$conn = getConnection();
		$sql = "select * from users where status='' and bloodgrp='{$user['bloodgrp']}' and district='{$user['district']}' and thana='{$user['thana']}' and union_pl='{$user['union']}' order by district, thana";
		$result = mysqli_query($conn, $sql);
		$users = [];

			while ($row = mysqli_fetch_assoc($result)) {
				array_push($users, $row);
			}
			return $users;	
	}


	function getAllDonnerDT($user){
		$conn = getConnection();
		$sql = "select * from users where status='' and bloodgrp='{$user['bloodgrp']}' and district='{$user['district']}' and thana='{$user['thana']}' order by district, thana";
		$result = mysqli_query($conn, $sql);
		$users = [];

			while ($row = mysqli_fetch_assoc($result)) {
				array_push($users, $row);
			}
			return $users;	
	}


	function getAllDonnerD($user){
		$conn = getConnection();
		$sql = "select * from users where status='' and bloodgrp='{$user['bloodgrp']}' and district='{$user['district']}' order by district, thana";
		$result = mysqli_query($conn, $sql);
		$users = [];

			while ($row = mysqli_fetch_assoc($result)) {
				array_push($users, $row);
			}
			return $users;	
	}


	function getAllDonnerB($user){
		$conn = getConnection();
		$sql = "select * from users where status='' and bloodgrp='{$user['bloodgrp']}' order by district, thana";
		$result = mysqli_query($conn, $sql);
		$users = [];

			while ($row = mysqli_fetch_assoc($result)) {
				array_push($users, $row);
			}
			return $users;	
	}

	function getDonnerFlagAll($user){
		$conn = getConnection();
		$sql = "select * from users where status='' and bloodgrp='{$user['bloodgrp']}' and district='{$user['district']}' and thana='{$user['thana']}' and union_pl='{$user['union']}'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)>0){
			return true;
		}
		else{
			return false;
		}
	}
	function getDonnerFlagDT($user){
		$conn = getConnection();
		$sql = "select * from users where status='' and bloodgrp='{$user['bloodgrp']}' and district='{$user['district']}' and thana='{$user['thana']}'";;
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)>0){
			return true;
		}
		else{
			return false;
		}
	}
	function getDonnerFlagD($user){
		$conn = getConnection();
		$sql = "select * from users where status='' and bloodgrp='{$user['bloodgrp']}' and district='{$user['district']}'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)>0){
			return true;
		}
		else{
			return false;
		}
	}

	function currentPasswordCheckUser($user){
		$conn = getConnection();
		$sql = "select password from users where id='{$user['id']}' and password='{$user['password']}'";
		$row=0;

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    
		
		if($row){
			return true;
		}else{
			return false;
		}
	}
	function updateUserPassword($user){
		$conn = getConnection();
		
		$sql =	"update users set password='{$user['password']}' where id='{$user['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUserInfo($user){
		$conn = getConnection();
		
		$sql =	"update users set name='{$user['name']}',phoneNum='{$user['phoneNum1']}',phoneNum2='{$user['phoneNum2']}',bloodgrp='{$user['bloodgrp']}',district='{$user['district']}',thana='{$user['thana']}',union_pl='{$user['union']}',village='{$user['village']}' where id='{$user['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUserStatus($user){
		$conn = getConnection();
		
		$sql =	"update users set status='{$user['status']}' where id='{$user['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function deleteUser($user){
		$conn = getConnection();
		
		$sql =	"delete from users where password='{$user['password']}' and id='{$user['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



?>