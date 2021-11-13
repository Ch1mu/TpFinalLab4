<?php
    require_once('navCompany.php');
    require_once "logged.php";

   

    foreach($companyList as $company){
        if($company->getEmail() == $_SESSION["email"]){
            $companyID = $company->getNombre();
            
            
        }
    }
  
    
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
          
               
               <h2 class="mb-4">Agregar Oferta Laboral</h2>

               <form action="<?php echo FRONT_ROOT ?>job/addOfferCompany" method="post" class="bg-light-alpha p-5">
                    <div class="row">
                    
                                          
                         <div class="col-lg-">
                              <div class="form-group">
                              <br>
                                   <label for="">Posicion Laboral</label>
                                   <select name="description" id="description">
                                        <?php
                                        foreach($list as $job)
                                        {?>
                                        
                                        <option name= "description" value="<?php echo $job->getDescription();?>"><?php echo $job->getDescription();?></option>
                                        <?php
                                        
                                        }
                                        
                                        ?>
                                        
                                   </select>
                                   <br>
                                   <label for="">Limite Aplicaciones</label>
                                   <input type="number" name= "vacancies" value="" class="form-control">

                                   <input type="text" name= "nombre" value="<?php echo $companyID?>" hidden>
                                   
                                  
                              </div>
                         </div>
                         
                         
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
          
     </section>
</main>