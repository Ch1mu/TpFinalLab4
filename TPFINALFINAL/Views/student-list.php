<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Alumnos</h2>
              
               
               <a class="btn btn-dark ml-auto d-block"  href="<?php echo FRONT_ROOT ?>Student/filterForm">Filtrar Alumnos</a>
               
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Legajo</th>
                         <th>Apellido</th>
                         <th>Nombre</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($studentList as $student)
                              {
                                   ?>
                                       
                                        <details class = "btn btn-primary ml-auto d-block">
                                                <summary class = "">
                                                     <?php 
                                                     

                                                       echo $student->getFirstName();
                                                       echo "&nbsp";
                                                       echo $student->getLastName();
                                                      ?>
                                                      
                                                   </summary class = "">
                                                <p class = "table bg-light-alpha">
                                                     Id del Estudiante: <?php echo $student->getStudentId();?><br>
                                                  
                                                  </p>
                                            </details>
                                        
                                   <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>

