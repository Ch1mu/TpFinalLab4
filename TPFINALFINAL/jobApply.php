<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

use DAO\jobOfferDAO as jobOfferDAO;
use DAO\JobApplyRepository as jobApplyDAO;
use DAO\StudentDAO as StudentDAO;
use Models\jobOffer as jobOffer;
use Models\jobApply as jobApply;
  use Config\Autoload as Autoload;

  Autoload::start();


 


  if($_POST)
  {

  $studentDAO = new StudentDAO();
  $jobOfferDAO = new jobOfferDAO();
  $jobList = array();
  $studentL = array();
  $jobOfferList = array();
  $jobOfferList = $jobOfferDAO->GetAll();
  $studentL = $studentDAO->GetAll();
  $flag = 0;
  $flag1 = 0;



  foreach($studentL as $stud)
  {
      if($_SESSION["email"] == $stud->getEmail())
          {
              $nombre = $stud->getFirstName();
              $apellido = $stud->getLastName();
              $flag = 1;
          }
  }
foreach($jobOfferList as $jobOffer)
{

if($jobOffer->getOfferId() == $id)
{
  $companyID = $jobOffer->getCompanyID();
  $description = $jobOffer->getDescription();
  $jobid = $jobOffer->getJobPositionId();
  $flag1 = 1;
}
}
if($flag == 1 && $flag1 == 1)
{
    $jobApplyDAO = new jobApplyDAO();
    $jobApply = new jobApply();
    $jobApply->setNombre($description);
    $jobApply->setNombre($nombre);
    $jobApply->setApellido($apellido);
    $jobApply->setJobId($jobid);
    $jobApply->setCompId($companyID);

    $jobApplyDAO->Add($jobApply);

    echo '<script language="javascript">alert("Usted ha aplicado correctamente al trabajo!");';
      echo "window.location = 'List'; </script>";
}
  }
?>