<?php
namespace DAO;

use DAO\iRepositoriesCompany as iRepositoriesCompany;
use Models\Company as company;

class companyRepository implements iRepositoriesCompany
{
    private $studentList = array();

    public function __construct()
    {
        $this->fileName = dirname(__DIR__)."/Data/company.json";
    }
    
    
    
    public function Add(company $student)
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
            $valuesArray["id"] = $student->getId();
            $valuesArray["nombre"] = $student->getNombre();
            $valuesArray["localidad"] = $student-> getLocalidad();
            $valuesArray["rubro"] = $student->getRubro();
            
            array_push($arrayToEncode, $valuesArray);
        }

        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
        
        file_put_contents('Data/company.json', $jsonContent);
    }



    private function RetrieveData()
    {
        $this->studentList = array();

        if(file_exists('Data/company.json'))
        {
            $jsonContent = file_get_contents('Data/company.json');

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {
                $student = new company();
                $student->setId($valuesArray["id"]);
                $student->setNombre($valuesArray["nombre"]);
                $student->setLocalidad($valuesArray["localidad"]);
                $student->setRubro($valuesArray["rubro"]);
            
                

                array_push($this->studentList, $student);
            }
        }
    }
    
    
    
        

}