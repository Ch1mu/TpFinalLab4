<?php
require_once("navUser.php");
require_once("__DIR__/../Config/Autoload.php");
require_once "logged.php";


use DAO\StudentDAO as StudentDAO;
use DAO\jobOfferRepository as jobOfferRepository;
use Models\Student as Student;
use Config\Autoload as Autoload;

Autoload::Start();

    $list = new StudentDAO();
    $studentList = array();
    $studentList = $list->GetAll();

    foreach($studentList as $student){
    if($student->getEmail() == $_SESSION["email"]){
    ?>

    <br><br><br><br><br>
    <details class = "btn btn-primary ml-auto d-block">
        <summary>Datos Personales</summary>
        <p class = "table bg-light-alpha">
        Nombre Completo: <?php echo $student->getFirstName() , $student->getLastName();?><br>
        DNI: <?php echo $student->getDNI();?><br>
        Genero: <?php echo $student->getGender();?><br>
        Fecha de Nacimiento: <?php echo $student->getBirthDate();?><br>
        Email: <?php echo $student->getEmail();?><br>
        Numero de Telefono: <?php echo $student->getPhoneNumber();?><br>
        
   
    </details>
    <br>
    
    <details class = "btn btn-primary ml-auto d-block">
        <summary>Datos Academicos</summary>
        <p class = "table bg-light-alpha">
        Id del estudiante: <?php echo $student->getStudentId();?><br>
        Id de la carrera: <?php echo $student->getCareerId();?><br>
        Numero de Archivo: <?php echo $student->getFileNumber();?>
        <?php 
        if($student->getActive() == true){
            ?><p class = "table bg-light-alpha">Estado: Activo</p>
            <?php
            }
             else{
                ?> <p class = "table bg-light-alpha">Estado: Inactivo</p>
                <?php
            }
        }
    }
        ?>
    
    <br>
<details class = "btn btn-primary ml-auto d-block">
    <?php
        $offerList = new jobOfferRepository();
        $applyList = array();
        $applyList = $offerList->GetAll();
     ?> 
        <summary>Postulaciones de trabajo activas</summary>
        <p class = "table bg-light-alpha">
        <?php foreach($applyList as $apply){
            if($apply->getEmail() == $student->getEmail()){ ?> 
                Id del trabajo: <?php echo $apply->getJobId(); ?> <br>
                Id de la empresa: <?php echo $apply->getCompId(); ?> <br>
            }
        }
    }
    </details>
    
    



