<?php
if($_SESSION["email"] == "admin@utn.com")
    require_once('nav.php');
    else {
        require_once("navUser.php");
    }
    require_once "logged.php";

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Reactivar una Empresa</h2>
               <form action="<?php echo FRONT_ROOT ?>Company/activate" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">ID</label>
                                   <input type="text" name="id" value="" class="form-control">
                              </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Activar</button>
               </form>
          </div>
     </section>
</main>