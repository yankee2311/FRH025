<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php/procesar_registro.php" method="post">
        <label for="username">Nombre de usuario:</label><br>
            <input type="text" id="username" name="username"><br>
        <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password"><br><br>
        <label for="NoEmp">Numero de empleado:</label><br>
            <input type="number" id="NoEmp" name="NoEmp"><br>
        <input type="submit" value="Registrar nuevo usuario">
    </form>
</body>
</html>