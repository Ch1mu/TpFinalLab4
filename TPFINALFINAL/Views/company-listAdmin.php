<?php
     require_once "navSession.php";

    require_once "logged.php";

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
                                   if($company->getActive() == 1)
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
                                             Email: <?php echo $company->getEmail();?><br>
                                             </p>
                                             <form action="<?php echo FRONT_ROOT ?>company/editCompany" method="post" >
                                        <input type="number"  name = "id" value= "<?php echo $company->getId();?>" readonly hidden>
                                        <button type="submit" >Editar</button> 
                                   </form>
                                   
                                
                                        <form action="<?php echo FRONT_ROOT ?>company/Remove" method="post" >

                                        <input type="number"  name = "id" value= "<?php echo $company->getId();?>" readonly hidden>

                                        <button type="submit" >Eliminar</button> 
                                        
                                        </form>
                                             
                                             
                                        </details<?php
                                       
                                   }
                              }
                         ?>
                         
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>