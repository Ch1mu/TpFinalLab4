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
        public function singupForm()
        {
            require_once(VIEWS_PATH."singupForm.php");
        }        
    }
?>