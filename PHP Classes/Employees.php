<?php

/**
 * Created by PhpStorm.
 * User: ХП
 * Date: 18.06.2016
 * Time: 18:25
 */
require_once($_SERVER['DOCUMENT_ROOT'].'/PHP Classes/DBConnector.php');
class Employees
{
    private $idEmployees;
    private $Emp_Name;
    private $Emp_Surname;
    private $Emp_Lastname;
    private $Emp_DateofBirth;
    private $Emp_photo;

    public function __construct(DBConnector $connector)
    {
        $query='select idEmployees, Emp_Name, Emp_Surname, Emp_Lastname, Emp_DateofBirth, Emp_photo';
        $query.='from employees';
        if($user_result=$connector->getConnection()->query($query))
        {
            if($row=$user_result->fetch_array(MYSQLI_ASSOC))
            {
                $this->idEmployees=$row['idEmployees'];
                $this->Emp_Name=$row['Emp_Name'];
                $this->Emp_Surname=$row['Emp_Surname'];
                $this->Emp_Lastname=$row['Emp_Lastname'];
                $this->Emp_DateofBirth=$row['Emp_DateofBirth'];
                $this->Emp_photo=$row['Emp_photo'];
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
    public function getEmpPhoto()
    {
        return $this->Emp_photo;
    }

    /**
     * @param mixed $PEmp_photo
     */
    public function setEmpPhoto($Emp_photo)
    {
        $this->Emp_photo = $Emp_photo;
        $query="update registration set Emp_photo='".$Emp_photo."' where idEmployees='".$this->id."'";
        $result=$this->connector->getConnection()->query($query);
    }

    /**
     * @return mixed
     */
    public function getIdEmployees()
    {
        return $this->idEmployees;
    }

    /**
     * @param mixed $idEmployees
     */
    public function setIdEmployees($idEmployees)
    {
        $this->idEmployees = $idEmployees;
    }

    /**
     * @return mixed
     */
    public function getEmpName()
    {
        return $this->Emp_Name;
    }

    /**
     * @param mixed $Emp_Name
     */
    public function setEmpName($Emp_Name)
    {
        $this->Emp_Name = $Emp_Name;
    }

    /**
     * @return mixed
     */
    public function getEmpSurname()
    {
        return $this->Emp_Surname;
    }

    /**
     * @param mixed $Emp_Surname
     */
    public function setEmpSurname($Emp_Surname)
    {
        $this->Emp_Surname = $Emp_Surname;
    }

    /**
     * @return mixed
     */
    public function getEmpLastname()
    {
        return $this->Emp_Lastname;
    }

    /**
     * @param mixed $Emp_Lastname
     */
    public function setEmpLastname($Emp_Lastname)
    {
        $this->Emp_Lastname = $Emp_Lastname;
    }

    /**
     * @return mixed
     */
    public function getEmpDateofBirth()
    {
        return $this->Emp_DateofBirth;
    }

    /**
     * @param mixed $Emp_DateofBirth
     */
    public function setEmpDateofBirth($Emp_DateofBirth)
    {
        $this->Emp_DateofBirth = $Emp_DateofBirth;
    }

    /**
     * @return mixed
     */
    public function getEmpPhoto()
    {
        return $this->Emp_photo;
    }

    /**
     * @param mixed $Emp_photo
     */
    public function setEmpPhoto($Emp_photo)
    {
        $this->Emp_photo = $Emp_photo;
    }
}
