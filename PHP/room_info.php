<?php
$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$sql = "SELECT room_number, room_people, room_time, room_money  FROM room";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
<body>
<?php
echo "<h1> ROOM INFORMATION</h1>";

echo '<tr>' .
	'<th>방 번호</th><th>수용 인원</th><th>이용 시간</th><th>이용 요금</th>' .
	'</tr>','<br>';
?>
<?php
$row = mysqli_fetch_array($result);
echo $row['room_number'].'<br>';
echo $row['room_people'].'<br>';
echo $row['room_time'].'<br>';
echo $row['room_money'].'<br>';
?><hr>
<?php
$row = mysqli_fetch_array($result);
echo $row['room_number'].'<br>';
echo $row['room_people'].'<br>';
echo $row['room_time'].'<br>';
echo $row['room_money'].'<br>';

?><hr>


</body>
</html>


