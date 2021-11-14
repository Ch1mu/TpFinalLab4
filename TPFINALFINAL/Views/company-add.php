<?php
    require_once('nav.php');
    require_once "logged.php";
    require_once "isAdmin.php";
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
          
               
               <h2 class="mb-4">Agregar Empresas</h2>
               <form action="<?php echo FRONT_ROOT ?>Company/Add" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" name="nombre" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Rubro</label>
                                   <input type="text" name="rubro" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Localidad</label>
                                   <input type="text" name="localidad" value="" class="form-control">
                              </div>
                         </div>
                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Email</label>
                                   <input type="email" name="email" value="" class="form-control">
                              </div>
                              
                         </div>
                         <div class="form-group">
                                   <label for="">CUIT</label>
                                   <input type="text" name="cuit" value="" class="form-control">
                              </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
          
     </section>
</main>