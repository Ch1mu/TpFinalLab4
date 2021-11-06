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


$companyDAO->Delete($id);

require_once(VIEWS_PATH."Companys.php");

?>