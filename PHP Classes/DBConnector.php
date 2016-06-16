<?php

/**
 * Created by PhpStorm.
 * User: derci
 * Date: 15.06.2016
 * Time: 22:04
 */
final class DBConnector
{
    private $connection;
    private $server_address;
    private $port;
    private $user;
    private $password;

    /**
     * @param $database
     */
    public function __construct($database,$user_password)
    {
        $settingsPath=$_SERVER['DOCUMENT_ROOT'].'/settings.xml';
        if(!file_exists($settingsPath))
        {
            $this->connection=false;
        }
        else {
            $xmlDoc = new DOMDocument();
            $xmlDoc->load($settingsPath);
            $xPath = new DOMXPath($xmlDoc);
            $this->port = $xPath->query("//server_database")->item(0)->attributes->getNamedItem("port")->nodeValue;
            $this->server_address = $xPath->query("//server_database")->item(0)->attributes->getNamedItem("address")->nodeValue;
            $this->user = $xPath->query("//server_database/database[@name='" . $database . "']/user")->item(0)->attributes->getNamedItem("name")->nodeValue;
            $this->connection=new mysqli($this->server_address,$this->user,$user_password,$database);

        }

    }
    public function getConnection()
    {
        return $this->connection;
    }
}