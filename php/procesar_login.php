<?php
  // Incluir el archivo de configuración de la base de datos
  require_once 'config.php';

  // Obtener los datos del formulario
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Comprobar que el usuario existe en la base de datos
  $sql = "SELECT * FROM usuarios WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  // Verificar que el usuario existe y que la contraseña es correcta
  if ($row && password_verify($password, $row['password'])) {
    // Iniciar sesión y redirigir al usuario a la página de inicio
    session_start();
    $_SESSION['username'] = $username;
    header('Location: /index.php');
  } else {
    // Mostrar un mensaje de error usando JavaScript
    echo '<script>';
    echo 'alert("Error: nombre de usuario o contraseña incorrectos");';
    echo 'window.location.href="/login.html";';
    echo '</script>';
  }

  // Cerrar la conexión a la base de datos
  mysqli_close($conn);
?>
