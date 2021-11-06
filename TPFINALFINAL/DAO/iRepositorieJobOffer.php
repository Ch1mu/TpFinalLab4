<?php
    namespace DAO;

    use Models\jobOffer as Job;

    interface iRepositorieJobOffer
    {
        function Add(Job $job);
        function GetAll();
    }
?>