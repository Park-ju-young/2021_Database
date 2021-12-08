<?php
	session_start();
?>

<html>
<meta charset="UTF-8">

<?php 
echo $_SESSION['id'];

$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$room_num = $_POST['currentNum'];
$room_person = $_POST['currentperson'];
$room_time = $_POST['time'];
$room_date = $_POST['currentDate'];
$r_start_time = $_POST['currentTime'];

$room_num_int = (int)$room_num;
$room_person_int = (int)$room_person;
$room_time_int = (int)$room_time;

# 예약하면 사람의 정보에 room만 업데이트
$reserve_id = $_SESSION['user_id'];

if($room_num_int <=2){
	$room_money = 5000 * ($room_time_int);
}
else if($room_num_int >=7){
	$room_money = 10000 * ($room_time_int);
}
else if ($room_num_int == 6){
	$room_money = 8000 * ($room_time_int);
}
else{
	$room_money = 6000 * ($room_time_int);
}

$sql = "INSERT INTO reserved(user_id, r_room_number, r_money, r_time, r_date, r_start_time) 
VALUES('$reserve_id','$room_num_int','$room_money', '$room_time_int', '$room_date', '$r_start_time')";

if($conn ->query($sql)){
	echo "<script>alert ('예약이 완료되었습니다.')</script>";
	echo "<script>location.replace('../html/home.html');</script>";
         exit;

}else{
	echo "<script>alert ('예약에 실패했습니다.')</script>";
	echo "<script>location.replace('../html/reserve.html');</script>";
         exit;
}
mysqli_close($conn);

?>
</html>