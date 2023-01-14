<?php

    include 'config.php';

    $sql = "INSERT INTO asistencia (No_Emp, Nom_Empleado, Id_Curso, Puesto, Fecha, Firma)
    VALUES ('$numero_empleado', '$nombre', '$capacitacion', '$puesto', '$fecha', '$imagen_data_url')";

    if (mysqli_query($conn, $sql)) {
        // Si la consulta se ejecutó con éxito, mostrar un mensaje de éxito
        echo '<script> Alert("Los datos se han guardado con éxito.");</script>';
    } else {
        // Si hubo un error, mostrar un mensaje de error habilitar solo si falla el JS
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        //me arroja el error en JS como una alerta para el usuario
        echo '<script>alert("A ocurrido un error al momento de guardar la información: '. mysqli_error($conn).'")</script>';
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);

    include '../firmas.php';
    echo '<script>';
    echo 'window.location.href="../Firmas.php";';
    echo '</script>';
?>

