<?php
    require_once('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
</head>
<body>

<div class="container">
                <br><br><br>
                <a class="btn btn-dark ml-auto d-block" href="<?php echo FRONT_ROOT ?>Company/addCompany">Agregar Empresas</a>
                <br>
                <a class="btn btn-dark ml-auto d-block" href="<?php echo FRONT_ROOT ?>Company/ListCompany">Listar Empresas</a>
               <br>
               <a class="btn btn-dark ml-auto d-block" href="<?php echo FRONT_ROOT ?>Company/deleteForm">Eliminar Empresas</a>
               <br>
               <a class="btn btn-dark ml-auto d-block" href="<?php echo FRONT_ROOT ?>Company/filterForm">Filtrar Empresas</a>
               <br>
               <a class="btn btn-dark ml-auto d-block" href="<?php echo FRONT_ROOT ?>Company/editForm">Editar Empresas</a>
               <br>
          
</div>
</body>
</html>