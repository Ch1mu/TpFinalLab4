<?php
    namespace DAO;

use Exception;
use Models\Career as Career;
use DAO\IStudentDAO as IStudentDAO;
use DAO\Connection as Connection;

class CareerDAO implements iRepositorieCareer
{

        private $connection;
        private $tableName = "students";
        private $studentList;
        private $ch;
        private $url;
        private $header;

        public function __construct(){

            $this->ch = curl_init();
            $this->url = "https://utn-students-api.herokuapp.com/api/Career";
            $this->header = array("x-api-key: 4f3bceed-50ba-4461-a910-518598664c08");
           
            curl_setopt($this->ch,CURLOPT_URL,$this->url);
            curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($this->ch,CURLOPT_HTTPHEADER,$this->header);

        }
        
        public function GetAll()
        {
             $this->RetrieveData();
                return $this->studentList;
        }

        private function RetrieveData()
        {
            $resp = curl_exec($this->ch); 
            $this->studentList = array();
            $arrayToDecode = json_decode($resp, true);
       
    
            if($resp !=null)
            {
            

                $arrayToDecode = json_decode($resp, true);

                foreach($arrayToDecode as $valuesArray)
                { 
                    $student = new Career();
                    $student->setCareerId($valuesArray["careerId"]);
                    $student->setDescription($valuesArray["description"]);
                    $student->setActive($valuesArray["active"]);
                    
                    array_push($this->studentList, $student);
                }
                
            }
            

    }


}
?>