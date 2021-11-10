<?php
    namespace DAO;

    use Models\JobOffer as Student;

    interface IjobOfferDAO
    {
        function Add(Student $student);
        function GetAll();
    }
?>