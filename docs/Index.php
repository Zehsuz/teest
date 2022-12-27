<?php
    $conect =  mysqli_connect("127.0.0.1:3306", "root", "", "homworking");
    $homework = mysqli_query($conect, "SELECT * FROM `homework`");
    $homework = mysqli_fetch_all($homework);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>GLAVNAYA</title>
</head>
<body>
    <div class="header">
        <a href="" class="glav">Главная</a>
        <a href="maphw.php" class="glav">Карта ДЗ</a>
    </div>
</body>
</html>