<?php
  // Iniciar sesión
  session_start();

  // Verificar si la sesión está iniciada
  if (isset($_SESSION['username'])) {
    // La sesión está iniciada, cargar la página
    // (el resto del código de la página iría aquí)
  } else {
    // La sesión no está iniciada, redirigir al usuario a login.php
    header('Location: /login.php');
  }
?>
