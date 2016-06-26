<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/Page.php');
$page=new Page(true,true);
$result=$page->getHeader()->setConnectingCssFiles("index.css","Private_office.css");
$result=$page->getHeader()->setConnectingJsFiles("Windows.js","index.js");
echo $page->getHeader()->generateHeader();
?>
<div id="wrapper">
    <h1>Здравствуйте, Дмитрий</h1>

    <h2>Здесь вы можете выбрать интересующие вас настройки: сменить учетные данные и просмотреть сделанные заказы</h2>

    <div class="row container-row">
        <ul class="nav nav-pills nav-tabs-justified row" role="tablist">
            <li role="presentation" class="active col-lg-3 col-lg-offset-3"><a href="#Private_data" aria-controls="home" role="tab"
                                                                               data-toggle="tab">Учетные данные</a></li>
            <li role="presentation" class="col-lg-3"><a href="#Orders" aria-controls="profile" role="tab" data-toggle="tab">Оформленные
                    заказы</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="Private_data">
                <div class="row">
                    <form class="col-lg-12">
                        <div class="row">
                            <label class="col-lg-2 col-lg-offset-3">Ваше имя</label>
                            <input class="col-lg-2 col-lg-offset-1"
                                   type="text">
                        </div>
                        <div class="row">
                            <label class="col-lg-2 col-lg-offset-3">Ваше фамилия</label>
                            <input
                                class="col-lg-2 col-lg-offset-1" type="text">
                        </div>
                        <div class="row">
                            <label class="col-lg-2 col-lg-offset-3">Ваше отчество</label>
                            <input
                                class="col-lg-2 col-lg-offset-1"
                                type="text">
                        </div>
                        <div class="row">
                            <label class="col-lg-2 col-lg-offset-3">Ваш телефон</label>
                            <input
                                class="col-lg-2 col-lg-offset-1" type="text">
                        </div>
                        <div class="row">
                            <label class="col-lg-2 col-lg-offset-3">Ваша дата рождения</label>
                            <input
                                class="col-lg-2 col-lg-offset-1"
                                type="text">
                        </div>
                        <div class="row">
                            <label class="col-lg-2 col-lg-offset-3">Ваш логин</label>
                            <input
                                class="col-lg-2 col-lg-offset-1" type="text">
                        </div>
                        <div class="row">
                            <label class="col-lg-2 col-lg-offset-3">Ваше пароль</label>
                            <input
                                class="col-lg-2 col-lg-offset-1" type="text">
                        </div>
                        <div class="row">
                            <label class="col-lg-2 col-lg-offset-3">Ваше e-mail</label>
                            <input
                                class="col-lg-2 col-lg-offset-1" type="text">
                        </div>
                        <input id="submit-button" type="submit" class="btn-success" value="Обновить"/>
                    </form>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="Orders">
                <table class="table table-hover table-bordered">
                    <tr>
                        <td>Номер заказа</td>
                        <td>Сумма заказа</td>
                        <td>Описание заказа</td>
                    </tr>
                    <tr>
                        <td>0000052365</td>
                        <td>4500</td>
                        <td>Съемка на улице</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
echo $page->getFooter()->generateFooter();
?>
