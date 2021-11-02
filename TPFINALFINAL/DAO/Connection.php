<?php

namespace DAO;

use \PDO as PDO;
use \Exception as Exception;
use DAO\QueryType as QueryType;

class Connection
{
    private $pdo = null;
    private $pdoStatement = null;
    private static $instance = null;
}
private function __construct()
{
    try 
    {
        $this->pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     } 
   catch (Exception $th) 
    {
        throw $th;
    }
}
