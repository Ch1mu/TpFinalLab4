<?php
if($_SESSION["email"] == "admin@utn.com")
    require_once('nav.php');
    else {
        require_once("navUser.php");
    }
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
                                   ?>
                                        <details class ="btn btn-primary ml-auto d-block">
                                                <summary>
                                                     <?php echo $job->getDescription()?>
                                                  </summary>
                                             <p class = "table bg-light-alpha">
                                             Id del trabajo: <?php echo $job->getJobPositionId();?><br>
                                             Id de carrera universitaria: <?php echo $job->getCareerId();?><br>
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