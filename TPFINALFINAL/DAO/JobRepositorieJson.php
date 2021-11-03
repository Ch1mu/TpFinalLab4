<?php
namespace DAO;

require_once "__DIR__/../Config/Autoload.php";

use DAO\iRepositorieJob as iRepositories;
use Models\Job as job;

class JobRepositorie implements iRepositories
{
    private $studentList = array();

    

    public function Add(job $student)
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
            $valuesArray["jobPositionId"] = $student->getJobPositionId();
            $valuesArray["careerId"] = $student->getCareerId();
            $valuesArray["description"] = $student->getDescription();
            
            array_push($arrayToEncode, $valuesArray);
        }

        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
        
        file_put_contents('Data/jobs.json', $jsonContent);
    }

    private function RetrieveData()
    {
        $this->studentList = array();

        if(file_exists('Data/jobs.json'))
        {
            $jsonContent = file_get_contents('Data/jobs.json');

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {
                $student = new Job();
                $student->setJobPositionId($valuesArray["jobPositionId"]);
                $student->setCareerId($valuesArray["careerId"]);
                $student->setDescription($valuesArray["description"]);
                

                array_push($this->studentList, $student);
            }
        }
    }
}