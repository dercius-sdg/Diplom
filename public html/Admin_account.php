<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/Page.php');
$page=new Page(true,true);
$result=$page->getHeader()->setConnectingCssFiles("index.css","admin_page.css");
$result=$page->getHeader()->setConnectingJsFiles("Windows.js","index.js");
echo $page->getHeader()->generateHeader();
?>
<div id="bordered-shadow">
    <div id="wrapper">
        <h1>Добрый день, уважаемый администратор</h1>
        <h3>На текущей странице вы можете просмотреть количество зарегистрированных пользователей, а также количество всех сделанных заказов за текущий месяц</h3>
        <div id="report-container">
            <form id="report-header" class="row">
                <span id="month-header" class="col-lg-6">Выберите период построения отчета</span>
                <select id="month-select" class="form-control">
                    <option>Январь</option>
                    <option>Февраль</option>
                    <option>Март</option>
                    <option>Апрель</option>
                    <option>Май</option>
                    <option>Июнь</option>
                    <option>Июль</option>
                    <option>Август</option>
                    <option>Сентябрь</option>
                    <option>Октябрь</option>
                    <option>Ноябрь</option>
                    <option>Декабрь</option>
                </select>
            </form>
            <div id="report-body" class="row">
                <h4 class="col-lg-7 col-lg-offset-3">Количество пользователей в системе: 75</h4>
                <h4 class="col-lg-7 col-lg-offset-3">Количество сделанных заказов в системе: 50</h4>
                <h4 class="col-lg-7 col-lg-offset-3">Количество выполненных входов в систему: 263</h4>
            </div>
        </div>
    </div>
</div>
<?php
echo $page->getFooter()->generateFooter();
?>