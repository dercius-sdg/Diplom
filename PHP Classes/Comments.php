<?php

/**
 * Created by PhpStorm.
 * User: ХП
 * Date: 18.06.2016
 * Time: 16:32
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/DBConnector.php');
class Comments
{
    private $connector;
    private $idComments;
    private $User;
    private $Com_text;
    private $Come_date;

    public function __construct(DBConnector $connector)
    {
        $this->connector=$connector;
        $query='select idComments, Com_text, Com_date';
        $query.='from comments';
        if($user_result=$connector->getConnection()->query($query))
        {
            if($row=$user_result->fetch_array(MYSQLI_ASSOC))
            {
                $this->idComments=$row['idComments'];
                $this->Com_text=$row['Com_text'];
                $this->Come_date=$row['Come_date'];
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
    public function getComText()
    {
        return $this->Com_text;
    }

    /**
     * @param mixed $Com_text
     */
    public function setComText($Com_text)
    {
        $this->Com_text = $Com_text;
        $query="update registration Com_text='".$Com_text."' where idUser='".$this->id."'";
        $result=$this->connector->getConnection()->query($query);
    }

    /**
     * @return mixed
     */
    public function getIdComments()
    {
        return $this->idComments;
    }

    /**
     * @param mixed $idComments
     */
    public function setIdComments($idComments)
    {
        $this->idComments = $idComments;
        $query="update registration idComments='".$idComments."' where idUser='".$this->id."'";
        $result=$this->connector->getConnection()->query($query);
    }

    /**
     * @return mixed
     */
    public function getComeDate()
    {
        return $this->Come_date;
    }

    /**
     * @param mixed $Come_date
     */
    public function setComeDate($Come_date)
    {
        $this->Come_date = $Come_date;
        $query="update registration Come_date='".$Come_date."' where idUser='".$this->id."'";
        $result=$this->connector->getConnection()->query($query);
    }
}