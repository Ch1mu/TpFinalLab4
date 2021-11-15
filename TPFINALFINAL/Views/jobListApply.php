<?php
 	require_once "logged.php";

    require_once("navUser.php");
    require_once "isUser.php";
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
             $jobActive = $job->getActive();
             
          foreach($companyL as $company)
          {
               if($job->getCompanyID() == $company->getId())
               {
                    $companyID = $company->getNombre();
                    $placement = $company->getLocalidad();
                    $Companyactive = $company->getActive();
               }
          }
          if($Companyactive == 1 && $jobActive == 1)
          {

          
         ?>
         
              <details class ="btn btn-primary ml-auto d-block">
                      <summary>
                           <?php echo $job->getDescription()?>
                        </summary>
                   <p class = "table bg-light-alpha">                       
                   Id del trabajo: <?php echo $job->getJobPositionId();?><br>
                   Compañia: <?php echo $companyID; ?><br>
                   Localidad: <?php echo $placement ?>
                   <form action="<?php echo FRONT_ROOT ?>Job/Apply" method="post" class="btn btn-dark ml-auto d-1">
                  <input type="number"  name = "id" value= "<?php echo $job->getOfferId();?>" readonly hidden>
                  <button type="submit" class="btn btn-dark ml-auto d-block">Aplicar</button>   
                    </form>
                   </p>
                   
              </details>
              
         <?php
        }
    }
}
}
}
?>
<br>



</div>
     </section>
     
</main>

