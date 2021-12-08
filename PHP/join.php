<html>
<meta charset = "utf-8">

<?php
$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$id = $_POST['joinId'];
$pw = $_POST['joinpassword'];
$name = $_POST['joinName'];
$phone = $_POST['phone'];
$room = $_POST['room_num'];
$phone_int = (int)$phone;
$room_int = (int) $room;

$sql = "INSERT INTO user(user_name,user_id,user_pw,user_phone, user_room) VALUES('$name', '$id', '$pw','$phone_int', '$room_int')";

if($conn->query($sql)){
	echo $name.'님 회원 가입에 성공했습니다';
	echo "<script>alert ('회원가입 되었습니다.')</script>";
	echo "<script>location.replace ('../html/reserve.html');</script>";
}else{

	echo '회원가입에 실패했습니다.'.'<br>';
	echo '다시 시도해 주세요.';
	echo mysqli_error($conn);
}

mysqli_close($conn);
?>
</html>
