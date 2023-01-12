<?php
  // Configuración de la conexión a la base de datos
  $servername = "localhost"; // Nombre del servidor
  $username = "root"; // Nombre de usuario
  $password = ""; // Contraseña
  $dbname = "SuiteCapacitacion"; // Nombre de la base de datos

  // Crear la conexión
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Verificar la conexión
  if (!$conn) {
      die("Conexión fallida: " . mysqli_connect_error());
  }
?>