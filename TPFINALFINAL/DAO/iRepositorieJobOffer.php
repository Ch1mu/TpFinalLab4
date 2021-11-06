<?php
    namespace DAO;

    use Models\jobOffer as Job;

    interface iRepositorieJob
    {
        function Add(Job $job);
        function GetAll();
    }
?>