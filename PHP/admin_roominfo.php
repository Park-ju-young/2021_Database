<?php
$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$sql = "SELECT room_number, room_people,room_money  FROM room ORDER BY room_number ASC";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<meta charset="utf-8">
<html lang = "en" dir = "ltr">
<body>


<?php
$row = mysqli_fetch_array($result);
echo
    "<span class='room-title'> 방 번호 </span>
    <span class='room-title'> 최대 인원 </span>
    <span class='room-title'> 시간 당 가격 </span>";
while ($row != null){
    echo
    "<span class='room-spec'>
    <span class='room-num'> Room$row[room_number] </span>
    <span class='room-people'>$row[room_people] </span>
    <span class='room-price'> $row[room_money]원 </span>
    <span>";

    $row = mysqli_fetch_array($result);
}

?>

</body>
</html>