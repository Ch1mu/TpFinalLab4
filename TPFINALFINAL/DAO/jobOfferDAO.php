<?php
    namespace DAO;

use Exception;
use Models\JobOffer as JobOffer;
use Models\mail as mail;
use DAO\IjobOfferDAO as icompanyDAO;
use DAO\Connection as Connection;

class jobOfferDAO implements icompanyDAO
{
        
        private $connection;
        private $tableName = "jobOffers";

        public function Add(JobOffer $student){

           
            try{

                $query = "INSERT INTO ".$this->tableName." (jobPositionId, companyID, careerId, vacancies, description, active) 
                          VALUES (:jobPositionId, :companyID, :careerId, :vacancies, :description, :active);";
             
                $parameters['vacancies'] = $student->getVacancies();
                $parameters['companyID'] = $student->getCompanyID();
                $parameters['jobPositionId'] = $student->getJobPositionId();
                $parameters['description'] = $student->getDescription();
                $parameters['careerId'] = $student->getCareerId();
                $parameters['active'] = 1;
                
                
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
                
                $student->setVacancies($valuesArray["vacancies"]);
                $student->setOfferID($valuesArray["offerID"]);
                $student->setJobPositionId($valuesArray["jobPositionId"]);
                $student->setCareerId($valuesArray["careerId"]);
                $student->setCompanyID($valuesArray["companyID"]);
                $student->setDescription($valuesArray["description"]);
                $student->setActive($valuesArray["active"]);
                

                array_push($studentList, $student);
            }
                return $studentList;

            } 
            catch (Exception $ex) 
            {
                throw $ex;
            }
        }
        public function deleteOffer($id){
            try{

                $query = "DELETE FROM ".$this->tableName. " WHERE offerId = :offerId";
               
                
                $parameters['offerId'] = $id;
                
                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query,$parameters);
                
                

            }
            catch(Exception $ex){
                throw $ex;
            }
        }
            public function setInactive($id){
                try{
    
                    $query = "UPDATE ". $this->tableName. " SET active = :active WHERE offerId = :offerId";
                   
                    $parameters["active"] = 0;
                    $parameters['offerId'] = $id;
                    
                    $this->connection = Connection::GetInstance();
    
                    $this->connection->ExecuteNonQuery($query,$parameters);
                    
    
    
                }
                catch(Exception $ex){
                    throw $ex;
                }
            
    
        }
        public function setActive($id){
            try{

                $query = "UPDATE ". $this->tableName. " SET active = :active WHERE offerId = :offerId";
               
                $parameters["active"] = 1;
                $parameters['offerId'] = $id;
                
                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query,$parameters);
                


            }
            catch(Exception $ex){
                throw $ex;
            }
    }
    public function Edit($offerId, $description, $jobPositionId, $vacancies, $careerId)
    {
    
        try{

            $query = "UPDATE ".$this->tableName. " SET description = :description, vacancies = :vacancies, careerId = :careerId, jobPositionId = :jobPositionId WHERE offerID = :offerID";

            $parameters['description'] = $description;
            $parameters['offerID'] = $offerId;
            $parameters['careerId'] = $careerId;
            $parameters['jobPositionId'] = $jobPositionId;
            $parameters['vacancies'] = $vacancies;
            
               
            $this->connection = Connection::GetInstance();

            $this->connection->ExecuteNonQuery($query,$parameters);



        }
        catch(Exception $ex){
            throw $ex;
        }
    }
            

    }
            

    



?>