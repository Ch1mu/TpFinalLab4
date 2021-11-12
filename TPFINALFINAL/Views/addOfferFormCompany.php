<?php
    require_once('navCompany.php');
    require_once "logged.php";

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
          
               
               <h2 class="mb-4">Agregar Oferta Laboral</h2>

               <form action="<?php echo FRONT_ROOT ?>Job/addOffer" method="post" class="bg-light-alpha p-5">
                    <div class="row">
                    <div class="col-lg-">
                              <div class="form-group">
                        <input type="text" name="id" id="id" value="<?php echo $companyID?>" readonly hidden>                        
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
                                   
                                  
                              </div>
                         </div>
                         
                         
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
          
     </section>
</main>