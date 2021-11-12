<?php
    namespace DAO;

use Exception;
use Models\account as Account;
use DAO\iRepositorieAccount as IStudentDAO;
use DAO\Connection as Connection;

class accountsRepositorie implements IStudentDAO
{

        private $connection;
        private $tableName = "account";

        public function Add(Account $student){

           
            try{

                $query = "INSERT INTO ".$this->tableName." (email, pass, role) 
                          VALUES (:email, :pass, :role);";

                $parameters['email'] = $student->getEmail();
                $parameters['pass'] = $student->getPassword();
                $parameters['role'] = $student->getRole();
                
                
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
                $student = new Account();
                $student->setEmail($valuesArray["email"]);
                $student->setPassword($valuesArray["pass"]);
                $student->setRole($valuesArray["role"]);
                
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