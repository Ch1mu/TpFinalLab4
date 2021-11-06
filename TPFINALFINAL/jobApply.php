<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

use DAO\JobOfferRepository as accountDAO;
use Models\jobOffer as jobOffer;
  use Config\Autoload as Autoload;

  Autoload::start();

  
    
$student = new jobOffer();
$companyDAO = new accountDAO();
$companyList = $companyDAO->GetAll();

$companyDAO->Add()



    



?>