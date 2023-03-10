<div id="form-container" style="display:none;">
    <form action="../php/procesar_cursos.php" method="post">
        <label for="nom_curso">Nombre del curso:</label>
            <input type="text" id="nom_curso" name="nom_curso" required><br>
        <label for="objetivo">Objetivo:</label>
            <textarea id="objetivo" name="objetivo" required></textarea><br>
        <label for="area">Área:</label>
            <input type="text" id="area" name="area" required><br>
        <label for="duracion">Duración:</label>
            <input type="number" id="duracion" name="duracion" required><br>
        <label for="capacitador">Capacitador:</label>
            <select id="capacitador" name="capacitador" required>
                <option value="Externo">Externo</option>
                <option value="Interno">Interno</option>
            </select><br>
        <label for="modalidad">Modalidad:</label>
            <select id="modalidad" name="modalidad" required>
                <option value="Online">Online</option>
                <option value="Presencial">Presencial</option>
                <option value="Híbrido">Híbrido</option>
            </select><br>
        <label for="activo">Activo:</label>
            <input type="checkbox" id="activo" name="activo" value="1" required><br>
        <input type="submit" value="Enviar">
    </form>
    <form action="php/procesar_cursosCSV.php" method="post" enctype="multipart/form-data">
        <label for="fileCSV">Seleccione un archivo CSV:</label>
        <input type="file" id="fileCSV" name="fileCSV" required><br>
        <input type="submit" value="Enviar">
    </form>
    </div>
<button id="show-form-button">Mostrar formulario</button>
<script src="../js/mostrarDiv.js"></script>

<form action="../php/Buscar_cursos.php" method="post">
    <label for="nom_curso">Selecciona un curso:</label>
    <select name="nom_curso" id="nom_curso">
        <!-- Aquí debes añadir las opciones para los cursos disponibles -->
            <?php
                // Establecer conexión a la base de datos y ejecutar consulta para obtener las opciones de la lista
                include '../php/config.php';
                $result = mysqli_query($conn, "SELECT * FROM cursos");
                while ($row = mysqli_fetch_assoc($result)) {
                    // Agregar opción a la lista
                    echo "<option value='".$row['Id']."'>".$row['Nom_curso']."</option>";
                }
                mysqli_close($conn);
            ?>  
    </select>
    <br>
    <input type="submit" value="Enviar">
</form>


