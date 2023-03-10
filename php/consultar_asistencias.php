<?php
    // Recibir datos del formulario
    $curso = $_POST["curso"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];

    // Consultar asistencias
    $sql = "SELECT * FROM Asistencia";

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

    // Si se seleccionó un año específico, agregar a la consulta
    if ($ano != "todos") {
        // Si ya se había agregado una cláusula WHERE o AND, usar AND para concatenar la condición del año
        if (strpos($sql, "WHERE") !== false || strpos($sql, "AND") !== false ) {
            $sql .= " AND";
        }
        // Si es la primera condición, usar WHERE
        else {
            $sql .= " WHERE";
        }
        $sql .= " YEAR(fecha)='$ano'";
    }

    // Establecer conexión a la base de datos y ejecutar consulta
    include 'config.php';
    $result = mysqli_query($conn, $sql);

    // Mostrar resultados en tabla

    include '../TABLAPRUEBA.PHP';

    // Recorrer cada fila de resultados y mostrar en una fila de la tabla
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['No_Emp']."</td>";
        echo "<td>".$row['Nom_Empleado']."</td>";
        echo "<td>".$row['Id_Curso']."</td>";
        echo "<td><img src='".$row['imagen']."' alt='Firma' width='100'></td>";
        echo "<td>".$row['Puesto']."</td>";
        // calificacion pendiente sacar
        echo "<td>      </td>";
        echo "<td>".$row['Fecha']."</td>";
        echo "</tr>";
    }

    // Cerrar conexión a la base de datos
    mysqli_close($conn);
    echo "</tbody";
    echo "</table>";
?>
