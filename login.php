<!DOCTYPE html>
<html>
<head>
  <title>Título de la página</title>
</head>
<body>
    <form action="/php/procesar_login.php" method="post">
      <label for="username">Nombre de usuario:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Contraseña:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Iniciar sesión">
      <input type="button" value="Registrar nuevo usuario" onclick="window.location.href='/registrar.php'">
    </form>

</body>
</html>
