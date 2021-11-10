<?php
  if ($_SESSION["email"] <> "admin@utn.com") 
    header("location: mainUser.php");
?>