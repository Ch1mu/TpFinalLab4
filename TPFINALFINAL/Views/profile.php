<?php
require_once("navUser.php");
require_once("__DIR__/../Config/Autoload.php");
require_once "logged.php";


use DAO\StudentDAO as StudentDAO;
use DAO\careerDAO as CareerDAO;
use DAO\jobApplyRepository as jobOfferRepository;
use DAO\JobRepositorie as jobDAO;
use DAO\companyRepository as companyRepository;
use Models\Student as Student;
use Models\Career as Career;
use Config\Autoload as Autoload;

Autoload::Start();

    $list = new StudentDAO();
    $studentList = array();
    $studentList = $list->GetAll();
    $careerDAO = new CareerDAO();
    $careerList = array();
    $careerList = $careerDAO->GetAll();
    $careerName;

    foreach($studentList as $student){
    if($student->getEmail() == $_SESSION["email"]){
    ?><?php
      foreach($careerList as $career)
    {
        if($career->getCareerId() == $student->getCareerId())
        {
            $careerName = $career->getDescription();
        }
    }
?>
<div class="container">
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
        Nombre de la carrera: <?php echo $careerName;?><br>
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
    </details>


    <br>
<details class = "btn btn-primary ml-auto d-block">
    <?php
        $offerList = new jobOfferRepository();
        $applyList = array();
        $applyList = $offerList->GetAll();
        $jobDAO = new jobDAO();
        $jobList = array();
        $jobList = $jobDAO->GetAll();
        $compDAO = new companyRepository();
        $compList = array();
        $compList = $compDAO->GetAll();
     ?> 
        <summary>Postulaciones de trabajo activas</summary>
        <p class = "table bg-light-alpha">
            
        <?php foreach($applyList as $apply)
        {
            foreach($jobList as $job)
            {
                if($job->getJobPositionId() == $apply->getJobId())
                {
                    $jobName = $job->getDescription();
                }

            }
            foreach($compList as $comp)
            {
                if($comp->getId() == $apply->getCompId())
                {
                    $compName = $comp->getNombre();
                }

            }
            ?>

             <details class = "btn btn-primary ml-auto d-block">
            <summary><?php echo $jobName; ?></summary>
        <?php
            if($apply->getEmail() == $_SESSION["email"]){ ?> 
                <br>
                Empresa: <?php echo $compName; ?> <br>
                <form action="<?php echo FRONT_ROOT ?>Job/deleteApply" method="post" class="btn btn-dark ml-auto d-1">
                  <input type="number"  name = "id" value= "<?php echo $apply->getOfferId();?>" readonly hidden>
                  <button type="submit" class="btn btn-dark ml-auto d-block">Eliminar Postulacion</button> 

                </details>
            <?php
            
        }
    }
   
    ?>
    
    </details>
    </div>
    



