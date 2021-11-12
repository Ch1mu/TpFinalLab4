<?php
require_once("nav.php");
require_once("__DIR__/../Config/Autoload.php");
require_once "logged.php";
require_once "isAdmin.php";




use DAO\jobOfferDAO as jobOfferRepository;
use DAO\JobRepositorie as jobDAO;
use DAO\companyRepository as companyRepository;


use Config\Autoload as Autoload;

Autoload::Start();
?>

    <?php
        $offerList = new jobOfferRepository();
        $offerL = array();
        $offerL = $offerList->GetAll();
        $jobDAO = new jobDAO();
        $jobList = array();
        $jobList = $jobDAO->GetAll();
        $compDAO = new companyRepository();
        $compList = array();
        $compList = $compDAO->GetAll();
     ?> 
     <br>
    <center><h1>Gestionar Ofertas Laborales</h1></center>
   <div class="container">

   <br><br>
        <p class = "table bg-light-alpha">
            
        <?php 

        foreach($offerL as $offer)
        {
            

            foreach($jobList as $job)
            {
                if($job->getJobPositionId() == $offer->getJobPositionId())
                {
                    $jobName = $job->getDescription();
                }

            }

            foreach($compList as $comp)
            {
                if($comp->getId() == $offer->getCompanyID())
                {
                    $compName = $comp->getNombre();
                }

            }
            ?>
            
            <details class = "btn btn-primary ml-auto d-block">
             
            <summary><?php echo $jobName; ?></summary>
                <br>
                <p class =  "table bg-light-alpha">
                Empresa: <?php echo $compName; ?> <br>
                </p>
                <form action="<?php echo FRONT_ROOT ?>Job/deleteOffer" method="post" class="btn btn-primary ml-auto d-1">

                  <input type="number"  name = "id" value= "<?php echo $offer->getOfferId();?>" readonly hidden>

                  <button type="submit" class="">Eliminar</button> 

                </details>
           
            
                <?php
        } 
   
   ?>
      </div>
   
    </div>