<?php
    namespace DAO;

    use Models\Job as Job;

    interface iRepositorieJob
    {
        function Add(Job $job);
        function GetAll();
    }
?>