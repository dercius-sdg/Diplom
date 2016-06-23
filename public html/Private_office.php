<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/Page.php');
$page=new Page();
$result=$page->getHeader()->setConnectingCssFiles("index.css");
$result=$page->getHeader()->setConnectingJsFiles("Windows.js","index.js");
echo $page->getHeader()->generateHeader();
?>
<div>

</div>
<?php
echo $page->getFooter()->generateFooter();
?>
