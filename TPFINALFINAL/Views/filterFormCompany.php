<?php

    require_once('navSession.php');
    
    require_once "logged.php";

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Filtrar Empresas por nombre</h2>
               <form action="<?php echo FRONT_ROOT ?>Company/filterCompany" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="nombre" value="" class="form-control">
                              </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Filtrar por Nombre</button>
               </form>
          </div>
     </section>
</main>