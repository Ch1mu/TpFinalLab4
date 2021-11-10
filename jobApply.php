<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

use DAO\JobOfferRepository as jobOfferDAO;
use DAO\StudentDAO as StudentDAO;
use DAO\JobRepositorie as jobDAO;
use Models\jobOffer as jobOffer;
  use Config\Autoload as Autoload;
  Autoload::start();

$flag = 0;
$flag1 = 0;
 


  if($_POST)
  {

  $studentDAO = new StudentDAO();
  $jobDAO = new jobDAO();
  $jobOfferDAO = new jobOfferDAO();
  $jobList = array();
  $studentL = array();
  $jobOfferList = array();
  $jobOfferList = $jobOfferDAO->GetAll();
  $jobList = $jobDAO->GetAll();
  $studentL = $studentDAO->GetAll();

  
 foreach ($jobOfferList as $offer) 
 {
  if($_SESSION["email"] == $offer->getEmail())
  {
    $flag1 =1;
    
  }

 }

 if($flag1 == "0")
 {

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
  else {
    {
      echo '<script language="javascript">alert("Usted ya se ha postulado anteriormente");';
      echo "window.location = 'List'; </script>";
    }
  }
}
    




    



?>