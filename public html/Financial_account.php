<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/Page.php');
$page=new Page();
$result=$page->getHeader()->setConnectingCssFiles("index.css");
$result=$page->getHeader()->setConnectingJsFiles("Windows.js","index.js");
echo $page->getHeader()->generateHeader();
?>
    <div id="wrapper">
        <h1>Открытые заказы на оплату</h1>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <td>Номер заказа</td>
                <td>ФИО клиента</td>
                <td>Стоимость заказа</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    0000052365
                </td>
                <td>
                    Сущевский Дмитрий Германович
                </td>
                <td>
                    4500
                </td>
                <td>
                    <button class="btn btn-success">Оплатить заказ</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
<?php
echo $page->getFooter()->generateFooter();
?>