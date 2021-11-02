<?php
namespace DAO;

require_once "__DIR__/../Config/Autoload.php";

use DAO\iRepositorieAccount as iRepositories;
use Models\account as account;

class accountsRepositorie implements iRepositories
{
    private $studentList = array();

    

    public function Add(account $student)
    {

        $this->RetrieveData();
        
        array_push($this->studentList, $student);

        $this->SaveData();
    }

    public function GetAll()
    {
        $this->RetrieveData();

        return $this->studentList;
    }

    private function SaveData()
    {
        $arrayToEncode = array();

        foreach($this->studentList as $student)
        {
            $valuesArray["email"] = $student->getEmail();
            $valuesArray["password"] = $student->getPassword();
            $valuesArray["job"] = $student->getJob();
            array_push($arrayToEncode, $valuesArray);
        }

        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
        
        file_put_contents('Data/accounts.json', $jsonContent);
    }

    private function RetrieveData()
    {
        $this->studentList = array();

        if(file_exists('Data/accounts.json'))
        {
            $jsonContent = file_get_contents('Data/accounts.json');

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {
                $student = new account();
                $student->setEmail($valuesArray["email"]);
                $student->setPassword($valuesArray["password"]);
                

                array_push($this->studentList, $student);
            }
        }
    }
}