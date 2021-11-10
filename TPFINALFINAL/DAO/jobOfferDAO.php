<?php
    namespace DAO;

use Exception;
use Models\JobOffer as JobOffer;
use DAO\IjobOfferDAO as icompanyDAO;
use DAO\Connection as Connection;

class jobOfferDAO implements icompanyDAO
{

        private $connection;
        private $tableName = "jobOffers";

        public function Add(JobOffer $student){

           
            try{

                $query = "INSERT INTO ".$this->tableName." (jobPositionId, companyID, careerId, description) 
                          VALUES (:jobPositionId, :companyID, :careerId, :description);";
             
               
                $parameters['companyID'] = $student->getCompanyID();
             
                $parameters['description'] = $student->getDescription();
                
                
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
                $student = new JobOffer();
                
                $student->setJobPositionId($valuesArray["jobPositionId"]);
                $student->setCareerId($valuesArray["careerId"]);
                $student->setCompanyID($valuesArray["companyID"]);
                $student->setDescription($valuesArray["description"]);
                

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