<?php
    namespace DAO;

    use Models\Company as company;

    interface iRepositoriesCompany
    {
        function Add(company $company);
        function GetAll();
    }
?>