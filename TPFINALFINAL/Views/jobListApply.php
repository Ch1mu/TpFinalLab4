<?php
 	require_once "logged.php";

    require_once("navUser.php");
    require_once("DIR/../Config/Autoload.php");

    use Models\Student as Student;
    use DAO\StudentDAO as StudentDAO;
    use DAO\companyRepository as companyDAO;
    use Config\Autoload as Autoload;
    Autoload::Start();
?>


<main class="py-5">
    
<section id="listado" class="mb-5">
    
<div class="container">  

<h2 class="mb-4">Trabajos que coinciden con tu carrera</h2>


<?php



$studentDAO = new StudentDAO();
$companyDAO = new companyDAO();
$companyL = array();
$studentList = array();
$companyL = $companyDAO->GetAll();
$studentList = $studentDAO->GetAll();

  foreach($studentList as $student)
  {
  if($student->getEmail() == $_SESSION["email"])
  {
 
    foreach($jobList as $job)
    {
         
        if($job->getCareerId() == $student->getCareerId())
        {
         ?>
              <details class ="btn btn-primary ml-auto d-block">
                      <summary>
                           <?php echo $job->getDescription()?>
                        </summary>
                   <p class = "table bg-light-alpha">                       
                   Id del trabajo: <?php echo $job->getJobPositionId();?><br>
                   <form action="Job/Apply" method="post" class="bg-light-alpha p-2 ">
                        <?php $id = $job->getJobPositionId(); ?>
                        <button type="submit" class="btn btn-dark ml-auto d-block">Postularse</button>
                   </form>
                   <?php 
                 
                   ?>
                   </p>
                   
              </details>
              
         <?php
        }
    }
}
}
?>
<br>

<form action="<?php echo FRONT_ROOT ?>Job/Apply" method="post" class="bg-light-alpha p-2 ">
                    <h2>Postularse para una Empresa </h2>
                    <h5>Recorda que solo puedes estar postulado en una empresa a la vez</h5>
                                    <br>
                                    <label for="">ID de Trabajo</label>
                                   
                                   <input type="number" name="id" value="" class="form-control">
                           <br>
                         
                        
                         <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>     
</form>

</div>
     </section>
     
</main>

