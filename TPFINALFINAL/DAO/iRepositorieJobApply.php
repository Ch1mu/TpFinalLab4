<?php
    namespace DAO;

    use Models\jobOffer as Job;

    interface iRepositorieJobApply
    {
        function Add(Job $job);
        function GetAll();
    }
?>