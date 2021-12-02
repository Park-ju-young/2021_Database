<?php
$conn = mysqli_connect("localhost", "root","wndud2507", "room");

mysqli_query($conn, "INSERT INTO room VALUES('6','4','4','2021-11-30','16000')");

mysqli_close($conn);
?>