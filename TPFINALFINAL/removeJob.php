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


$companyDAO->Delete($id);




require_once(VIEWS_PATH."Jobs.php");

?>