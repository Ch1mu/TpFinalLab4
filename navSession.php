<?php

require_once("__DIR__/../Config/Autoload.php");

use DAO\accountsRepositorie as accountDAO;

$account = new accountDAO();
$accountList = array();
$accountList = $account->getAll();

foreach($accountList as $account){
    if($account->getEmail() == $_SESSION["email"]){
        if($account->getRole() == "Admin"){
            require_once(VIEWS_PATH."nav.php");
        }
        else if($account->getRole() == "Student"){
            require_once(VIEWS_PATH."");
        }
        else if($account->getRole() == "Company"){
            require_once(VIEWS_PATH."navCompany.php");
        }
    }
}


?>