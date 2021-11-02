<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

use DAO\companyRepository as CompanyDAO;
  use Config\Autoload as Autoload;

  Autoload::start();

  
  if($_POST)
    {
        $id = $_POST["id"];
    }
    

$companyDAO = new CompanyDAO();
$companyList = $companyDAO->GetAll();
$companyNewList = array();



unlink("Data/company.json");

foreach($companyList as $company)
{
    if($company->getId() <> $id)
    {
        $companyDAO->add($company);
    }
}



require_once(VIEWS_PATH."Companys.php");

?>