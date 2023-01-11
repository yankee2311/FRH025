<?php
    // Incluimos el archivo de conexión a la BD
    include 'config.php';

    // Verificamos si se han enviado los datos del formulario
    if (isset($_POST['username']) && isset($_POST['password'])) {

        // Almacenamos los datos en variables
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Preparamos la sentencia SQL para seleccionar los datos de usuario
        $sql = "SELECT * FROM usuarios WHERE Usuario = ? AND Contraseña = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // Iniciamos la sesión
            echo '<script>';
            echo 'alert("contraseña correcta");';
            echo '</script>';
            session_start();
            $_SESSION['username'] = $username;
            //header('location: home.php');
            header('Location: ../index.php');
        } else {
            echo '<script>';
            echo 'alert("Error: nombre de usuario o contraseña incorrectos");';
            echo 'window.location.href="../login.php";';
            echo '</script>';
        }

        // cerramos la conexión
        $conn->close();
    }
?>
