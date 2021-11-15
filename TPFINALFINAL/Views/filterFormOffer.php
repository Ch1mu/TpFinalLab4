<?php

    require_once('nav.php');
    require_once "logged.php";
    require_once "isAdmin.php";
use DAO\JobRepositorie as JobDAO;
$jobDAO = new JobDAO();
$job = array();
$jobL = $jobDAO->GetAll();

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Filtrar Ofertas</h2>
               <form action="<?php echo FRONT_ROOT ?>job/filterOffers" method="post" class="bg-light-alpha p-4">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Posicion Laboral</label>
                                   <select name="jobName" id="" class= "selectpicker">
                                   <option value=""></option>
                                   <?php foreach($jobL as $job){
                                   ?>
                                   <option value="<?php echo $job->getDescription();?>"><?php echo $job->getDescription();?></option>
                                   <?php } ?>
                                   
                                   </select>
                              </div>
                              <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Carrera</label>
                                   <select name="career" id="" class = "selectpicker">
                                   <option value=""></option>
                                   <?php foreach($list as $career){
                                   ?>
                                   <option value="<?php echo $career->getDescription();?>"><?php echo $career->getDescription();?></option>
                                   <?php } ?>
                                   
                                   </select>
                                   
                              </div>
                              
                    <button type="submit" class="btn btn-dark ml-auto d-block">Filtrar</button>
               </form>
          </div>
     </section>
</main>