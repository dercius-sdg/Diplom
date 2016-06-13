<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/Стиль%20шапки.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/Стиль%20подвала.css" rel="stylesheet" type="text/css">
    <link rel = icon href="logo/logo_KK_2015_v13.png">
    <link href="css/Window%20style.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" charset="UTF-8" rel="stylesheet" type="text/css">
    <script src="js/jquery-2.2.3.min.js" charset="utf-8"></script>
    <script src="js/Windows.js" charset="utf-8" type="text/javascript"></script>
    <script src="js/index.js" charset="utf-8" type="text/javascript"></script>
    <title>Киностудия "KINOKRUT LABORATORY"</title>
</head>
<body>
<div id="header">
<header>
    <img src = "logo/logo_KK_2015_v13.png">
<nav>
<a class = "header_link">Портфолио</a>
<a class = "header_link" href="/public%20html/Employees.html">О нас</a>
<a class = "header_link">Отзывы</a>
<a class = "header_link" href = #footer>Контакты</a>
    <a class = "header_link">Личный кабинет</a>
    <a id="icon-checking" class = "fa fa-sign-in fa-2x header_link"></a>
</nav>
<div ID="triangle_container">
    <div id = "Window">
        <form>
            <caption>Вход в личный кабинет</caption>
            <table>
                <tr><td colspan="2"></td><input type="text" placeholder="Логин"></tr>
                <tr><td colspan="2"></td><input type="text" placeholder="Пароль"></tr>
                <tr><td><input type="submit" value="Войти" id = "Ent"></td><td><input id = "Reg" type="button" value="Регистрация" onclick="toRegPage()"></td></tr>
            </table>
        </form>
    </div>
</div>
</header>
</div>
<div id="wrapper">
    <H1>У нас можно заказать:</H1>
    <img class = "service_img" src="img/13-resized.jpg" width="586px" height="450px">
    <ul id="descr">
        <li><a href = "public%20html/Video_portfolio.html">Видеосъёмка документальных и художественных фильмов.</a></li>
        <li><a href = "public%20html/Video_portfolio.html">Монтаж, спец.эффекты, 2D и 3D графика и т.д.</a></li>
        <li><a href = "public%20html/Video_portfolio.html">Создание рекламы, корпоративных фильмов, клипов и всевозможных креативных роликов под ключ.</a></li>
        <li><a href = "public%20html/Rent_of_equipment.html">Аренда оборудования и видеосъёмка на Red Scarlet, аэросъемка на Dji Inspire.</a></li>
        <li><a href = "public%20html/Video_portfolio.html">Видео конференций, семинаров и мероприятий.</a></li>
        <li><a href = "public%20html/Photo_portfolio.html">Фото различных мероприятий.</a></li>
        <li><a href = "public%20html/Rent_apartment.html">Аренда павильона Kinokrut Laboratory общей площадью 260 м.</a></li>
    </ul>
    <div id="portfolio-content">
        <p>
            Описание портфолио....
        </p>
        <div id="portfolio"   style="float: left">
            <ul>
                <li><img src="/img/13-resized.jpg"/></li>
                <li><img src="/img/fstudio_fstudio.jpg"/></li>
                <li><img src="/img/photostudio_03.jpg"/></li>
                <li><img src="/img/13-resized.jpg"/></li>
                <li><img src="/img/fstudio_fstudio.jpg"/></li>
            </ul>
        </div>
    </div>
</div>
<footer >
    <div id="footer">
        <p>Наши контакты:</p>

    <ul>
        <li class="fa fa-phone" aria-hidden="true">  8 (917) 221-28-32
        <li class="fa fa-envelope-o" aria-hidden="true">  info@kinokrut.com
        <li class="fa fa-map-marker" aria-hidden="true">  г. Казань, ул. Дементьева, д. 70а
        <li id = name>Компания «Kinokrut Laboratory»
    </ul>
        <nav id = "scl">
            <a href = "https://vk.com/kinokrutlaboratory" id = VKlink target="_blank"></a>
            <a href = "https://https://www.facebook.com/Kinokrut-Laboratory-1541593912735386/" id = FBlink target="_blank"></a>
            <a href = "https://www.instagram.com/kinokrut_laboratory/" id = INSTlink target="_blank"></a>
            <a href = "https://www.youtube.com/user/kinokrutkazan" id = YTlink target="_blank"></a>
        </nav>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2239.0607734676496!2d49.10462331546061!3d55.861611980582616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41594d7219e4d9c1%3A0x291e7a0c04cb2c19!2zedC70LjRhtCwINCU0LXQvNC10L3RgtGM0LXQstCwLCA3MNCQLCDQmtCw0LfQsNC90YwsINCg0LXRgdC_LiDQotCw0YLQsNGA0YHRgtCw0L0sIDQyMDEyNw!5e0!3m2!1sru!2sru!4v1460894543641" frameborder="0" style="border:0" allowfullscreen></iframe>

        <address>
           &copy; Компания «Kinokrut Laboratory», Казань 2016 г.
        </address>
    </div>
</footer>
</body>
</html>