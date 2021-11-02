
<?php
  session_start();

  if (isset($_SESSION["email"])) {
    if($_SESSION["email"] == "admin@utn.com")
    header("location:../index.php");
    else {
      header("location:../mainUser.php");
    }
  }
  ?> 
 <!DOCTYPE html>
 <html lang="en">
 <head>
 
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inicio De Sesion</title>
   <link href="../Views/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body background: >
 
   <h2 >Inicio De Sesion</h2>
   <div>
 <form action="../login.php"  method="post">
         
         <input type="email" name="email" id="email" value = "" placeholder="Email" required ><br>
         <input type="password" name="password" id="password" value = "" placeholder="Password" required ><br>
         
         <button type="submit">Iniciar sesión</button>
         <br>
     
         <a href= "signupForm.php">Crear usuario</a>
       </form>
</div>


 </body>
 </html>


</section>
</main>





