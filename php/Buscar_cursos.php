<?php
// Importar archivo de configuración de la base de datos
require_once 'config.php';

header('Content-Type: text/html; charset=UTF-8');

// Recibir datos enviados por el método POST
$id_curso = $_POST['nom_curso'];

echo "$id_curso";

// Comprobar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para buscar el curso
$sql = "SELECT Id, Nom_curso, Objetivo, Area, Duracion, Capacitador, Modalidad, Activo FROM Cursos WHERE Id='$id_curso'";
$result = $conn->query($sql);

// Array para almacenar los datos del curso
$cursos = array();

// Comprobar si se ha encontrado el curso
if ($result->num_rows > 0) {
    // Añadir los datos del curso al array
    while($row = $result->fetch_assoc()) {
        foreach ($row as $col => $val) {
            $row[$col] = htmlentities($val);
        }
        $cursos[] = $row;
    }
} else {
    echo "No se ha encontrado el curso";
}

// Convertir el array a formato JSON
$cursos_json = json_encode($cursos);

// Imprimir el JSON
echo $cursos_json;
// crea un archivo JSON y lo descarga
//file_put_contents("Cursos.json", $cursos_json);
//header('Content-Type: application/json');
//header('Content-Disposition: attachment; filename="cursos .json"');

$conn->close();
?>



