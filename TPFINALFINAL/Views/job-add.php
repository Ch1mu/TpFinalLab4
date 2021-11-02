<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
          
               
               <h2 class="mb-4">Agregar Trabajos</h2>

               <form action="<?php echo FRONT_ROOT ?>Job/Add" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                              <br>
                                   <label for="">ID de Carrera</label>
                                   
                                   <input type="number" name="careerId" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">ID de la posicion</label>
                                   <input type="number" name="jobPositionId" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Nombre del puesto</label>
                                   <input type="text" name="description" value="" class="form-control">
                              </div>
                         </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
          
     </section>
</main>