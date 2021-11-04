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
            

    }



?>