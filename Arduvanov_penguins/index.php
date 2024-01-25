<?php
include "connect.php"; // выражение  include  включает и выполняет указанный файл

$query_get_category = " select * from categories";

$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category)); //получаем результат запроса переменной query_get_category
//  и преобразуем его  в двумерный масив, где каждый элемент это масив с построчным получение кортежей из таблицы результат запроса 
//print_r($categories);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="header-div1">
            <img src="Image/Hamburger menu.png" alt="">
            <p>Разделы</p>
        </div>
        <hr class="hr1">
        <div class="header-div2">
            <img src="Image/Search.png" alt="">
            <label for="">
                <input type="search" name="" id="" placeholder="Поиск">
            </label>
        </div>
        <div class="header-div3">
            <img src="Image/Man.png" alt="">
            <a href="">Войти</a>
        </div>
    </div>
    <hr class="hr2">
    <div class="logo-date">
        <div>
            <h1 class="title">Пингвины</h1>
        </div>
        <div class="date-weather">
            <p>Monday, January 1, 2018</p>
            <div class="weather">
                <img src="Image/Sun.png" alt="">
                <p>- 23 °C</p>
            </div>
        </div>
    </div>
    <nav>
        <div class="n_title">
        </div>
        <div class="section">
            <?php
            foreach ($categories as $category) {
                echo "<li><a href ='#'>$category[1]</a></li>";
                echo "<hr>";
            }
            ?>
        </div>
    </nav>
</body>

</html>