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
  $applyDAO = new jobApplyDAO();
  $applyList = array();
  $jobList = array();
  $studentL = array();
  $jobOfferList = array();
  $jobOfferList = $jobOfferDAO->GetAll();
  $applyList = $applyDAO->GetAll();
  $studentL = $studentDAO->GetAll();
  $flag = 0;
  $flag1 = 0;
  $flag2 = 1;
  $flag3 = 1;
  $i = 1;
  



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
  $vacancies = $jobOffer->getVacancies();
  $jobid = $jobOffer->getJobPositionId();
  $flag1 = 1;
}
}

foreach($applyList as $apply)
{
  if($apply->getOfferId() == $id && $apply->getEmail() == $_SESSION["email"])
  {
$flag3 = 0;
  }
}

foreach($applyList as $apply)
{
  if($apply->getOfferId() == $id && $flag3 == 1)
  {
    
    $i++;
    if($i < $vacancies)
    {
      $flag2 = 1;
    }
    else {
      $flag2 = 0;
    }
  }
}

if($flag2 == 0)
{
  $jobOfferDAO->setInactive($id);
}


if($flag == 1 && $flag1 == 1 && $flag2 == 1 && $flag3 == 1)
{
    
    $jobApply = new jobApply();
    $jobApply->setOfferId($id);
    $jobApply->setNombre($nombre);
    $jobApply->setApellido($apellido);
    $jobApply->setJobId($jobid);
    $jobApply->setCompId($companyID);
    

    $applyDAO->Add($jobApply);

    echo '<script language="javascript">alert("Usted ha aplicado correctamente al trabajo!");';
      echo "window.location = 'List'; </script>";
}
if($flag3 == 0)
{
  echo '<script language="javascript">alert("Usted no puede volver a aplicar al mismo trabajo!");';
      echo "window.location = 'List'; </script>";
}

  }
?>