<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

use DAO\accountsRepositorie as accountDAO;
  use Config\Autoload as Autoload;

  Autoload::start();

  
    

$companyDAO = new accountDAO();
$companyList = $companyDAO->GetAll();
$job;


foreach($companyList as $company)
{
    if($company->getEmail() == $_SESSION["email"])
    {
        $job = $company->getJob();
    }
}
if($job <> null)
{
unlink("Data/accounts.json");
foreach($companyList as $company)
{
    if($company->getEmail() <> $_SESSION["email"])
    {
        $companyDAO->add($company);
    }
    else 
    {
            $company->setJob($jobPositionId);
            $companyDAO->add($company);  
            echo '<script language="javascript">alert("te has postulado Exitosamente");';
            echo "window.location = '../mainUser.php'; </script>";
    }
}
}
else {
    
    echo '<script language="javascript">alert("No te puedes postular mas de una vez");';
    echo "window.location = '../mainUser.php'; </script>";
}





?>