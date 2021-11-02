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
               
               <h2 class="mb-4">Listado de Empresas</h2>
               
               <a class="btn btn-dark ml-auto d-block" href="<?php echo FRONT_ROOT ?>Company/filterForm">Filtrar Empresas</a>
               <table class="table bg-light-alpha">
                    <thead>
                        
                    </thead>
                    <tbody>
                         <?php
                              foreach($studentList as $company)
                              {
                                   ?>
                                        <details class ="btn btn-primary ml-auto d-block">
                                                <summary>
                                                     <?php echo $company->getNombre()?>
                                                  </summary>
                                             <p class = "table bg-light-alpha">
                                             Id de la compañia: <?php echo $company->getId();?><br>
                                             Localidad: <?php echo $company->getLocalidad();?><br>
                                             Rubro: <?php echo $company->getRubro();?><br>
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