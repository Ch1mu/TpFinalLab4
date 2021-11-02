<?php
    require_once(VIEWS_PATH.'nav.php');
    

    foreach($studentList as $company){
        if($company->getID() == $_POST["id"]){
            ?>
                    <main class="py-5">
            <section id="listado" class="mb-5">
                <div class="container">
                    <h2 class="mb-4">Editar Compañia</h2>
                    <form action="<?php echo FRONT_ROOT ?>Company/editCompany2" method="post" class="bg-light-alpha p-5">
                            <div class="row">                         
                               <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">ID</label>
                                        <input type="text" name="id" value="<?php echo $company->getId()?>" class="form-control" readonly>
                                    </div>
                                </div> 
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="nombre" value="<?php echo $company->getNombre()?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Rubro</label>
                                        <input type="text" name="rubro" value="<?php echo $company->getRubro()?>" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Localidad</label>
                                        <input type="text" name="localidad" value="<?php echo $company->getLocalidad()?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark ml-auto d-block">Editar</button>
                    </form>
                </div>
            </section>
        </main>
<?php        
        }
    }
    ?>
