<?php
    namespace DAO;

use Exception;
use Models\Student;
use DAO\IStudentDAO as IStudentDAO;
use DAO\Connection as Connection;

class StudentDAO implements IStudentDAO
{

        private $connection;
        private $tableName = "students";

        public function Add(Student $student){

           
            try{

                $query = "INSERT INTO ".$this->tableName." (studentId, careerId, firstName, lastName, dni, fileNumber, gender, birthDate,email, phoneNumber, activ) 
                          VALUES (:studentId, :careerId, :firstName, :lastName, :dni, :fileNumber, :gender, :birthDate, :email, :phoneNumber, :active);";

                $parameters['studentId'] = $student->getStudentId();
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
                throw $ex;
            }
        
        }

        public function GetAll()
        {
            try {
                $studentList = array();

                $query = "SELECT * FROM ".$this->tableName.";";
                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
               foreach ($resultSet as $valuesArray) 
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
                $student->setActive($valuesArray["activ"]);

                array_push($studentList, $student);
            }
                return $studentList;

            } 
            catch (Exception $ex) 
            {
                throw $ex;
            }
        }
            

    }



?>