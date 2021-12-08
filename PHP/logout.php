<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그아웃</title>
</head>
<body>
    <?php
    unset($_SESSION['user_id']);
    echo "<script>alert ('로그아웃 되었습니다.')</script>";
    echo "<script>location.replace ('../html/home.html');</script>";
    ?>
</body>
</html>
