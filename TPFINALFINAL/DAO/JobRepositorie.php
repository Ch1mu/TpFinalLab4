<?php
    namespace DAO;

use Exception;
use Models\Job;

class StudentDAO implements IStudentDAO{

        private $connection;
        private $tableName = "Jobs";

        public function Add(Job $student){
            $JOBAPI = new StudentAPI();

            $studentList = $this->Mapping($studentAPI->GetAll());

            var_dump($studentList);

            try{

                $query = "INSERT INTO ".$this->tableName." (studentId,careerId,firstName,lastName,dni,fileNumber,gender,birthDate,email,phoneNumber,active,userId) 
                          VALUES (:studentId,:careerId,:firstName,:lastName,:dni,:fileNumber,:gender,:birthDate,:email,:phoneNumber,:active,:userId)";

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

                $this->connection->ExecuteNonQuery($query,$parameters);

                return "Alumno ingresado con exito";

            }
            catch(Exception $ex){
                throw $ex = "Hubo un error al ingresar el alumno";
            }
        
        }

        public function GetAll()
        {
            try {
                $studentList = array();

                $query = "SELECT * FROM ".$this->tableName;
                $this->connection = Connection::GetInstance();

                $result = $this->connection->Execute($query);
                $studentList = $this->Mapping($result);

                return $studentList;
            } catch (Exception $ex) {
                throw $ex = "No se pudo cargar la lista";
            }
        }
            

    }



?>