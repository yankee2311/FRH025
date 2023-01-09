--Crear una base de datos, en esta app la base de datos se llama SuiteCapacitacion

--Crea la tabla para los usuarios
CREATE TABLE Usuarios (
   ID INTEGER PRIMARY KEY,
   Usuario VARCHAR(50) NOT NULL,
   Contraseña VARCHAR(50) NOT NULL,
   No_Emp INTEGER NOT NULL,
   area VARCHAR(50) NOT NULL
);

--Crea la tabla empleado
CREATE TABLE Empleados (
   Id INTEGER PRIMARY KEY,
   No_Emp INTEGER NOT NULL,
   Nombre VARCHAR(50) NOT NULL,
   Puesto VARCHAR(50) NOT NULL,
   Fecha_ingreso DATE NOT NULL,
   Activo BOOLEAN NOT NULL,
   Area VARCHAR(50) NOT NULL,
   Departamento VARCHAR(50) NOT NULL
);

--Crea la tabla cursos
CREATE TABLE Cursos (
   Id INTEGER PRIMARY KEY,
   Nom_curso VARCHAR(50) NOT NULL,
   Area VARCHAR(50) NOT NULL,
   Duracion INTEGER NOT NULL,
   Tipo VARCHAR(50) NOT NULL,
   Modalidad VARCHAR(50) NOT NULL,
   Activo BOOLEAN NOT NULL
);

--Crea la tabla Asistencia
CREATE TABLE Asistencia (
   Id INTEGER PRIMARY KEY,
   No_Emp INTEGER NOT NULL,
   Id_Curso INTEGER NOT NULL,
   Puesto VARCHAR(50) NOT NULL,
   Fecha DATE NOT NULL,
   Firma VARCHAR(50) NOT NULL
);

