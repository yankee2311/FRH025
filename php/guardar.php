<?php

include 'config.php';

$sql = "INSERT INTO attendance (numero_empleado, nombre, puesto, fecha, capacitacion, imagen)
VALUES ('$numero_empleado', '$nombre', '$puesto', '$fecha', '$capacitacion', '$imagen_data_url')";

if (mysqli_query($conn, $sql)) {
  // Si la consulta se ejecutó con éxito, mostrar un mensaje de éxito
  echo "Los datos se han guardado con éxito.";
} else {
  // Si hubo un error, mostrar un mensaje de error
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>

