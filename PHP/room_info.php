<?php
$conn = mysqli_connect("localhost", "root","wndud2507", "room");

$sql = "SELECT room_number, room_people,room_money  FROM room ORDER BY room_people ASC";
$result = mysqli_query($conn,$sql);

$sql_people = "SELECT distinct room_people FROM room ORDER BY room_people ASC";
$result_people = mysqli_query($conn, $sql_people)
?>

<!DOCTYPE html>
<meta charset="utf-8">
<html lang = "en" dir = "ltr">
<body>

<?php
$row = mysqli_fetch_array($result);

while(True){    

    $row_people = mysqli_fetch_array($result_people);
    if($row_people == null){break;}

    echo "<span class=room-people> $row_people[room_people]인실 </span>";

    while ($row != null){
        if ($row['room_people'] != $row_people['room_people']){break;}

        if ($row['room_people'] == $row_people['room_people']){
            echo
            "<span class='room-spec'>
            <span class='room-num'> Room$row[room_number] </span>
            <span class='room-price'> $row[room_money]원 </span>
            <span>";
        }
        $row = mysqli_fetch_array($result);
    }
}

?>



</body>
</html>