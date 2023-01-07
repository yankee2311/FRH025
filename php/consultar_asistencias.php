<?php
  // Recibir datos del formulario
  $curso = $_POST["curso"];
  $mes = $_POST["mes"];

  // Consultar asistencias
  $sql = "SELECT * FROM attendance";

  // Si se seleccionó un curso específico, agregar a la consulta
  if ($curso != "todos") {
    $sql .= " WHERE capacitacion='$curso'";
  }

  // Si se seleccionó un mes específico, agregar a la consulta
  if ($mes != "todos") {
    // Si ya se había agregado una cláusula WHERE, usar AND para concatenar la condición del mes
    if (strpos($sql, "WHERE") !== false) {
      $sql .= " AND";
    }
    // Si es la primera condición, usar WHERE
    else {
      $sql .= " WHERE";
    }
    $sql .= " MONTH(fecha)='$mes'";
  }

  // Establecer conexión a la base de datos y ejecutar consulta
  include 'config.php';
  $result = mysqli_query($conn, $sql);

  // Mostrar resultados en tabla
    echo "<table>";
    echo "<tr>";
    echo "<th>Número de empleado</th>";
    echo "<th>Nombre</th>";
    echo "<th>Puesto</th>";
    echo "<th>Fecha</th>";
    echo "<th>Capacitación</th>";
    echo "<th>Imagen</th>";
    echo "</tr>";

    // Recorrer cada fila de resultados y mostrar en una fila de la tabla
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$row['numero_empleado']."</td>";
      echo "<td>".$row['nombre']."</td>";
      echo "<td>".$row['puesto']."</td>";
      echo "<td>".$row['fecha']."</td>";
      echo "<td>".$row['capacitacion']."</td>";
      echo "<td><img src='".$row['imagen']."' alt='Firma' width='100'></td>";
      echo "</tr>";
    }
  // Cerrar conexión a la base de datos
  mysqli_close($conn);

  echo "</table>"
?>
