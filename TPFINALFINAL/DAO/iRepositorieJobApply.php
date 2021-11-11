<?php
    namespace DAO;

    use Models\jobApply as Job;

    interface iRepositorieJobApply
    {
        function Add(Job $job);
        function GetAll();
    }
?>