<?php

require_once("__DIR__/../Config/Autoload.php");

use DAO\accountsRepositorie as accountDAO;

$account = new accountDAO();
$accountList = array();
$accountList = $account->getAll();

foreach($accountList as $account){
    if($account->getEmail() == $_SESSION["email"]){
        if($account->getRole() == "Company"){
            Header("location: ");
        }
        else if($account->getRole() == "Student"){
          Header("location:".FRONT_ROOT."Home/mainUser");
        }
        else if($account->getRole() == "Admin"){
          Header("location:".FRONT_ROOT."Home/Index");
        }
    }
}


?>