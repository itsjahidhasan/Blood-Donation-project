<?php
  require_once('db.php');

  function insertAdmin($user){
    $conn = getConnection();
    $sql ="insert into users values('', '{$user['name']}', '{$user['phoneNum1']}', '{$user['phoneNum2']}', '{$user['bloodgrp']}', '{$user['district']}', '{$user['thana']}', '{$user['union']}', '{$user['village']}', '{$user['password']}')";

    if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

  }
  function adminLogin($phonenumber, $password){
		$conn = getConnection();
		$sql = "select * from admin where phoneNum='{$phonenumber}' and password='{$password}'";
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
	function getAdminIfo($user){
		$conn = getConnection();
		$sql = "select * from admin where id='{$user['id']}'";
		$result = mysqli_query($conn, $sql);
		$users = [];

			while ($row = mysqli_fetch_assoc($result)) {
				array_push($users, $row);
			}
			return $users;	
	}
	function updateAdminInfo($user){
		$conn = getConnection();
		
		$sql =	"update admin set name='{$user['name']}',phoneNum='{$user['phoneNum1']}',phoneNum2='{$user['phoneNum2']}',bloodgrp='{$user['bloodgrp']}',district='{$user['district']}',thana='{$user['thana']}',union_pl='{$user['union']}',village='{$user['village']}' where id='{$user['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function currentPasswordCheck($user){
		$conn = getConnection();
		$sql = "select password from admin where id='{$user['id']}' and password='{$user['password']}'";
		$row=0;

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
    
		
		if($row){
			return true;
		}else{
			return false;
		}

	}
	function updateAdminPassword($user){
		$conn = getConnection();
		
		$sql =	"update admin set password='{$user['password']}' where id='{$user['id']}'";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



?>