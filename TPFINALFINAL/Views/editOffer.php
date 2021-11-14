<?php
    require_once(VIEWS_PATH.'nav.php');
    require_once "logged.php";
    require_once "isAdmin.php";
    

    foreach($list as $offer){
        if($offer->getOfferId() == $id){
            ?>
<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">
            <h2 class="mb-4">Editar Compañia</h2>
            <form action="<?php echo FRONT_ROOT ?>Job/editOffer" method="post" class="bg-light-alpha p-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" name="offerId" value="<?php echo $offer->getOfferId()?>"
                                class="form-control" readonly hidden>
                        </div>
                    </div>
                    </div>
                    <br>
                    <div class="col-lg-4">
                        <div class="form-group">

                            <label for="">Posicion Laboral</label>
                            <select name="description" id="">
                                <?php foreach($jobL as $job)
                                            {
                                            ?>

                                <option value="<?php echo $job->getDescription() ?>">
                                    <?php echo $job->getDescription() ?> </option>
                                <?php
                                        } ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Limite Postulaciones</label>
                            <input type="number" name="vacancies" value="<?php echo $offer->getVacancies()?>"
                                class="form-control">
                        </div>
                    </div>
                                    
                </div>
                <button type="submit" class="btn btn-dark ml-auto d-block">Editar</button>
            </form>
            </div>
        </div>
    </section>
</main>
<?php        
        }
    }
    ?>