<?php
    namespace Controllers;

    class logoutController
    {
        public function logOut()
        {
           require_once(ROOT."logout.php");
        }
        public function loginForm()
        {
            require_once(VIEWS_PATH."loginForm.php");
        }  
        public function logIn()
        {
            require_once(ROOT."login.php");
        }               
    }
?>