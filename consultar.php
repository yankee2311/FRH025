
<h1>Consultar asistencias</h1>
<form action="php/consultar_asistencias.php" method="post">
  <label for="curso">Curso:</label><br>
    <select id="curso" name="curso">
        <option value="todos">Todos</option>
        <!-- Aquí debes añadir las opciones para los cursos disponibles -->
        <?php
            // Establecer conexión a la base de datos y ejecutar consulta para obtener las opciones de la lista
            include 'php/config.php';
            $result = mysqli_query($conn, "SELECT * FROM cursos");
            while ($row = mysqli_fetch_assoc($result)) {
              // Agregar opción a la lista
              echo "<option value='".$row['id']."'>".$row['Nom_curso']."</option>";
            }
            mysqli_close($conn);
          ?>  
          </select>
      </select><br>
      <br>
      <label for="mes">Mes:</label><br>
      <select id="mes" name="mes">
        <option value="todos">Todos</option>
        <option value="enero">Enero</option>
        <option value="febrero">Febrero</option>
        <option value="marzo">Marzo</option>
        <option value="abril">Abril</option>
        <option value="mayo">Mayo</option>
        <option value="junio">Junio</option>
        <option value="julio">Julio</option>
        <option value="agosto">Agosto</option>
        <option value="septiembre">Septiembre</option>
        <option value="octubre">Octubre</option>
        <option value="noviembre">Noviembre</option>
        <option value="diciembre">Diciembre</option>
      </select><br>
      <label for="no">año:</label><br>
      <select id="ano" name="ano">
        <option value="todos">Todos</option>
        <option value="2024">2024</option>
        <option value="2023">2023</option>
        <option value="2022">2022</option>
      </select><br>
      <br>
      <input type="submit" value="Buscar">
    </form> 
  </body>
</html>