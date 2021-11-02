<?php
  session_start();

  if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
  } else {
    header("location: Views/loginForm.php");
  }
?>