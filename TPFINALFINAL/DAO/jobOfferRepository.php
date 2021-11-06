<?php
    namespace DAO;

    use Exception;
    use Models\jobOffer as Job;
    
    use DAO\iRepositorieJob as iRepositorieJob;
    use DAO\Connection as Connection;
class JobRepositorie implements iRepositorieJob{

        private $connection;
        private $tableName = "jobs";

        public function Add(Job $student){
        
            

            try{

                $query = "INSERT INTO ".$this->tableName." (jobPositionId, careerId, description, companyIds) 
                          VALUES (:jobPositionId, :careerId, :description, :companyIds);";

                $parameters['jobPositionId'] = $student->getJobPositionId();
                $parameters['careerId'] = $student->getCareerId();
                $parameters['description'] = $student->getDescription();
                $parameters['companyIds'] = $student->getCompanyIds();
               
                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query,$parameters);



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
                $student = new Job();
                $student->setCompanyIds($valuesArray["companyIds"]);
                $student->setCareerId($valuesArray["careerId"]);
                $student->setJobPositionId($valuesArray["jobPositionId"]);
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