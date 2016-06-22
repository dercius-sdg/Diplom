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
    <title>���������� "KINOKRUT LABORATORY"</title>
</head>
<body>
<div id="header">
    <header>
        <img src="logo/logo_KK_2015_v13.png">
        <nav>
            <a class="header_link">���������</a>
            <a class="header_link" href="/public%20html/Employees.html">� ���</a>
            <a class="header_link" href="index.php#comment-ribbon">������</a>
            <a class="header_link" href=#footer>��������</a>
            <a class="header_link">������ �������</a>
            <a id="icon-checking" class="fa fa-sign-in fa-2x header_link"></a>
        </nav>
        <div ID="triangle_container">
            <div id="Window">
                <form>
                    <caption>���� � ������ �������</caption>
                    <table>
                        <tr>
                            <td colspan="2"></td>
                            <input type="text" placeholder="�����"></tr>
                        <tr>
                            <td colspan="2"></td>
                            <input type="text" placeholder="������"></tr>
                        <tr>
                            <td><input class="btn btn-default btn-sm" type="submit" value="�����" id="Ent"></td>
                            <td><input class="btn btn-default btn-sm" id="Reg" type="button" value="�����������"
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