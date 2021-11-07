<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

use DAO\JobOfferRepository as jobOfferDAO;
use DAO\StudentDAO as StudentDAO;
use DAO\JobRepositorie as jobDAO;

use Models\jobOffer as jobOffer;
  use Config\Autoload as Autoload;
$flag = 0;
  Autoload::start();
  if($_POST)
  {
  $studentDAO = new StudentDAO();
  $jobDAO = new jobDAO();
  $jobList = array();
  $studentL = array();
  $jobList = $jobDAO->getAll();
  $studentL = $studentDAO->getAll();

    foreach($studentL as $stud)
    {
        if($_SESSION["email"] == $stud->getEmail())
            {
                $nombre = $stud->getFirstName();
                $apellido = $stud->getLastName();
            }
    }
    foreach($jobList as $stud)
    {
        if($jobPositionId == $stud->getJobPositionId())
            {
                $compId = $stud->getCompanyIds();
                $flag = 1;
            }
    }


if($flag == 1)
{


  
    $student = new jobOffer();
    $companyDAO = new jobOfferDAO();
    $companyList = $companyDAO->GetAll();
    $student->setNombre($nombre);
    $student->setApellido($apellido);
    $student->setJobId($_POST["jobPositionId"]);
    $student->setCompId($compId);

    $companyDAO->Add($student);

    echo '<script language="javascript">alert("Usted ha aplicado correctamente al trabajo!");';
      echo "window.location = 'List'; </script>";
}
else {
    {
        echo '<script language="javascript">alert("No existe un trabajo con esa ID");';
      echo "window.location = 'List'; </script>";
    }
}
  }
    




    



?>