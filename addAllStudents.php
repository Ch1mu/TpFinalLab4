<?php
use DAO\StudentDAO as StudentDAO;
use DAO\StudentDAOJson as Json;
use Config\Autoload as Autoload;
Autoload::Start();


$json  = new Json();
$jsonList = array();
$jsonList = $json->GetAll();
$bdd = new StudentDAO();


foreach($jsonList as $student)
{
    
    $bdd->Add($student);
}


?>