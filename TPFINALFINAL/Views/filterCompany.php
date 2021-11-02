<?php
if($_SESSION["email"] == "admin@utn.com")
    require_once(VIEWS_PATH.'nav.php');
    else {
        require_once(VIEWS_PATH."navUser.php");
    }
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Compañias</h2>
               <table class="table bg-light-alpha">
                    
                    <tbody>
                         <?php
                              foreach($studentList as $company)
                              {
                                  if($company->getNombre() == $nombre){
                                   ?>
                                        <details class ="btn btn-primary ml-auto d-block">
                                                <summary>
                                                     <?php echo $company->getNombre()?>
                                                  </summary>
                                             <p class = "table bg-light-alpha">
                                             Id de la compañia: <?php echo $company->getId();?><br>
                                             Localidad: <?php echo $company->getLocalidad();?><br>
                                             Rubro: <?php echo $company->getRubro();?><br>
                                             Vacantes: <?php echo $company->getVacantes();?>
                                             </p>
                                   <?php
                                  }
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>