<?php

/**
 * Created by PhpStorm.
 * User: derci
 * Date: 22.06.2016
 * Time: 19:11
 */
class SimpleFooter implements IFooter
{

    public function generateFooter()
    {
        $result=<<<FOOTER
<address>
    &copy; �������� �Kinokrut Laboratory�, ������ 2016 �.
</address>
</body>
</html>
FOOTER;
        return $result;
    }
}