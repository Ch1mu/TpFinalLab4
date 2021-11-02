<?php
    require_once("navUser.php");
    require_once("DIR/../Config/Autoload.php");

    use Models\Student as Student;
    use DAO\StudentDAO as StudentDAO;
    use Config\Autoload as Autoload;
    Autoload::Start();
?>

<main class="py-5">
    
<section id="listado" class="mb-5">
    
<div class="container">  

<h2 class="mb-4">Trabajos que coinciden con tu carrera</h2>


<?php



$studentDAO = new StudentDAO();
$studentList = array();
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
                   </p>
                   
              </details>
         <?php
        }
    }
}
}
?>
<br>
<form action="<?php echo FRONT_ROOT ?>Job/JobApply" method="post" class="bg-light-alpha p-2">
                    
                                    <br>
                                    <label for="">ID de Trabajo</label>
                                   
                                   <input type="number" name="" value="" class="form-control">
                           <br>
                         
                        
                         <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>     
</form>
     </section>
</main>