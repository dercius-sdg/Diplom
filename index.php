<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP Classes/Page.php');
$page = new Page(false);
$result = $page->getHeader()->setConnectingCssFiles("index.css");
$result = $page->getHeader()->setConnectingJsFiles("Windows.js", "index.js","main.js");
echo $page->getHeader()->generateHeader();
?>
    <div id="bordered-shadow">
        <div id="wrapper">
            <div id="title-block"><H1>У нас можно заказать:</H1>
                <img class="service_img" src="/img/13-resized.jpg" width="586px" height="450px">
                <ul id="descr">
                    <li><a href="/public%20html/Video_portfolio.html">Видеосъёмка документальных и художественных
                            фильмов.</a>
                    </li>
                    <li><a href="/public%20html/Video_portfolio.html">Монтаж, спец.эффекты, 2D и 3D графика и т.д.</a>
                    </li>
                    <li><a href="/public%20html/Video_portfolio.html">Создание рекламы, корпоративных фильмов, клипов и
                            всевозможных креативных роликов под ключ.</a></li>
                    <li><a href="/public%20html/Rent_of_equipment.html">Аренда оборудования и видеосъёмка на Red
                            Scarlet,
                            аэросъемка на Dji Inspire.</a></li>
                    <li><a href="/public%20html/Video_portfolio.html">Видео конференций, семинаров и мероприятий.</a>
                    </li>
                    <li><a href="/public%20html/Photo_portfolio.html">Фото различных мероприятий.</a></li>
                    <li><a href="/public%20html/Rent_apartment.html">Аренда павильона Kinokrut Laboratory общей площадью
                            260
                            м.</a></li>
                </ul>
            </div>
            <h2 class="portfolio-header">Профессиональная фотосъемка</h2>

            <div class="portfolio-content">
                <div style="float: left" class="portfolio">
                    <ul>
                        <li><img src="/img/Фото%20портфолио/GUM-7969.jpg"/></li>
                        <li><img src="/img/Фото%20портфолио/GUM-7941.jpg"/></li>
                        <li><img src="/img/Фото%20портфолио/GUM-8010.jpg"/></li>
                        <li><img src="/img/Фото%20портфолио/GUM-8266.jpg"/></li>
                        <li><img src="/img/Фото%20портфолио/GUM-8255.jpg"/></li>
                        <li><img src="/img/Фото%20портфолио/GUM-7906.jpg"/></li>
                        <li><img src="/img/Фото%20портфолио/GUM-7920.jpg"/></li>
                        <li><img src="/img/Фото%20портфолио/GUM-7969.jpg"/></li>
                    </ul>
                </div>
                <p class="right-sided">
                    Фотоагентство «10-22mm» - это объединение опытных фотографов, работающих в области архитектурной,
                    строительной, производственной, промышленной, интерьерной и высотной фотосъемки.
                    <br/>
                    Наша основная задача – радовать своих клиентов качественными фотографиями.
                </p>
                <a href="/public%20html/Photo_portfolio.html" class="to-portfolio right-sided">Подробнее</a>
            </div>
            <div class="portfolio-content">
                <img src="/img/Буфер%20обмена01.jpg" style="float: right" class="portfolio" onclick="toVimio()"/>

                <p class="left-sided">
                    Современная фототехника в совокупности с профессионализмом наших сотрудников позволяют делать
                    безупречные
                    фотографии в независимости от места и условий съемок.
                    <br/>
                    Мы всегда готовы предложить своим клиентам оригинальные решения по привлекательным ценам.
                    <br/>
                    Будьте уверены, творческие плоды фотоагентства «10-22mm» всегда будут в тренде.
                </p>
                <a href="https://vimeo.com/kinokrut" class="to-portfolio left-sided">Подробнее</a>
            </div>
            <h2 class="portfolio-header">Аренда павильона и оборудования</h2>

            <div class="portfolio-content">
                <div style="float: left" class="portfolio">
                    <ul>
                        <li><img src="/img/13-resized.jpg"/></li>
                        <li><img src="/img/fstudio_fstudio.jpg"/></li>
                        <li><img src="/img/photostudio_03.jpg"/></li>
                        <li><img src="/img/fstudio_fstudio.jpg"/></li>
                        <li><img src="/img/13-resized.jpg"/></li>
                    </ul>
                </div>
                <p class="right-sided">
                    Описание портфолио....
                </p>
                <a href="/public%20html/Photo_portfolio.html" class="to-portfolio right-sided">Подробнее</a>
            </div>
            <div class="portfolio-content">
                <div style="float: right" class="portfolio">
                    <ul>
                        <li><img src="/img/Оборудование/lumix_fz1000_noir.jpg"/></li>
                        <li><img src="/img/Оборудование/large_inspire_p1.jpg"/></li>
                        <li><img src="/img/Оборудование/DJI-Osmo-hardware.jpg"/></li>
                        <li><img src="/img/Оборудование/Red%20Scarlet.jpg"/></li>
                        <li><img src="/img/Оборудование/lumix_fz1000_noir.jpg"/></li>
                    </ul>
                </div>
                <p class="left-sided">
                    Описание портфолио....
                </p>
                <a href="/public%20html/Video_portfolio.html" class="to-portfolio left-sided">Подробнее</a>
            </div>
        </div>
        <div id="comment-ribbon">
            <ul>
                <li class="comment">
                    <div class="comment">
                        <p>В качестве фотографа решили воспользоваться услугами Kinokrut Laboratory. Очень понравилось
                            ваше
                            отношение
                            к работе - умеете заставить улыбнуться. Ни одно интересное событие на мероприятии не
                            осталось не
                            запечатленным. Спасибо вам большое! Фотографии супер, все участники довольны!</p>
                        <img src="/img/comments/pers8.jpg"/>
                    </div>
                </li>
                <li class="comment">
                    <div class="comment">
                        <p>Открытие всероссийского форума! Такой волнительный день! Столько эмоций! И все эти эмоции так
                            здорово
                            были запечатлены на
                            фотографиях! Их стооооолькооооо... Все еще не успели посмотреть,но то что смотрели - не
                            выразить
                            словами, просто класс! Спасибо за день, за работу, прекрасные эмоции!</p>
                        <img src="/img/comments/pers7.jpg"/>
                    </div>
                </li>
                <li class="comment">
                    <div class="comment">
                        <p>К студии "Kinokrut Laboratory" у меня особое отношение, оно более семейное, потому что эта
                            команда
                            сопровождает меня в роли профессионалов фотографии и настоящих друзей уже на протяжении
                            многих лет и
                            многих важных событий. Фотографии и видео превзошли все наши ожидания.</p>
                        <img src="/img/comments/pers10.jpg"/>
                    </div>
                </li>
                <li class="comment">
                    <div class="comment">
                        <p>Огромное спасибо за съемку! Уж насколько мы в этот день были как два бревна, по
                            фотографиям об этом никто не догадался. Все остались в полном восторге от твоей работы - и
                            всем интересующимся я уже скинула координаты.
                        </p>
                        <img src="/img/comments/pers4.jpg"/>
                    </div>
                </li>
                <li class="comment">
                    <div class="comment">
                        <p>Хочу поблагодарить вас за прекрасные фотографии, от которых все гости на
                            банкете были просто в восторге! Очень хорошо получились снимки, и идея сняться в музее
                            соц.быта.
                        </p>
                        <img src="/img/comments/pers5.jpg"/>
                    </div>
                </li>
                <li class="comment">
                    <div class="comment">
                        <p>В качестве фотографа решили воспользоваться услугами Kinokrut Laboratory. Очень понравилось
                            ваше
                            отношение
                            к работе - умеете заставить улыбнуться. Ни одно интересное событие на мероприятии не
                            осталось не
                            запечатленным. Спасибо вам большое! Фотографии супер, все родственники довольны!</p>
                        <img src="/img/comments/pers8.jpg"/>
                    </div>
                </li>
                <li class="comment">
                    <div class="comment">
                        <p>Открытие всероссийского форума! Такой волнительный день! Столько эмоций! И все эти эмоции так
                            здорово
                            были запечатлены на
                            фотографиях! Их стооооолькооооо... Все еще не успели посмотреть,но то что смотрели - не
                            выразить
                            словами, просто класс! Спасибо за день, за работу, прекрасные эмоции!</p>
                        <img src="/img/comments/pers7.jpg"/>
                    </div>
                </li>
            </ul>
        </div>
        <button id="more-comments">Еще комментарий</button>
    </div>
<?php
echo $page->getFooter()->generateFooter();
?>