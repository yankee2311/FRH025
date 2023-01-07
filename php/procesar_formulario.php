<?php
  // Recibir los datos del formulario
  $numero_empleado = $_POST['numero_empleado'];
  $nombre = $_POST['nombre'];
  $puesto = $_POST['puesto'];
  $fecha = $_POST['fecha'];
  $capacitacion = $_POST['capacitacion'];
  $imagen_data_url = $_POST['dibujo_data'];

  // Validar los datos del formulario
  $errores = array();
  if (empty($numero_empleado)) {
    $errores[] = 'El número de empleado es requerido.';
  }
  if (empty($nombre)) {
    $errores[] = 'El nombre es requerido.';
  }
  if (empty($puesto)) {
    $errores[] = 'El puesto es requerido.';
  }
  if (empty($fecha)) {
    $errores[] = 'La fecha es requerida.';
  }
  if (empty($capacitacion)) {
    $errores[] = 'La capacitación es requerida.';
  }
  if (empty($imagen_data_url)) {
    $errores[] = 'La firma es requerida.';
  }

  // Si hay errores, mostrarlos y terminar la ejecución del script
  if (count($errores) > 0) {
    echo 'Se encontraron los siguientes errores:';
    echo '<ul>';
    foreach ($errores as $error) {
      echo '<li>'.$error.'</li>';
    }
    echo '</ul>';
    exit;
  }

  // Guardar la imagen del canvas en la carpeta "firmas"
  $imagen_data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imagen_data_url));
  file_put_contents('firmas/'.$numero_empleado.'.png', $imagen_data);

  include 'guardar.php';
?>
