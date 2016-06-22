<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="/css/Стиль%20шапки.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link href="/css/Стиль%20подвала.css" rel="stylesheet" type="text/css">
    <link rel=icon href="/logo/logo_KK_2015_v13.png">
    <link href="/css/Window%20style.css" rel="stylesheet" type="text/css">
    <link href="/css/main.css" charset="UTF-8" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.css" charset="UTF-8" rel="stylesheet" type="text/css">
    <link href="/css/Employees.css" charset="UTF-8" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.css" charset="UTF-8" rel="stylesheet" type="text/css">
    <link href="/css/orders.css" charset="UTF-8" rel="stylesheet" type="text/css">
    <script src="/js/jquery-2.2.3.min.js" charset="utf-8"></script>
    <script src="/js/Windows.js" charset="utf-8" type="text/javascript"></script>
    <script src="/js/orders-init.js" charset="utf-8" type="text/javascript"></script>
    <title>Киностудия "KINOKRUT LABORATORY"</title>
</head>
<body>
<div id="header">
    <header>
        <img src="/logo/logo_KK_2015_v13.png">
        <nav>
            <a class="header_link">Портфолио</a>
            <a class="header_link" href="/public%20html/Employees.html">О нас</a>
            <a class="header_link">Отзывы</a>
            <a class="header_link" href=#footer>Контакты</a>
            <a class="header_link">Личный кабинет</a>
            <a id="icon-checking" class="fa fa-sign-in fa-2x header_link"></a>
        </nav>
        <div ID="triangle_container">
            <div id="Window">
                <form>
                    <caption>Вход в личный кабинет</caption>
                    <table>
                        <tr>
                            <td colspan="2"></td>
                            <input type="text" placeholder="Логин"></tr>
                        <tr>
                            <td colspan="2"></td>
                            <input type="text" placeholder="Пароль"></tr>
                        <tr>
                            <td><input class="btn btn-default btn-sm" type="submit" value="Войти" id="Ent"></td>
                            <td><input class="btn btn-default btn-sm" id="Reg" type="button" value="Регистрация"
                                       onclick="toRegPage()"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </header>
