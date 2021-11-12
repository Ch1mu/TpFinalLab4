<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Usuario</title>
  <link href="../Views/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
 <center>
  <form action="../adduser.php" method="post">
    <h2>Crear Usuario</h2>
    <br>
    <input type="email" name="email" id="email" placeholder="Email" required>
    <br><br>
    
    <input type="password" name="password" id="password" placeholder="Password" required>
    <br><br>
    <label for="">Tipo de Usuario</label>
    <select name="role" id="" placeholder= "tipo de cuenta">
    <option value="Student">Alumno</option>
    <option value="Company">Compañia</option>
    </select>
    <br><br>
    <button type="submit">Crear usuario</button>
    <br>
    <a href="loginForm.php">Volver a la venta de Login</a>
  </form>
  </center>
</body>
</html>