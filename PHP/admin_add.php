<html>
<meta charset="UTF-8">

<?php
$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$room_num = $_POST['room_num'];
$room_person = $_POST['room_person'];
$room_money = $_POST['room_money'];

$room_num_int = (int)$room_num;
$room_person_int = (int)$room_person;
$room_money_int = (int)$room_money;


$sql = "INSERT INTO room(room_number,room_people,room_time, room_date, room_money) VALUES('$room_num_int', '$room_person_int' , '2' , '2021-12-05', '$room_money_int')";

$result = mysqli_query($conn, $sql);
if($result == false){

	echo mysqli_error($conn);
}

if($conn ->query($sql)){
	echo "<script>alert ('방 정보 업데이트에 성공했습니다.')</script>";
	echo "<script>location.replace('../html/admin_home.html');</script>";
         exit;

}else{
	echo "<script>alert ('방 정보 업데이트에 실패했습니다.')</script>";
	echo "<script>location.replace('../html/admin_home.html');</script>";
         exit;
}

mysqli_close($conn);
?>
</html>