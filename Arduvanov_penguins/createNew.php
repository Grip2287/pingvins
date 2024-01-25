<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/reset.css">
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
            <p>Los pingvinos ve la managasrkar</p>
        </div>
        <div class="date-weather">
            <p>Monday, January 1, 2018</p>
            <div class="weather">
                <img src="Image/Sun.png" alt="">
                <p>- 23 °C</p>
            </div>
        </div>
    </div>
    <div class="section">
        <a href="#">Новости</a>
        <a href="#">Мнение</a>
        <a href="#">Наука</a>
        <a href="#">Жизнь</a>
        <a href="#">Путешествие</a>
        <a href="#">Деньги</a>
        <a href="#">Арты & Дизайн</a>
        <a href="#">Спорт</a>
        <a href="#">Люди</a>
        <a href="#">Лечение</a>
        <a href="#">Образование</a>
    </div>
    <form action="createNewValid.php" method = "POST" enctype = "multipart/form-data" id="form">
        <label  for ="userAvatar"></label>
        <input name = "userAvatar" type="file" id = "userAvatar">
        <br>
        <label for="user"></label>
        <input name = "userHeading" type="text" id = "userHeading" placeholder="Введите Заголовок">
        <br>
        <label  for="userText"></label>
        <input name = "userText" type="text" id = "userText" placeholder="Введите текст">
        <br>
        <select name="news" id="userSelect">
            <option value="">--Выберите новость--</option>
            <option value="Человек-Паук">Человек-Паук</option>
            <option value="Веном">Веном</option>
            <option value="Ящерица">Ящерица</option>
        </select>
        <br>
        <input type="submit" value="Создать пост" id="userSubmit">
    </form>
</body>
</html>