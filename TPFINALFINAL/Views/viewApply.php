<?php
 	require_once "logged.php";

     require_once "navSession.php";
    require_once "Config/Autoload.php";
    require_once "Config/Config.php";
    
    use Config\Autoload as Autoload;
    

    Autoload::start();

    use DAO\JobApplyRepository as JobApplyRepository;
    use DAO\companyRepository as companyDAO;
    use DAO\jobRepositorie as jobDAO;
    

    $jobApply = new JobApplyRepository();
    $JobApplyList = array();
    $JobApplyList = $jobApply->GetAll();
    $jobDAO = new jobDAO();
    $jobL = array();
    $jobL = $jobDAO->GetAll();
    $companyDAO = new companyDAO();
    $companyL = array();
    $companyL = $companyDAO->GetAll();
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
                               <th>Nombre de la posicion</th>
                               <th>Nombre de la Empresa</th>
                           </tr>
                            </thead>

                           
                           <?php 
                           foreach($JobApplyList as $JobApplies){
                                foreach($companyL as $company)
                                {
                                    if($JobApplies->getCompId() == $company->getId())
                                    {
                                        $nombre = $company->getNombre();
                                    }
                                }
                                foreach($jobL as $job)
                                {
                                    if($job->getJobPositionId() == $JobApplies->getJobId())
                                    {
                                        $position = $job->getDescription();
                                    }
                                }
                               ?>
                               <tbody>
                               <tr>
                                   <th><?php echo $JobApplies->getApplyId(); ?></th>
                                   <th><?php echo $JobApplies->getNombre()."&nbsp". $JobApplies->getApellido();?></th>
                                   <th><?php echo $position; ?></th>
                                   <th><?php echo $nombre; ?></th>
                                </tr>
                                    <?php    
                                        }
                                    
                             ?>
                    </tbody>
               </table>
          </div>
     </section>
</main>