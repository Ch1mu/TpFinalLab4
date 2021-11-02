<?php
    require_once('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>

<div class="container">
        
        <br><br><br>
         <a class="btn btn-dark ml-auto d-block" href="<?php echo FRONT_ROOT ?>Student/ShowAddView">Agregar Alumnos</a>
          <br>
          <a class="btn btn-dark ml-auto d-block" href="<?php echo FRONT_ROOT ?>Student/ShowListView">Listar Alumnos</a>
          <br>
          <a class="btn btn-dark ml-auto d-block" href="<?php echo FRONT_ROOT ?>Student/filterForm">Filtrar Alumnos</a>
          <br>
          
</div>
</body>
</html>