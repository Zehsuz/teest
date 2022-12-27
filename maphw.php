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

    <title>Document</title>
</head>
<body>
    <div class="header">
        <a href="" class="glav">Главная</a>
        <a href="" class="glav1">Карта ДЗ</a>
    </div>
    <?php
        foreach($homework as $item) {
        ?>   
        <a href="<?= $href?>"><?= $item[1]?></a><br>
        <?php
        }
    ?>

</body>
</html>