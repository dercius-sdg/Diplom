<?php

/**
 * Created by PhpStorm.
 * User: ХП
 * Date: 18.06.2016
 * Time: 17:08
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/DBConnector.php');
class Position
{
    private $idPosition;
    private $Position_view;

    public function __construct(DBConnector $connector)
    {
        $query='select idPosition, Position_view';
        $query.='from position';
        if($user_result=$connector->getConnection()->query($query))
        {
            if($row=$user_result->fetch_array(MYSQLI_ASSOC))
            {
                $this->idPosition=$row['idPosition'];
                $this->Position_view=$row['Position_view'];
            }
            else
            {
                return false;
            }
            $user_result->close();
        }
    }
    /**
     * @return mixed
     */
    public function getPositionView()
    {
        return $this->Position_view;
    }

    /**
     * @param mixed $Position_view
     */
    public function setPositionView($Position_view)
    {
        $this->Position_view = $Position_view;
        $query="update registration set Position_view='".$Position_view."' where idPosition='".$this->id."'";
        $result=$this->connector->getConnection()->query($query);
    }
}

