<?php
require_once "Config/Config.php";
  session_start();
  session_destroy();
  header("location: ../Views/loginForm.php");
?>