<?php

$we = "From: francolucianotpfinallab4@gmail.com";
$email = "luzardif@gmail.com";
$subject = "Oferta Finalizada";
$message = "La oferta laboral paraa la que te postulaste ha finalizado, gracias por participar!";

    mail($email, $subject, $message, $we);     
?>