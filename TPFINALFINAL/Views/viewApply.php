<?php
 	require_once "logged.php";

    require_once "nav.php";
    require_once "Config/Autoload.php";
    require_once "Config/Config.php";
    
    use Config\Autoload as Autoload;
    

    Autoload::start();

    use DAO\JobOfferRepository as JobOfferRepository;
    use Models\jobOffer as jobOffer;

    $jobOffer = new JobOfferRepository();
    $JobOfferList = array();
    $JobOfferList = $jobOffer->GetAll();
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
                           foreach($JobOfferList as $JobOffers){
                               ?>
                               <tbody>
                               <tr>
                                   <th><?php echo $JobOffers->getOfferId(); ?></th>
                                   <th><?php echo $JobOffers->getNombre()."&nbsp". $JobOffers->getApellido();?></th>
                                   <th><?php echo $JobOffers->getJobId(); ?></th>
                                   <th><?php echo $JobOffers->getCompId(); ?></th>
                                </tr>
                                    <?php    
                                        }
                                    
                             ?>
                    </tbody>
               </table>
          </div>
     </section>
</main>