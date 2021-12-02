<?php
session_start();

$id = $_POST['loginid'];
$pw=$_POST['loginpassword'];

$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$check = "SELECT * FROM user WHERE user_id = '$id' and user_pw = '$pw'";
$result = $conn ->query($check);

$row = $result ->fetch_array(MYSQLI_ASSOC);

if($row != null){
	$_SESSION['id'] = $row['loginid'];
	$_SESSION['user_name'] = $row['user_name'];
	echo "<script>alert ('로그인에 성공했습니다.')</script>";
	echo "<script>location.replace('reserve.html');</script>";
         exit;
      }
      
      if($row == null){
         echo "<script>alert('아이디나 비밀번호를 다시 확인해주세요.')</script>";
         echo "<script>location.replace('login.html');</script>";
         exit;
      }
?>
