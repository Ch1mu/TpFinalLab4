<?php
 require_once "navSession.php";
    require_once "logged.php";

    use DAO\careerDAO as careerDAO;
    use Models\Career as Career;

    $careerDAO  = new careerDAO();
    $list = array();
    $list = $careerDAO->GetAll();
    $careerName;
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               
               <h2 class="mb-4">Lista de Trabajos Disponibles</h2>
               <table class="table bg-light-alpha">
                    <thead>
                        
                    </thead>
                    <tbody>
                         <?php
                         
                              foreach($studentList as $job)
                              {
                                   foreach($list as $career)
                                   {
                                        if($career->getCareerId() == $job->getCareerId())
                                        $careerName = $career->getDescription();
                                   }
                                   ?>
                                        <details class ="btn btn-primary ml-auto d-block">
                                                <summary>
                                                     <?php echo $job->getDescription()?>
                                                  </summary>
                                             <p class = "table bg-light-alpha">
                                             Id del trabajo: <?php echo $job->getJobPositionId();?><br>
                                             Id de carrera universitaria: <?php echo $job->getCareerId();?><br>
                                             Nombre de la Careera universitaria:  <?php echo $careerName;?><br>
                                             </p>
                                        </details>
                                   <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>

