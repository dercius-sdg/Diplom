<?php

/**
 * Created by PhpStorm.
 * User: derci
 * Date: 17.06.2016
 * Time: 22:54
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/DBConnector.php');
class User
{
    private $connector;
    private $id;
    private $name;
    private $surrname;
    private $lastname;
    private $phones;
    private $birthday;
    private $email;

    /**
     * @param $login
     * @param $password
     * @param $connector
     */
    public function __construct($login,$password,DBConnector $connector)
    {
        $this->connector=$connector;
        $query='select count(*) ';
        $query.='from registration ';
        $query.="where login='".$login."' and password='".$password."'";
        if($result=$connector->getConnection()->query($query))
        {
            $selected_row=$result->fetch_row();
            if($selected_row[0]==1)
            {
                $query='select idRegistration,Name,Surrname,Lastname,Phones,`Date of Birth`,`E-mail`';
                $query.='from registration ';
                $query.="where login='".$login."' and password='".$password."'";
                if($user_result=$connector->getConnection()->query($query))
                {
                    if($row=$user_result->fetch_array(MYSQLI_ASSOC))
                    {
                        $this->id=$row['idRegistration'];
                        $this->name=$row['Name'];
                        $this->surrname=$row['Surrname'];
                        $this->lastname=$row['Lastname'];
                        $this->phones=$row['Phones'];
                        $this->birthday=$row['Date of Birth'];
                        $this->email=$row['E-mail'];
                    }
                    else
                    {
                        return false;
                    }
                    $user_result->close();
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
            $result->close();
        }
        else
        {
            return false;
        }
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        $query="update registration set Name='".$name."' where idRegistration='".$this->id."'";
        $result=$this->connector->getConnection()->query($query);
    }
    /**
     * @return mixed
     */
    public function getSurrname()
    {
        return $this->surrname;
    }

    /**
     * @param mixed $surrname
     */
    public function setSurrname($surrname)
    {
        $this->surrname = $surrname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param mixed $phones
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}