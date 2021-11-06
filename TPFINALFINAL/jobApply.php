<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

use DAO\accountsRepositorie as accountDAO;
  use Config\Autoload as Autoload;

  Autoload::start();

  
    

$companyDAO = new accountDAO();
$companyList = $companyDAO->GetAll();




foreach($companyList as $company)
{
    if($company->getEmail() == $_SESSION["email"])
    {
        $companyDAO->ModifyApply($jobPositionId);
        echo '<script language="javascript">alert("te has postulado Exitosamente");';
        echo "window.location = '../mainUser.php'; </script>";
    }


}
    



?>