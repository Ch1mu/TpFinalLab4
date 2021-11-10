<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

  use DAO\accountsRepositorie as UserRepository;
  use Config\Autoload as Autoload;

  Autoload::start();
  $userRepository = new UserRepository();

  $userList = $userRepository->GetAll();

  if ($_POST) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "Email: $email<br>";
    echo "Password: $password<br>";

    
     
    
    $i = 0;

    while ($i < count($userList) && ($userList[$i]->getEmail() != $email || !password_verify($password, $userList[$i]->getPassword()))) {
      $i++;
    }

    
    if ($i < count($userList)) {
      if($email == "admin@utn.com" && $password == "admin")
    {
      session_start();
      $_SESSION["email"] = $email;
      header("location: Home/Index");
    }
    else {
      session_start();
      $_SESSION["email"] = $email;
      header("location: Home/mainUser");
    } 
    }
    else {
      header("location: Views/loginForm.php");
  }
}

?>
