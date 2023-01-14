
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <form action="php/frh025.php" method="post">
        <label for="numero_empleado">Número de empleado:</label><br>
            <input type="text" id="numero_empleado" name="numero_empleado"><br>
        <br>
        <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br>
        <br>
        <label for="puesto">Puesto:</label><br>
            <input type="text" id="puesto" name="puesto"><br>
        <br>
        <label for="fecha">Fecha:</label><br>
            <input type="date" id="fecha" name="fecha"><br>
        <br>
        <label for="capacitacion">Capacitación:</label><br>
            <select id="capacitacion" name="capacitacion">
            <?php
                // Establecer conexión a la base de datos y ejecutar consulta para obtener las opciones de la lista
                include 'php/config.php';
                $result = mysqli_query($conn, "SELECT * FROM cursos");
                while ($row = mysqli_fetch_assoc($result)) {
                    // Agregar opción a la lista
                    echo "<option value='".$row['Id']."'>".$row['Nom_curso']."</option>";
                }
                mysqli_close($conn);
            ?>  
            <option value="2">Hola</option>
            </select>
        <br>
        <label for="firma">Firma:</label><br>
            <canvas id="dibujo" style="border: 2px solid black;"></canvas><br>
            <a href="#" onclick="ctx.clearRect(0, 0, canvas.width, canvas.height);">Borrar Firma</a> 
        <br>
        <input type="hidden" id="dibujo_data" name="dibujo_data">
        <input type="submit" value="Enviar">
    </form> 
    <script src="js/script.js"></script> 
      

      
