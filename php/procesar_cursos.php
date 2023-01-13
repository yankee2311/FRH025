<?php
    // Conexión a la base de datos
    include 'config.php';

    // Recibir los datos del formulario
    $nom_curso = $_POST["nom_curso"];
    $objetivo = $_POST["objetivo"];
    $area = $_POST["area"];
    $duracion = $_POST["duracion"];
    $capacitador = $_POST["capacitador"];
    $modalidad = $_POST["modalidad"];
    $activo = $_POST["activo"];

    // Validar y sanitizar los datos recibidos
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

    // Verificar si la inserción fue exitosa
    if ($result) {
        echo "<script>alert('Los datos se han insertado correctamente.');</script>";
        echo "<script>window.location.replace('../Cursos/cursos.php');</script>";
        //header('Location: ../cursos/cursos.php');
    } else {
        echo "<script>alert('A ocurrido un error');</script>";
        echo "<script>window.location.replace('../Cursos/Cursos.php');</script>";
        //header('Location: ../cursos/cursos.php');
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
?>
