<?php

/**
 * Created by PhpStorm.
 * User: derci
 * Date: 22.06.2016
 * Time: 19:11
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Interfaces/IFooter.php');
class SimpleFooter implements IFooter
{

    public function generateFooter()
    {
        $result=<<<FOOTER
<address>
    &copy; Компания «Kinokrut Laboratory», Казань 2016 г.
</address>
</body>
</html>
FOOTER;
        return $result;
    }
}