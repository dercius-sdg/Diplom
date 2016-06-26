<?php

/**
 * Created by PhpStorm.
 * User: derci
 * Date: 22.06.2016
 * Time: 19:07
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Interfaces/IHeader.php');
class ComplexHeader implements IHeader
{
    private $cssFiles=array();
    private $isCheckout;
    private $jsFiles=array();
    public function __construct($isCheckout=false)
    {
        $this->isCheckout=$isCheckout;
    }
    public function generateHeader()
    {
        $result=<<<HEADER
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link type="text/css" rel="stylesheet" href="/fonts/opensans.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel=icon href="/logo/logo_KK_2015_v13.png">
    <link href="/css/main.css" charset="UTF-8" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.css" charset="UTF-8" rel="stylesheet" type="text/css">
HEADER;
        foreach($this->cssFiles as $cssValue)
        {
            $result.="<link href='".$cssValue."' charset='UTF-8' rel='stylesheet' type='text/css'>";
        }
        $result.=<<<HEADER
    <script src="/js/jquery-2.2.3.min.js" charset="utf-8"></script>
    <script src="/js/bootstrap.js" charset="utf-8"></script>
HEADER;
        foreach($this->jsFiles as $jsValue)
        {
            $result.="<script src='".$jsValue."' charset='utf-8'></script>";
        }
        $result.=<<<HEADER
    <title>Киностудия "KINOKRUT LABORATORY"</title>
    <style>
        body
        {
            padding-bottom:400px
        }
    </style>
</head>
<body>
<div id="header">
    <header>
        <img src="/logo/logo_KK_2015_v13.png">
        <nav>
            <a class="header_link">Портфолио</a>
            <a class="header_link" href="/public%20html/Employees.html">О нас</a>
            <a class="header_link" href="/index.php#comment-ribbon">Отзывы</a>
            <a class="header_link" href=#footer>Контакты</a>
            <a class="header_link" href="/public%20html/Private_office.php">Личный кабинет</a>
HEADER;
        if($this->isCheckout)
        {
            $result.="<a class='header_link'>Выйти</a>";
        }
        else
        {
            $result.="<a id='icon-checking' class='fa fa-sign-in fa-2x header_link'></a>";
        }
            $result.=<<<HEADER
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

    public function setConnectingCssFiles()
    {
        $params=func_get_args();
        $cssPath="/css/";
        foreach($params as $param)
        {
            if(file_exists($_SERVER['DOCUMENT_ROOT'].$cssPath.$param))
            {
                array_push($this->cssFiles,$cssPath.$param);
            }
        }
    }

    public function setConnectingJsFiles()
    {
        $params=func_get_args();
        $jsPath="/js/";
        foreach($params as $param)
        {
            if(file_exists($_SERVER['DOCUMENT_ROOT'].$jsPath.$param))
            {
                array_push($this->jsFiles,$jsPath.$param);
            }
        }
    }
}