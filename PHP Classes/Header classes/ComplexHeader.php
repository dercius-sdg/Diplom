<?php

/**
 * Created by PhpStorm.
 * User: derci
 * Date: 22.06.2016
 * Time: 19:07
 */
class ComplexHeader implements IHeader
{
    public function generateHeader()
    {
        $result=<<<HEADER
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link type="text/css" rel="stylesheet" href="/fonts/opensans.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel=icon href="logo/logo_KK_2015_v13.png">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" charset="UTF-8" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" charset="UTF-8" rel="stylesheet" type="text/css">
    <script src="js/jquery-2.2.3.min.js" charset="utf-8"></script>
    <script src="js/Windows.js" charset="utf-8" type="text/javascript"></script>
    <script src="js/index.js" charset="utf-8" type="text/javascript"></script>
    <title>Киностудия "KINOKRUT LABORATORY"</title>
</head>
<body>
<div id="header">
    <header>
        <img src="logo/logo_KK_2015_v13.png">
        <nav>
            <a class="header_link">Портфолио</a>
            <a class="header_link" href="/public%20html/Employees.html">О нас</a>
            <a class="header_link" href="index.php#comment-ribbon">Отзывы</a>
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
HEADER;
        return $result;
    }

}