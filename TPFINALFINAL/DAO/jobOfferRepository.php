<?php
    namespace DAO;

    use Exception;
    use Models\jobOffer as Job;
    use DAO\iRepositorieJobOffer as iRepositorieJob;
    use DAO\Connection as Connection;
class JobOfferRepository implements iRepositorieJob{

        private $connection;
        private $tableName = "JobOffers";

        public function Add(Job $student){
        
            

            try{

                $query = "INSERT INTO ".$this->tableName." (offerId, nombre, apellido, jobId, compId) 
                          VALUES (:offerId, :nombre, :apellido, :jobId, compId);";

                $parameters['offerId'] = $student->getOfferId();
                $parameters['nombre'] = $student->getNombre();
                $parameters['apellido'] = $student->getApellido();
                $parameters['jobId'] = $student->getJobId();
                $parameters['compId'] = $student->getCompId();
               
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
                $student->setOfferId($valuesArray["offerId"]);
                $student->setNombre($valuesArray["nombre"]);
                $student->setApellido($valuesArray["jobId"]);
                $student->setJobId($valuesArray["compId"]);
                $student->setCompId($valuesArray["apellido"]);

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