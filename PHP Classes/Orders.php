<?php

/**
 * Created by PhpStorm.
 * User: ХП
 * Date: 18.06.2016
 * Time: 15:51
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/DBConnector.php');
class Orders
{
    private $connector;
    private $services_IdServices;
    private $User;
    private $date_orders;
    private $purchase;

    public function __construct(DBConnector $connector)
    {
        $query='select Services_idServices, Date_orders, Purchase';
        $query.='from orders';
        if($user_result=$connector->getConnection()->query($query))
        {
            if($row=$user_result->fetch_array(MYSQLI_ASSOC))
            {
                $this->services_IdServices=$row['Services_idServices'];
                $this->date_orders=$row['Date_orders'];
                $this->purchase=$row['Purchase'];
            }
            else
            {
                return false;
            }
            $user_result->close();
    }
        }

    public function getServicesIdServices()
    {
        return $this->services_IdServices;
    }

    /**
     * @param mixed $services_IdServices
     */
    public function setServicesIdServices($services_IdServices)
    {
        $this->services_IdServices = $services_IdServices;
        $query="update orders set Services_IdServices='".$services_IdServices."' where idUser='".$this->id."'";
        $result=$this->connector->getConnection()->query($query);
    }
    /**
     * @return mixed
     */
    public function getDateOrders()
    {
        return $this->Date_orders;
    }

    /**
     * @param mixed $Date_orders
     */
    public function setDateOrders($date_orders)
    {
        $this->Date_orders = $date_orders;
        $query="update orders set Date_orders='".$date_orders."' where idUser='".$this->id."'";
        $result=$this->connector->getConnection()->query($query);
    }

    /**
     * @return mixed
     */
    public function getPurchase()
    {
        return $this->Purchase;
    }

    /**
     * @param mixed $Purchase
     */
    public function setPurchase($purchase)
    {
        $this->Purchase = $purchase;
        $query="update orders set Purchase='".$purchase."' where idUser='".$this->id."'";
        $result=$this->connector->getConnection()->query($query);
    }

    /**
     * @return mixed
     */
}


