<?php

    // Conexión a la base de datos
    include 'config.php';
    
    //obtengo el file csv
    $filecsv = $_POST["FileCSV"];
    // Abrir el archivo CSV
    $file = fopen($filecsv, "r");

    // Leer las líneas del archivo
    while (($line = fgetcsv($file)) !== false) {
        // Asignar los valores a las variables correspondientes
        $nom_curso = $line[0];
        $objetivo = $line[1];
        $area = $line[2];
        $duracion = $line[3];
        $capacitador = $line[4];
        $modalidad = $line[5];
        $activo = $line[6];

        // Validar y sanitizar los datos
        $nom_curso = mysqli_real_escape_string($conn, $nom_curso);
        $objetivo = mysqli_real_escape_string($conn, $objetivo);
        $area = mysqli_real_escape_string($conn, $area);
        $duracion = (int) $duracion;
        $capacitador = mysqli_real_escape_string($conn, $capacitador);
        $modalidad = mysqli_real_escape_string($conn, $modalidad);
        $activo = (int) $activo;

        // Insertar los datos en la tabla "Cursos"
        $sql = "INSERT INTO Cursos (Nom_curso, Objetivo, Area, Duracion, Capacitador, Modalidad, Activo)
                VALUES ('$nom_curso', '$objetivo', '$area', $duracion, '$capacitador', '$modalidad', $activo)";
        $result = mysqli_query($conn, $sql);
    }

    // Verificar si la importación fue exitosa
    if ($result) {
        echo "Los datos se han importado correctamente.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Cerrar el archivo CSV y la conexión a la base de datos
    fclose($file);
    mysqli_close($conn);
?>
