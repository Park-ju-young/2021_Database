<!-- 관리자 아이디로 로그인하면 관리자 페이지로 넘어가도록 id:admin, pw:1111-->
<?php
session_start();
?>

<html>
<meta charset="UTF-8">
</html>

<?php

$id = $_POST['loginid'];   # 입력받은 id
$pw=$_POST['loginpassword'];  # 입력받은 pw

$conn = mysqli_connect("localhost", "root","wndud2507", "room");


$check = "SELECT * FROM user WHERE user_id = '$id' and user_pw = '$pw'";
$check_manager = "SELECT * FROM manager";

$result = $conn ->query($check);
$result_manager = mysqli_query($conn, $check_manager);

$row = $result ->fetch_array(MYSQLI_ASSOC);
$row_manager =mysqli_fetch_array($result_manager);

if ($id == $row_manager['manager_id'] and $pw == $row_manager['manager_pw']){
	echo "<script>alert ('관리자 로그인에 성공했습니다.')</script>";
	echo "<script>location.replace('../html/admin_home.html');</script>";
         exit;
}


if($row != null){
	$_SESSION['user_id'] = $row['user_id']; 
	$_SESSION['user_name'] = $row['user_name'];
	echo "<script>alert ('로그인에 성공했습니다.')</script>";
	echo "<script>location.replace('../html/reserve.html');</script>";
         exit;
}

else if($row == null){
   echo "<script>alert('아이디나 비밀번호를 다시 확인해주세요.')</script>";
   echo "<script>location.replace('../html/login.html');</script>";
   exit;
}

?>

