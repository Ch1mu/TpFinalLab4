<?php
 require_once "navSession.php";
    require_once "logged.php";

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Elija sus filtros</h2>
               <form action="<?php echo FRONT_ROOT ?>Student/filterStudent " method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Legajo</label>
                                   <input type="text" name="studentId" value="" class="form-control">
                              </div>

                         <label for="">Carrera</label>
                         <select name="description" id="">
                         <option value=""></option>
                    <?php foreach($careerList as $career)
                    { ?>
                         <option value="<?php echo $career->getDescription(); ?>"><?php echo $career->getDescription(); ?></option>
                <?php  } ?>
                         
                         </select>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Filtrar </button>
               </form>
          </div>
     </section>
</main>