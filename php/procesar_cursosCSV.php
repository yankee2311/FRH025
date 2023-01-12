<?php
    // Conectarse a la base de datos
    include 'config.php';


    // Comprobar si se ha enviado el archivo CSV
    if(isset($_FILES['fileCSV']) && $_FILES['fileCSV']['error'] == 0) {
        $csvFile = fopen($_FILES['fileCSV']['tmp_name'], 'r');

        // Saltar la primera línea (encabezados)
        fgetcsv($csvFile);

        // Recorrer las líneas restantes del archivo CSV
        while($line = fgetcsv($csvFile)) {
            // Insertar datos en la tabla "Cursos"
            $sql = "INSERT INTO Cursos (Nom_curso, Objetivo, Area, Duracion, Capacitador, Modalidad, Activo) VALUES ('" . utf8_encode($line[0]) . "', '" . utf8_encode($line[1]) . "', '" . utf8_encode($line[2]) . "', '" . $line[3] . "', '" . utf8_encode($line[4]) . "', '" . utf8_encode($line[5]) . "', '" . $line[6] . "')";
            $conn->query($sql);
        }

        fclose($csvFile);
    }
    else {
        echo "Error al cargar el archivo CSV";
    }
?>
