<?php
require_once("navSession.php");
require_once("__DIR__/../Config/Autoload.php");
require_once "logged.php";





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

foreach($compList as $company){
    if($company->getEmail() == $_SESSION["email"]){
        $companyID = $company->getId();
    }
}
        foreach($offerL as $offer)
        {
            if($offer->getCompanyID() == $companyID)
            {

            $limit = $offer->getVacancies();

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
                Limite de Postulantes: <?php echo $limit;  ?><br>
                </p>
                <form action="<?php echo FRONT_ROOT ?>Job/deleteOfferCompany" method="post" class="btn btn-primary ml-auto d-1">

                  <input type="number"  name = "id" value= "<?php echo $offer->getOfferId();?>" readonly hidden>

                  <button type="submit" class="">Eliminar</button> 

                </details>
           
            
                <?php
                }
        } 
   
   ?>
      </div>
   
    </div>