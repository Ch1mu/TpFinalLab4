<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

use DAO\accountsRepositorie as accountDAO;
  use Config\Autoload as Autoload;

  Autoload::start();

  
    

$companyDAO = new accountDAO();
$companyList = $companyDAO->GetAll();





unlink("Data/accounts.json");

foreach($companyList as $company)
{
<<<<<<< HEAD
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
=======
if($_SESSION["job"] == 0){
    $_SESSION["job"] = $jobID;
}
else{
    echo '<script language="javascript">alert("Ya te has postulado a un trabajo anteriormente");';
    echo "window.location = 'Views/Jobs.php'; </script>";
    asjdgkjasgfasd
}
>>>>>>> parent of 6365664 (Merge branch 'master' of https://github.com/Ch1mu/TpFinalLab4)
}
    






?>