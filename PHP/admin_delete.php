<html>
<meta charset="UTF-8">

<?php
$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$room_num = $_POST['room_num'];
$room_num_int = (int)$room_num;

$sql = "DELETE FROM room WHERE room_number = $room_num_int";

$result = mysqli_query($conn, $sql);
if($result == false){
	echo mysqli_error($conn);
}

if($conn ->query($sql)){
	echo "<script>alert ('방 정보 삭제를 성공했습니다.')</script>";
	echo "<script>location.replace('../html/admin_home.html');</script>";
         exit;

}else{
	echo "<script>alert ('방 정보 삭제를 실패했습니다. 입력하신 방 번호를 확인해주세요')</script>";
	echo "<script>location.replace('../html/admin_home.html');</script>";
         exit;
}

mysqli_close($conn);
?>
</html>