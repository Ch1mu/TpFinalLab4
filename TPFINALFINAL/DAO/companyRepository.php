<?php
    namespace DAO;

use Exception;
use Models\Company as Company;
use DAO\iRepositoriesCompany as icompanyDAO;
use DAO\Connection as Connection;

class companyRepository implements icompanyDAO
{

        private $connection;
        private $tableName = "companys";

        public function Add(Company $student){

           
            try{

                $query = "INSERT INTO ".$this->tableName." (id, nombre, localidad, rubro) 
                          VALUES (:id, :nombre, :localidad, :rubro);";

                $parameters['id'] = $student->getId();
                $parameters['nombre'] = $student->getNombre();
                $parameters['localidad'] = $student->getLocalidad();
                $parameters['rubro'] = $student->getRubro();
                
                
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
                $student = new Company();
                $student->setId($valuesArray["id"]);
                $student->setNombre($valuesArray["nombre"]);
                $student->setLocalidad($valuesArray["localidad"]);
                $student->setRubro($valuesArray["rubro"]);
                

                array_push($studentList, $student);
            }
                return $studentList;

            } 
            catch (Exception $ex) 
            {
                throw $ex;
            }
        }
        public function Modify($id, $nombre, $localidad, $rubro){
            try{

                $query = "UPDATE ".$this->tableName. " SET id = :id,  nombre = :nombre, localidad = :localidad, rubro = :rubro WHERE id = :id";
               
                $parameters['id'] = $id;
                $parameters['nombre'] = $nombre;
                $parameters['localidad'] = $localidad;
                $parameters['rubro'] = $rubro;
                   
                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query,$parameters);



            }
            catch(Exception $ex){
                throw $ex;
            }
        }

            public function Delete($id){
                try{
    
                    $query = "DELETE FROM ".$this->tableName. " WHERE id = :id";
                   
                    $parameters['id'] = $id;
                    
                    $this->connection = Connection::GetInstance();
    
                    $this->connection->ExecuteNonQuery($query,$parameters);
    
    
    
                }
                catch(Exception $ex){
                    throw $ex;
                }
            

        }
            

    }



?>