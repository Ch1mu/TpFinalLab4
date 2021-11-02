<?php
    namespace DAO;

    use Models\account as account;

    interface iRepositorieAccount
    {
        function Add(account $student);
        function GetAll();
    }
?>