<?php
$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$sql = "SELECT * FROM reserved ORDER BY r_date ASC";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<meta charset="utf-8">
<html lang = "en" dir = "ltr">
<body>

<?php
$row = mysqli_fetch_array($result);
echo
    "<span class='room-title'> 사용자ID </span>
    <span class='room-title'> 방 번호 </span>
    <span class='room-title'> 총 금액 </span>
    <span class='room-title'> 예약 날짜</span>
    <span class='room-title'> 예약 시간</span>
    <span class='room-title'> 사용 시간</span>
    ";
while ($row != null){
    echo
    "<span class='room-spec'>
    <span class='room-num'> $row[user_id] </span>
    <span class='room-num'> Room$row[r_room_number] </span>
    <span class='room-money'> $row[r_money]원 </span>
    <span class='room-date'> $row[r_date] </span>
    <span class='room-time'> $row[r_start_time] </span>
    <span class='room-time'> $row[r_time]시간 </span>
    <span>";

    $row = mysqli_fetch_array($result);
}

?>

</body>
</html>