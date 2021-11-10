<?php
 	require_once "logged.php";

    require_once "nav.php";
    require_once "Config/Autoload.php";
    require_once "Config/Config.php";
    
    use Config\Autoload as Autoload;
    

    Autoload::start();

    use DAO\JobApplyRepository as JobApplyRepository;
    use Models\jobOffer as jobOffer;

    $jobApply = new JobApplyRepository();
    $JobApplyList = array();
    $JobApplyList = $jobApply->GetAll();
?>

<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               
               <h2 class="mb-4">Postulaciones</h2>

               <table class="table bg-light-alpha">
                   
                            <thead>
                            <tr>
                               <th>Id de Postulacion</th>
                               <th>Alumno</th>
                               <th>ID de Trabajo</th>
                               <th>Id de la Empresa</th>
                           </tr>
                            </thead>

                           
                           <?php 
                           foreach($JobApplyList as $JobApplies){
                               ?>
                               <tbody>
                               <tr>
                                   <th><?php echo $JobApplies->getOfferId(); ?></th>
                                   <th><?php echo $JobApplies->getNombre()."&nbsp". $JobOffers->getApellido();?></th>
                                   <th><?php echo $JobApplies->getJobId(); ?></th>
                                   <th><?php echo $JobApplies->getCompId(); ?></th>
                                </tr>
                                    <?php    
                                        }
                                    
                             ?>
                    </tbody>
               </table>
          </div>
     </section>
</main>