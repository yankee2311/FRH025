<?php
    // Iniciar sesión
    session_start();

    // Verificar si la sesión está iniciada
    if (isset($_SESSION['username'])) {
        // La sesión está iniciada, cargar la página
        // (el resto del código de la página iría aquí)
        //coloco en pantalla el nombre de usuario 

        //provisionalmente la página inicial es la de el formulario para firmar
        //include 'Firmas.php';
        echo "<a href='firmas.php'>Enlace 1</a>";
        echo "<a href='Cursos/cursos.php'>Enlace 1</a>";
        echo "<a href='consultar.php'>Enlace 1</a>";

        echo $_SESSION['username'];
    } else {
        // La sesión no está iniciada, redirigir al usuario a login.php
        header('Location: login.php');
    }
?>

