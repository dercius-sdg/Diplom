<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<code><?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/DBConnector.php');
    $dbConnect=new DBConnector("mydb",'dercius6082');
    echo $dbConnect->getConnection()->connect_errno;
?></code>
</body>
</html>