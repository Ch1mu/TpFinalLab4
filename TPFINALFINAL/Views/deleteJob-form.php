<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Eliminar Trabajo</h2>
               <form action="<?php echo FRONT_ROOT ?>job/remove" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">ID del trabajo</label>
                                   <input type="text" name="jobPositionId" value="" class="form-control">
                              </div>
                        
                    <button type="submit" class="btn btn-dark ml-auto d-block">Eliminar</button>
               </form>
          </div>
     </section>
</main>