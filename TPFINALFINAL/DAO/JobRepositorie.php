<?php
    namespace DAO;

    use Exception;
    use Models\Job as Job;
    
    use DAO\iRepositorieJob as iRepositorieJob;
    use DAO\Connection as Connection;
class JobRepositorie implements iRepositorieJob{

        private $connection;
        private $tableName = "jobs";
        private $studentList;

        public function __construct(){

            $this->ch = curl_init();
            $this->url = 'https://utn-students-api.herokuapp.com/api/JobPosition';
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
                    $student = new Job();
                    
                    $student->setCareerId($valuesArray["careerId"]);
                    $student->setJobPositionId($valuesArray["jobPositionId"]);
                    $student->setDescription($valuesArray["description"]);
                    array_push($this->studentList, $student);
                }
                
            }
        }


        
        
        }
            

    



?>