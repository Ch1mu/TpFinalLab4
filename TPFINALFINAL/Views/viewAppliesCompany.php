<?php
 	require_once "logged.php";

     require_once "navSession.php";
    require_once "Config/Autoload.php";
    require_once "Config/Config.php";
    
    use Config\Autoload as Autoload;
    

    Autoload::start();

    use DAO\JobApplyRepository as JobApplyRepository;
    use Models\jobApply as jobApply;

    $jobApply = new JobApplyRepository();
    $JobApplyList = array();
    $JobApplyList = $jobApply->GetAll();

    $companyID;

    foreach($compList as $company){
        if($company->getEmail() == $_SESSION["email"]){
            $companyID = $company->getId();
        }
    }
   
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
                        <th>Email</th>
                        <th>Posicion Laboral</th>
                    </tr>
                </thead>


                <?php 
                           foreach($JobApplyList as $JobApplies){
                            foreach($jobL as $job)
                            {
                             if($job->getJobPositionId() == $JobApplies->getJobId())
                           {
                            $position = $job->getDescription();
                                 }
                                   }
                               ?>
                <tbody>
                    <?php if($JobApplies->getCompId() == $companyID){?>
                    <tr>
                        <th><?php echo $JobApplies->getOfferId(); ?></th>
                        <th><?php echo $JobApplies->getNombre()."&nbsp". $JobApplies->getApellido();?></th>
                        <th><?php echo $JobApplies->getEmail(); ?></th>
                        <th><?php echo $position; ?></th>
                    </tr>
                    <?php 
                                            }   
                                        }
                                    
                             ?>
                </tbody>
            </table>
        </div>
    </section>
</main>