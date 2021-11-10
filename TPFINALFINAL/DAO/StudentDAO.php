<?php
    namespace DAO;

use Exception;
use Models\Student as Student;
use DAO\IStudentDAO as IStudentDAO;
use DAO\Connection as Connection;

class StudentDAO implements IStudentDAO
{

        private $connection;
        private $tableName = "students";
        private $studentList;
        private $ch;
        private $url;
        private $header;

        public function __construct(){

            $this->ch = curl_init();
            $this->url = "https://utn-students-api.herokuapp.com/api/Student";
            $this->header = array("x-api-key: 4f3bceed-50ba-4461-a910-518598664c08");
           
            curl_setopt($this->ch,CURLOPT_URL,$this->url);
            curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($this->ch,CURLOPT_HTTPHEADER,$this->header);

        }
        public function Add(Student $student){

           
            try{

                $query = "INSERT INTO ".$this->tableName." (careerId, firstName, lastName, dni, fileNumber, gender, birthDate,email, phoneNumber, activ) 
                          VALUES (:careerId, :firstName, :lastName, :dni, :fileNumber, :gender, :birthDate, :email, :phoneNumber, :active);";

                $parameters['careerId'] = $student->getCareerId();
                $parameters['firstName'] = $student->getFirstName();
                $parameters['lastName'] = $student->getLastName();
                $parameters['dni'] = $student->getDni();
                $parameters['fileNumber'] = $student->getFileNumber(); 
                $parameters['gender'] = $student->getGender();
                $parameters['birthDate'] = $student->getBirthDate();
                $parameters['email'] = $student->getEmail();
                $parameters['phoneNumber'] = $student->getPhoneNumber();
                $parameters['active'] = $student->getActive();
                
                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query, $parameters);

            }
            catch(Exception $ex){
                
                echo '<script language="javascript">alert("Ya hay un estudiante con ese Legajo!");';
                echo "window.location = 'showAddView'; </script>";
            }
        
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
                    $student = new Student();
                    $student->setStudentId($valuesArray["studentId"]);
                    $student->setCareerId($valuesArray["careerId"]);
                    $student->setDni($valuesArray["dni"]);
                    $student->setFirstName($valuesArray["firstName"]);
                    $student->setLastName($valuesArray["lastName"]);
                    $student->setGender($valuesArray["gender"]);
                    $student->setBirthDate($valuesArray["birthDate"]);
                    $student->setPhoneNumber($valuesArray["phoneNumber"]);
                    $student->setFileNumber($valuesArray["fileNumber"]);
                    $student->setEmail($valuesArray["email"]);
                    $student->setActive($valuesArray["active"]);
                    array_push($this->studentList, $student);
                }
                
            }
            

    }


}
?>