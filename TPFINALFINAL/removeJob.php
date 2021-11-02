<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

use DAO\JobRepositorie as JobDAO;
  use Config\Autoload as Autoload;

  Autoload::start();

  
  if($_POST)
    {
        $id = $_POST["jobPositionId"];
    }
    

$companyDAO = new JobDAO();
$companyList = $companyDAO->GetAll();
$companyNewList = array();



unlink("Data/jobs.json");

foreach($companyList as $company)
{
    if($company->getJobPositionId() <> $id)
    {
        $companyDAO->add($company);
    }
}



require_once(VIEWS_PATH."Jobs.php");

?>