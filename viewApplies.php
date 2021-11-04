<?php
    require_once("nav.php");
?>

<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               
               <h2 class="mb-4">Listado de Postulaciones</h2>

               <table class="table bg-light-alpha">
                    <thead>
                        
                    </thead>
                    <tbody>
                       <table>
                           <tr>
                               <th>Alumno</th>
                               <th>Trabajo</th>
                               <th>Empresa</th>
                           </tr>
                           <?php foreach($studentList as $student){
                               ?><tr>
                                   <td><?php echo $student->getFirstName();
                                             echo "&nbsp";
                                             echo $student->getLastName();?>
                                    </td>
                                    <?php foreach($jobList as $job){
                                        if($job->getjobPositionId() == $student->getJob()){
                                            ?> <td> <?php echo $job->getDescription(); ?> </td>
                                            <?php foreach($companyList as $company){
                                                if($job->getCompanyId() == $company->getId()){
                                                    ?> <td> <?php echo $company->getNombre(); ?> </th>
                                                }
                                            }
                                        }
                                    } 
                               </tr>
                           }
                       </table>
                    </tbody>
               </table>
          </div>
     </section>
</main>