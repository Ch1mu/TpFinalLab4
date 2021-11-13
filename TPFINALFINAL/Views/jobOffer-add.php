<?php
    require_once('nav.php');
    require_once "logged.php";
    require_once "isAdmin.php";
    
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
          
               
               <h2 class="mb-4">Agregar Oferta Laboral</h2>

               <form action="<?php echo FRONT_ROOT ?>Job/addOffer" method="post" class="bg-light-alpha p-5">
                    <div class="row">
                    <div class="col-lg-">
                              <div class="form-group">
                              <br>
                                   <label for="">Nombre de la empresa</label>
                                   
                                   <select name="nombre" id="nombre">
                                        <?php
                                        foreach($companyList as $company)
                                        {
                                        if($company->getActive() == 1)
                                        {?>
                                             <option value="<?php echo $company->getNombre()?>"><?php echo $company->getNombre()?></option>
                                             <?php }
                                        
                                        
                                        }
                                        ?>
                                             
                                   
                                   </select>
                                   
                              </div>
                         </div>                         
                         <div class="col-lg-">
                              <div class="form-group">
                              <br>
                                   <label for="">Posicion Laboral</label>
                                   <select name="description" id="description">
                                        <?php
                                        foreach($list as $job)
                                        {?>
                                        <option value="<?php echo $job->getDescription()?>"><?php echo $job->getDescription()?></option>
                                        <?php
                                        }
                                        ?>
                                             
                                   
                                   </select>
                                   <label for="">Limite Aplicaciones </label>
                                   <input type="number" name= "vacancies" value="" class="form-control">
                                  
                              </div>
                         </div>
                         
                         
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
          
     </section>
</main>