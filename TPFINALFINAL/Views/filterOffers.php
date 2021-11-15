<?php
 require_once "navSession.php";
    require_once "logged.php";
require_once "isAdmin.php";
?>
<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">
            <h2 class="mb-4">Filtrado de Ofertas</h2>
            <table class="table bg-light-alpha">

                <tbody>
                    <?php
                              foreach($jobOfferL as $offer)
                              { 
                                   foreach($list as $careerN)
                                   {
                                       
                                   if($careerN->getDescription() == $career)
                                   {
                                        $careerId = $careerN->getCareerId();
                                        $careerName = $careerN->getDescription();
                                       
                                   }
                              }
                         
                                   foreach($companyList as $company)
                                   {
                                        if($offer->getCompanyID() == $company->getId())
                                        {
                                             $compName = $company->getNombre();
                                        }
                                   }
                                  if($career!= "" && $jobName != "")
                                  {

                                  
                                  if($offer->getDescription() == $jobName  && $careerId == $offer->getCareerId()) {
                                   ?>
                    <details class="btn btn-primary ml-auto d-block">
                        <summary>
                            <?php echo $offer->getDescription()?>
                        </summary>
                        <p class="table bg-light-alpha">
                            Id de la Oferta: <?php echo $offer->getOfferId();?><br>
                            Empresa: <?php echo $compName;?><br>

                            Limite Aplicaciones: <?php echo $offer->getVacancies();?><br>
                        </p>

                        <form action="<?php echo FRONT_ROOT ?>Job/editOfferForm" method="post"
                            class="btn btn-primary ml-auto d-1">

                            <input type="number" name="id" value="<?php echo $offer->getOfferId();?>" hidden>

                            <button type="submit" class="">Editar</button>
                        </form>

                        <form action="<?php echo FRONT_ROOT ?>Job/deleteOffer" method="post"
                            class="btn btn-primary ml-auto d">

                            <input type="number" name="id" value="<?php echo $offer->getOfferId();?>" readonly hidden>

                            <button type="submit" class="">Eliminar</button>
                    </details>
                    <?php
                                  }
                              }
                              else if($career != "" && $jobName == "")
                                  {

                                  if($offer->getCareerId() == $careerId){
                                   ?>
                    <details class="btn btn-primary ml-auto d-block">
                        <summary>
                            <?php echo $offer->getDescription()?>
                        </summary>
                        <p class="table bg-light-alpha">
                            Id de la Oferta: <?php echo $offer->getOfferId();?><br>
                            Empresa: <?php echo $compName;?><br>

                            Limite Aplicaciones: <?php echo $offer->getVacancies();?><br>
                        </p>
                        <form action="<?php echo FRONT_ROOT ?>Job/editOfferForm" method="post"
                            class="btn btn-primary ml-auto d-1">

                            <input type="number" name="id" value="<?php echo $offer->getOfferId();?>" hidden>

                            <button type="submit" class="">Editar</button>
                        </form>
                        <form action="<?php echo FRONT_ROOT ?>Job/deleteOffer" method="post"
                            class="btn btn-primary ml-auto d-1">

                            <input type="number" name="id" value="<?php echo $offer->getOfferId();?>" readonly hidden>

                            <button type="submit" class="">Eliminar</button>
                    </details>
                    <?php
                                  }
                              }
                              else if($career == "" && $jobName != "")
                                  {

                                  if($offer->getDescription() ==  $jobName){
                                   ?>
                    <details class="btn btn-primary ml-auto d-block">
                        <summary>
                            <?php echo $offer->getDescription()?>
                        </summary>
                        <p class="table bg-light-alpha">
                            Id de la Oferta: <?php echo $offer->getOfferId();?><br>
                            Empresa: <?php echo $compName;?><br>
                            Limite Aplicaciones: <?php echo $offer->getVacancies();?><br>
                        </p>
                        <form action="<?php echo FRONT_ROOT ?>Job/editOfferForm" method="post"
                            class="btn btn-primary ml-auto d-1">

                            <input type="number" name="id" value="<?php echo $offer->getOfferId();?>" hidden>

                            <button type="submit" class="">Editar</button>
                        </form>

                        <form action="<?php echo FRONT_ROOT ?>Job/deleteOffer" method="post"
                            class="btn btn-primary ml-auto d-1">

                            <input type="number" name="id" value="<?php echo $offer->getOfferId();?>" readonly hidden>

                            <button type="submit">Eliminar</button>
                    </details>
                    <?php
                                  }
                              }

                            }
                         
                         ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>