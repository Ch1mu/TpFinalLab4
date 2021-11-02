<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
</head>
<body>
 
  <form action="../adduser.php" method="post">
    
    <input type="email" name="email" id="email" placeholder="Email" required>
    <br>
    
    <input type="password" name="password" id="password" placeholder="Password" required>
    <br>
    <button type="submit">Crear usuario</button>
    <br>
    <a href="loginForm.php">Volver a la venta de Login</a>
  </form>
</body>
</html>