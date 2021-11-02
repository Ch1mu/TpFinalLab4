<?php
  require_once "Config/Autoload.php";
  require_once "Config/Config.php";
  use DAO\StudentDAO as StudentDAO;
  use Models\account as User;
  use Config\Autoload as Autoload;
  use DAO\accountsRepositorie as UserRepository;

  Autoload::start();

  $StudentDAO = new StudentDAO();
  $StudentList = array();
  $StudentList = $StudentDAO->getAll();

  $userRepository = new UserRepository();
  $accountsRepositoryall = array();
  $accountsRepositoryall = $userRepository->GetAll();

  $flag = 0;
  $flag2 = 0;

  $user = new User();
  $user->setEmail($_POST["email"]);
  $user->setPassword(password_hash($_POST["password"], PASSWORD_DEFAULT));

  foreach($accountsRepositoryall as $account)
  {
    if($_POST["email"] == $account->getEmail())
    {
      $flag = 1;
    }
  }

  if($flag == 0)
  {
    
    foreach($StudentList as $student)
    {
      if($_POST["email"] == $student->getEmail())
      {
          $flag2 = 1;
      }
    }
      if($flag2 == 1)
      {
        $userRepository->Add($user);
        echo '<script language="javascript">alert("Cuenta Creada Correctamente!");';
      echo "window.location = 'Views/loginForm.php'; </script>";
      }
      else {
          echo '<script language="javascript">alert("Ese email no esta registrado en esta institucion");';
          echo "window.location = 'Views/signupForm.php'; </script>";
      }

  }
  else {

   echo '<script language="javascript">alert("Ya hay una cuenta creada con este email");';
    echo "window.location = 'Views/signupForm.php'; </script>";
  }
 

  
?>
