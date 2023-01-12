--Crear una base de datos, en esta app la base de datos se llama SuiteCapacitacion

--Crea la tabla para los usuarios
CREATE TABLE Usuarios (
   ID INTEGER PRIMARY KEY AUTO_INCREMENT,
   Usuario VARCHAR(50) NOT NULL,
   Contraseña VARCHAR(50) NOT NULL,
   No_Emp INTEGER NOT NULL,
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
   Objetivo VARCHAR(500) NOT NULL,
   Area VARCHAR(50) NOT NULL,
   Duracion INTEGER NOT NULL,
   Capacitador VARCHAR(50) NOT NULL, --INTERNO O EXTERNO
   Modalidad VARCHAR(50) NOT NULL, --ONLINE, PRESENCIAL O HIBRIDO
   Activo BOOLEAN NOT NULL
);

--Crea los cursos programados del mes.
CREATE TABLE programados (
   Id INTEGER PRIMARY KEY,
   Id_Curso INTEGER NOT NULL,
   Mes VARCHAR(50) NOT NULL,
   Sucursal VARCHAR(50) NOT NULL
   Tipo VARCHAR (50) NOT NULL --Programado, Inducción o Ambos
   )

--Crea la tabla Asistencia
CREATE TABLE Asistencia (
   Id INTEGER PRIMARY KEY,
   No_Emp INTEGER NOT NULL,
   Id_Curso INTEGER NOT NULL,
   Puesto VARCHAR(50) NOT NULL,
   Fecha DATE NOT NULL,
   Firma VARCHAR(50) NOT NULL
);

--Crea la tabla calificaciones
CREATE TABLE Calificaciones (
   Id INTEGER PRIMARY KEY,
   Id_Asistencia INTEGER NOT NULL,
   Calificacion INTEGER NOT NULL
);