</div>
<div id="wrapper">
    <h1>Здесь вы можете оформить ваш заказ</h1>

    <h2>Ваш заказ на услуги</h2>

    <div class="row container-row">
        <div class="row content-row">
            <span class="col-lg-4">Выберите вариант услуги</span>
            <select class="col-lg-3 col-lg-offset-5">
                <optgroup label="Монтаж">
                    <option>Фотомонтаж</option>
                    <option>Видеомонтаж</option>
                </optgroup>
                <optgroup label="Съемка">
                    <option>Фотосъемка</option>
                    <option>Видеосъемка</option>
                </optgroup>
            </select>
        </div>
        <div class="row content-row">
            <span class="col-lg-4">Количество времени</span>
            <input class="col-lg-3 col-lg-offset-5" type="number"/>
        </div>
        <div id="immediate_summ" class="row content-row">
            <span class="col-lg-5">Сумма по услугам</span>
            <span class="col-lg-offset-5 col-lg-2 result-summ-col">1500</span>
        </div>
    </div>
    <h2>Ваш заказ на оборудование</h2>

    <div class="row container-row">
        <div class="row content-row">
            <div id="eq-list" class="col-lg-4">
                <ul>
                    <li data-src="/img/Оборудование/Canon_EOS_6D.jpg">Canon<span class="fa fa-check-circle fa-2x icon"></span></li>
                    <li data-src="/img/Оборудование/Go Pro 4.jpg">Go Pro<span class="fa fa-check-circle fa-2x icon"></span></li>
                    <li data-src="/img/Оборудование/large_inspire_p1.jpg">Large Inspire<span class="fa fa-check-circle fa-2x icon"></span></li>
                    <li data-src="/img/Оборудование/lumix_fz1000_noir.jpg">Lumix<span class="fa fa-check-circle fa-2x icon"></span></li>
                    <li data-src="/img/Оборудование/Panasonic AG-HMC154.jpg">Panasonic<span class="fa fa-check-circle fa-2x icon"></span></li>
                    <li data-src="/img/Оборудование/Red Scarlet.jpg">Red Scarlett<span class="fa fa-check-circle fa-2x icon"></span></li>
                    <li data-src="/img/Оборудование/Slidekamera 1500.jpg">Slidecamera<span class="fa fa-check-circle fa-2x icon"></span></li>
                </ul>
            </div>
            <div id="eq-image-container" class="col-lg-5 col-lg-offset-3">

            </div>
        </div>
        <div id="immediate_summ" class="row content-row">
            <span class="col-lg-5">Сумма по оборудованию</span>
            <span class="col-lg-offset-5 col-lg-2 result-summ-col">1500</span>
        </div>
    </div>

    <h2>Ваш заказ на аренду помещения</h2>
    <div class="row container-row">
        <div class="row content-row">
            <div id="apart-list" class="col-lg-4">
                <ul>
                    <li data-src="/img/13-resized.jpg">Киностудия 1<span class="fa fa-check-circle fa-2x icon"></span></li>
                    <li data-src="/img/70826005_0C6D2202rs550.jpg">Киностудия 2<span class="fa fa-check-circle fa-2x icon"></span></li>
                    <li data-src="/img/fstudio_fstudio.jpg">Киностудия 3<span class="fa fa-check-circle fa-2x icon"></span></li>
                    <li data-src="/img/photostudio_03.jpg">Киностудия 4<span class="fa fa-check-circle fa-2x icon"></span></li>
                </ul>
            </div>
            <div id="apart-image-container" class="col-lg-5 col-lg-offset-3">

            </div>
        </div>
        <div id="immediate_summ" class="row content-row">
            <span class="col-lg-5">Сумма по аренде помещений</span>
            <span class="col-lg-offset-5 col-lg-2 result-summ-col">1500</span>
        </div>

        <div id="result_summ" class="row content-row">
            <span class="col-lg-6">Итоговая сумма заказа</span>
            <span class="col-lg-offset-4 col-lg-2 result-summ-col">4500</span>
        </div>
    </div>
</div>
<footer>
    <div id="footer">
        <p>Наши контакты:</p>

        <ul>
            <li class="fa fa-phone" aria-hidden="true"> 8 (917) 221-28-32
            <li class="fa fa-envelope-o" aria-hidden="true"> info@kinokrut.com
            <li class="fa fa-map-marker" aria-hidden="true"> г. Казань, ул. Дементьева, д. 70а
            <li id=name>Компания «Kinokrut Laboratory»
        </ul>
        <nav id="scl">
            <a href="https://vk.com/kinokrutlaboratory" id=VKlink target="_blank"></a>
            <a href="https://https://www.facebook.com/Kinokrut-Laboratory-1541593912735386/" id=FBlink
               target="_blank"></a>
            <a href="https://www.instagram.com/kinokrut_laboratory/" id=INSTlink target="_blank"></a>
            <a href="https://www.youtube.com/user/kinokrutkazan" id=YTlink target="_blank"></a>
        </nav>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2239.0607734676496!2d49.10462331546061!3d55.861611980582616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41594d7219e4d9c1%3A0x291e7a0c04cb2c19!2zedC70LjRhtCwINCU0LXQvNC10L3RgtGM0LXQstCwLCA3MNCQLCDQmtCw0LfQsNC90YwsINCg0LXRgdC_LiDQotCw0YLQsNGA0YHRgtCw0L0sIDQyMDEyNw!5e0!3m2!1sru!2sru!4v1460894543641"
            frameborder="0" style="border:0" allowfullscreen></iframe>

        <address>
            &copy; Компания «Kinokrut Laboratory», Казань 2016 г.
        </address>
    </div>
</footer>
</body>
</html>