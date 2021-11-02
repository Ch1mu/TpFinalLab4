<?php
if($_SESSION["email"] == "admin@utn.com")
    require_once(VIEWS_PATH.'nav.php');
    else {
        require_once(VIEWS_PATH."navUser.php");
    }
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Alumnos</h2>
               <table class="table bg-light-alpha">
                   
                    <tbody>
                         <?php
                              foreach($studentList as $student)
                              {
                                  if($student->getStudentId() == $studentId){
                                   ?>
                                        <details class = "btn btn-primary ml-auto d-block">
                                                <summary class = "">
                                                     <?php 
                                                       echo $student->getFirstName();
                                                       echo "&nbsp";
                                                       echo $student->getLastName();
                                                      ?>
                                                      
                                                   </summary class = "">
                                                <p class = "table bg-light-alpha">Id del Estudiante: <?php echo $student->getStudentId();?></p>
                                            </details>
                                   <?php
                                  }
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>