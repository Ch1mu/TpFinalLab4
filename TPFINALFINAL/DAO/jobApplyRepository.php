<?php
    namespace DAO;

    use Exception;
    use DAO\jobOfferDAO as OfferDAO;
    use Models\jobApply as Job;
    use DAO\iRepositorieJobApply as iRepositorieJob;
    use DAO\Connection as Connection;
class JobApplyRepository implements iRepositorieJob{

        private $connection;
        private $tableName = "JobApplies";
        private $offerList;
        private $offerDAO;
        

        public function __construct()
        {
            $offerDAO = new OfferDAO();
             $offerList = array();
            $offerList = $offerDAO->GetAll();
        }
        public function Add(Job $student){
        
            

            try{

                $query = "INSERT INTO ".$this->tableName." (Email, Nombre, Apellido, jobId, CompId, OfferId) 
                          VALUES (:Email, :Nombre, :Apellido, :jobId, :CompId, :OfferId);";

                $parameters['Email'] = $_SESSION["email"];
                $parameters['OfferId'] = $student->getOfferId();
                $parameters['Nombre'] = $student->getNombre();
                $parameters['Apellido'] = $student->getApellido();
                $parameters['jobId'] = $student->getJobId();
                $parameters['CompId'] = $student->getCompId();
               
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

                
                $student->setEmail($valuesArray["Email"]);
                $student->setOfferId($valuesArray["OfferId"]);
                $student->setApplyId($valuesArray["ApplyId"]);
                $student->setNombre($valuesArray["Nombre"]);
                $student->setJobId($valuesArray["jobId"]);
                $student->setCompId($valuesArray["CompId"]);
                $student->setApellido($valuesArray["Apellido"]);

                array_push($studentList, $student);
            }
                return $studentList;

            } 
            catch (Exception $ex) 
            {
                throw $ex;
            }
        }
        
        public function deleteApply($id){
            try{

                $query = "DELETE FROM ".$this->tableName. " WHERE ApplyId = :ApplyId";
               
                
                $parameters['ApplyId'] = $id;
                
                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query,$parameters);
                
                foreach($offerList as $offer)
                {
                    if($offer)
                }

            }
            catch(Exception $ex){
                throw $ex;
            }
        

    }
            

        
        
        }
            

    



?>