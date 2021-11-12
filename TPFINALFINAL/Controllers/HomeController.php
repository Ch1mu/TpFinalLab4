<?php
    namespace Controllers;

    class HomeController
    {
        public function Index($message = "")
        {
            require_once(VIEWS_PATH."AdminPage.php");
        }
        public function mainUser($message = "")
        {
            require_once(VIEWS_PATH."userPage.php");
        }
        public function signupForm()
        {
            require_once(VIEWS_PATH."singupForm.php");
        }
        public function mainCompany($message = "")
        {
            require_once(VIEWS_PATH."companyPage.php");
        }
             
    }
?>