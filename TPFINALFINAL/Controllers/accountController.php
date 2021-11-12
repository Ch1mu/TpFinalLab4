<?php
    namespace Controllers;

    class accountController
    {
        public function addForm($message = "")
        {
            require_once(VIEWS_PATH."addUserAdmin.php");
        }
        public function Add($email, $password, $role)
        {
            require_once(ROOT."adduserAdmin.php");
        }
             
    }
?>