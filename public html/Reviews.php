<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<code><?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/DBConnector.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/User.php');
    $dbConnect=new DBConnector("mydb",'dercius6082');
    $user=new User('dercius','dercius6082',$dbConnect);
    print $user->getId()."<br/>";
    echo $user->getName()."<br/>";
    echo $user->getSurrname()."<br/>";
    echo $user->getLastname()."<br/>";
    echo $user->getPhones()."<br/>";
    echo $user->getBirthday()."<br/>";
    echo $user->getEmail()."<br/>";
    $user->setName('Дмитрий');
    echo "<br/>";
    print $user->getId()."<br/>";
    echo $user->getName()."<br/>";
    echo $user->getSurrname()."<br/>";
    echo $user->getLastname()."<br/>";
    echo $user->getPhones()."<br/>";
    echo $user->getBirthday()."<br/>";
    echo $user->getEmail()."<br/>";
?></code>
</body>
</html>