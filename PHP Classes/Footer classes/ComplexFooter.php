<?php

/**
 * Created by PhpStorm.
 * User: derci
 * Date: 22.06.2016
 * Time: 19:14
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Interfaces/IFooter.php');
class ComplexFooter implements IFooter
{

    public function generateFooter()
    {
        $result=<<<FOOTER
<footer>
    <div id="footer">
        <p>Наши контакты:</p>

        <ul>
            <li class="fa fa-phone" aria-hidden="true"> 8 (917) 221-28-32
            <li class="fa fa-envelope-o" aria-hidden="true"> info@kinokrut.com
            <li class="fa fa-map-marker" aria-hidden="true"> г. Казань, ул. Дементьева, д. 70а
            <li id=name>Компания «Kinokrut Laboratory»</li>
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
FOOTER;
        return $result;
    }
}