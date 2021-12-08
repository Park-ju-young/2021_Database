<?php
	session_start();
?>

<!DOCTYPE html>
<meta charset="utf-8">
<html lang = "en" dir = "ltr">
<body>

<?php
$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$date = $_POST['cancel_date'];   # 입력받은 날짜
$start_time = $_POST['cancel_start_time'];     # 입력받은 사용 시간
$int_start_time = (int)$start_time;
$reserve_id = $_SESSION['user_id'];

$sql_cancel = "DELETE FROM reserved WHERE r_date = '$date' and r_start_time = '$start_time'";

if($conn->query($sql_cancel)){
	echo "<script>alert ('예약 취소되었습니다.')</script>";
	echo "<script>location.replace ('../html/reserve_info.html');</script>";
}else{
    echo "<script>alert ('다시 시도해주세요.')</script>";
    echo "<script>location.replace ('../html/reserve_info.html');</script>";
    exit;
}
?>

</body>
</html>