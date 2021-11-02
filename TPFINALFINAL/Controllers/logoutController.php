<?php
    namespace Controllers;

    class logoutController
    {
        public function logOut()
        {
            require_once("logout.php");
        }
        public function logIn()
        {
            require_once(ROOT."login.php");
        }               
    }
?>