<?php

require_once "Config/Autoload.php";
require_once "Config/Config.php";

  use DAO\accountsRepositorie as UserRepository;
  use Config\Autoload as Autoload;
  use Models\account as User;
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
    

    $flagAdmin = 0;
    $flagUser = 0;
    $flagCompany = 0;

    if ($i < count($userList)) {

    
      

       if($userList[$i]->getRole() ==  "Admin")
       {
         $flagAdmin = 1;
        
       }
       else if($userList[$i]->getRole() ==  "Student")
       {
        $flagUser = 1;
        
       }
       else if($userList[$i]->getRole() ==  "Company")
       {
        $flagCompany = 1;
        
       
      }
       
    
    if($flagAdmin == 1)
    {
      session_start();
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
     header("location: Home/Index");
    }
    else if ($flagUser == 1)
    {
      session_start();
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
      header("location: Home/mainUser");
    }
    else if($flagCompany == 1)
    {
      session_start();
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
      header("location: Home/mainCompany");
    }
    

   
}
else {
  header("location: Views/loginForm.php");
 }
  }


?>
