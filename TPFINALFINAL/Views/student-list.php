<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Alumnos</h2>
              
               
               <a class="btn btn-dark ml-auto d-block"  href="<?php echo FRONT_ROOT ?>Student/filterForm">Filtrar Alumnos</a>
               
                    
                    
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
                                                     Id de la carrera: <?php echo $student->getCareerId();?><br>
                                                     Dni: <?php echo $student->getDni();?><br>
                                                     Genero: <?php echo $student->getGender();?><br>
                                                     Fecha de Nacimiento: <?php echo $student->getBirthDate();?><br>
                                                     Telefono: <?php echo $student->getPhoneNumber();?><br>
                                                       Numero De archivo: <?php echo $student->getFileNumber();?><br>
                                                     Email: <?php echo $student->getEmail();?><br>
                                                     Estado: <?php echo $student->getActive();?><br>
                                                  
                                                  </p>
                                            </details>
                                        
                                   <?php
                              }
                         ?>
          </div>
     </section>
</main>

