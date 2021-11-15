<?php
 require_once "navSession.php";
    require_once "logged.php";


?>
<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">



            <center>
                <h1>Estudiante Con el Legajo Correspondiente</h1>
            </center>
            <br>



            <?php
                        
                              foreach($studentList as $student)
                              {
                                   foreach($careerList as $career)
                                   {
                                        if($career->getCareerId() == $student->getCareerId())
                                        {
                                             $careerName = $career->getDescription();
                                             
                                        }
                                        if($description == $career->getDescription())
                                        {
                                             $careerId = $career->getCareerId();
                                        }
                                   }
                                   ?>
            <?php 
                                       if($studentId != "" && $description == "")
                                       {
                                        if($student->getStudentId() == $studentId){   ?>
            <details class="btn btn-primary ml-auto d-block">
                <summary class="">
                    <?php 
                                                       echo $student->getFirstName();
                                                       echo "&nbsp";
                                                       echo $student->getLastName();
                                                      ?>

                </summary class="">
                <p class="table bg-light-alpha">
                    Id del Estudiante: <?php echo $student->getStudentId();?><br>
                    Id de la carrera: <?php echo $student->getCareerId();?><br>
                    Carrera: <?php echo $careerName;?><br>
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
                                   }
                                   else if($description != "" && $studentId == "")
                                   { 
                                        if($student->getCareerId() == $careerId){   ?>
            <details class="btn btn-primary ml-auto d-block">
                <summary class="">
                    <?php 
                                                       echo $student->getFirstName();
                                                       echo "&nbsp";
                                                       echo $student->getLastName();
                                                      ?>

                </summary class="">
                <p class="table bg-light-alpha">
                    Id del Estudiante: <?php echo $student->getStudentId();?><br>
                    Id de la carrera: <?php echo $student->getCareerId();?><br>
                    Carrera: <?php echo $careerName;?><br>
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
                                   }
                                   else if($description != "" && $studentId != "")
                                   {
                                        
                                        if($student->getStudentId() == $studentId && $student->getCareerId() == $careerId){   ?>
            <details class="btn btn-primary ml-auto d-block">
                <summary class="">
                    <?php 
                                                       echo $student->getFirstName();
                                                       echo "&nbsp";
                                                       echo $student->getLastName();
                                                      ?>

                </summary class="">
                <p class="table bg-light-alpha">
                    Id del Estudiante: <?php echo $student->getStudentId();?><br>
                    Id de la carrera: <?php echo $student->getCareerId();?><br>
                    Carrera: <?php echo $careerName;?><br>
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
                                   }
                                   
                                   
                              }
                         ?>
        </div>
    </section>
</main>