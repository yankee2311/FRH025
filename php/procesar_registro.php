<?php
    // Incluimos el archivo de conexión a la BD
    include 'config.php';

    // Verificamos si se han enviado los datos del formulario
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['NoEmp'])) {

        // Almacenamos los datos en variables
        $username = $_POST['username'];
        $password = $_POST['password'];
        $noEmp = $_POST['NoEmp'];

        // Preparamos la sentencia SQL para insertar los datos en la tabla
        $sql = "INSERT INTO usuarios (Usuario, Contraseña, No_Emp) VALUES ('$username', '$password', '$noEmp')";

        // Ejecutamos la sentencia
        if ($conn->query($sql) === TRUE) {
            echo "Registro creado exitosamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Cerramos la conexión
        $conn->close();
    }
?>
