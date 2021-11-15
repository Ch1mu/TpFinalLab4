<?php
    require_once('nav.php');
    require_once "logged.php";
    require_once "isAdmin.php";
    use DAO\companyRepository as companyDAO;

    $compDAO = new companyDAO();
    $compL = array();
    $compL = $compDAO->GetAll();
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
          
               
               <h2 class="mb-4">Agregar Usuario</h2>
               <form action="<?php echo FRONT_ROOT ?>account/Add" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Email</label>
                                   <input type="email" name="email" id="email" placeholder="Email" required>
    <br><br>
    <label for="">Contraseña</label>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <br><br>
    <label for="">Tipo de Usuario</label>
    <select name="role" id="" placeholder= "tipo de cuenta">
     <option value="Admin">Admin</option>
    <option value="Student">Alumno</option>
    <option value="Company">Compañia</option>
    </select>
    <br><br>
                 </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
          
     </section>
</main>