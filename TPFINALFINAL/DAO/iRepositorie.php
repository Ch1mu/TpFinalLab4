<?php
    namespace DAO;

    use Models\Student as student;

    interface iRepositorie
    {
        function Add(student $student);
        function GetAll();
    }
?>