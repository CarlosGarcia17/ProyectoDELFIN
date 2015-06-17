-- -----------------------------------------------------
-- Ingresar a la Terminal de mysql como root para utilizar los siguientes comandos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Creacion de la Base de Datos
-- -----------------------------------------------------
CREATE DATABASE delfin ;

-- -----------------------------------------------------
-- Creacion del usuario
-- -----------------------------------------------------
create user delfin identified by "123456";

-- -----------------------------------------------------
-- Entrar a la tabla
-- -----------------------------------------------------
USE delfin ;

-- -----------------------------------------------------
-- Asignar Privilegios sobre la base al usuario
-- -----------------------------------------------------
grant all privileges on delfin to delfin;

-- -----------------------------------------------------
-- Tabla Usuarios
-- -----------------------------------------------------
CREATE TABLE Usuarios (
  idUsuarios INT NOT NULL AUTO_INCREMENT,
  Nombre VARCHAR(50) NOT NULL,
  ApellidoP VARCHAR(50) NOT NULL,
  ApellidoM VARCHAR(50) NOT NULL,
  Institucion VARCHAR(100) NOT NULL,
  Estado VARCHAR(20) NOT NULL,
  Ciudad VARCHAR(30) NOT NULL,
  Correo VARCHAR(100) NOT NULL,
  Telefono VARCHAR(16) NOT NULL,
  Foto VARCHAR(50) NOT NULL,
  Usuario VARCHAR(50) NOT NULL,
  Contraseña VARCHAR(50) NOT NULL,
  PRIMARY KEY (idUsuarios),
  UNIQUE INDEX Usuario_UNIQUE (Usuario ASC));

INSERT INTO usuarios (idUsuarios, Nombre, ApellidoP, ApellidoM, Institucion, Estado, Ciudad, Correo, Telefono, Foto, Usuario, Contraseña) VALUES ('1', 'Carlos Alberto', 'Garcia', 'Fernandez', 'Instituto tecnologico de Jalapa', 'Veracruz', 'Jalapa', 'carlos@boxin.mx', '01-722-358-5138', 'itjalapa', 'itjalapa', '123456789');
INSERT INTO usuarios (idUsuarios, Nombre, ApellidoP, ApellidoM, Institucion, Estado, Ciudad, Correo, Telefono, Foto, Usuario, Contraseña) VALUES ('2', 'Mauro', 'Sanchez', 'Sanchez', 'Instituto Tecnologico de Toluca', 'Estado de Mexico', 'Toluca', 'mauro.ittoluca', '01-722-565-4512', 'ittoluca', 'ittoluca', '123456789');

-- -----------------------------------------------------
-- Tabla Areas
-- -----------------------------------------------------
CREATE TABLE Areas (
  idAreas INT NOT NULL AUTO_INCREMENT,
  NumeroArea INT NOT NULL,
  Nombre VARCHAR(100) NOT NULL,
  PRIMARY KEY (idAreas),
  UNIQUE INDEX NumeroArea_UNIQUE (NumeroArea ASC));

INSERT INTO areas (idAreas, NumeroArea, Nombre) VALUES ('1', '1', ' Física, Matemáticas y Ciencias de la Tierra');
INSERT INTO areas (idAreas, NumeroArea, Nombre) VALUES ('2', '2', 'Biología y Química');
INSERT INTO areas (idAreas, NumeroArea, Nombre) VALUES ('3', '3', 'Medicina y Salud');
INSERT INTO areas (idAreas, NumeroArea, Nombre) VALUES ('4', '4', 'Humanidades y de la Conducta');
INSERT INTO areas (idAreas, NumeroArea, Nombre) VALUES ('5', '5', 'Sociales y Económicas');
INSERT INTO areas (idAreas, NumeroArea, Nombre) VALUES ('6', '6', 'Biotecnología y Agropecuarias');
INSERT INTO areas (idAreas, NumeroArea, Nombre) VALUES ('7', '7', 'Ingeniería e Industria');


-- -----------------------------------------------------
-- Tabla Posgrados
-- -----------------------------------------------------
CREATE TABLE Posgrados (
  idPosgrados INT NOT NULL AUTO_INCREMENT,
  NombreVARCHAR(50) NOT NULL,
  PNPCP TINYINT(1) NOT NULL,
  Carrera VARCHAR(50) NOT NULL,
  Modalidad VARCHAR(10) NOT NULL,
  Nivel VARCHAR(45) NOT NULL,
  Link VARCHAR(45) NOT NULL,
  FechaExamen DATE NOT NULL,
  FechaPropedeutico DATE NULL,
  FechaIngreso DATE NOT NULL,
  FechaFin DATE NOT NULL,
  Costos DOUBLE NOT NULL,
  FechaRegistro DATE NOT NULL,
  Status TINYINT(1) NOT NULL,
  Años INT NOT NULL,
  Periodo VARCHAR(15) NOT NULL,
  Poster VARCHAR(50) NOT NULL,
  Usuarios_idUsuarios INT NOT NULL,
  Areas_idAreas INT NOT NULL,
  PRIMARY KEY (idPosgrados, Usuarios_idUsuarios, Areas_idAreas),
  INDEX fk_Posgrados_Usuarios_idx (Usuarios_idUsuarios ASC),
  INDEX fk_Posgrados_Areas1_idx (Areas_idAreas ASC),
  CONSTRAINT fk_Posgrados_Usuarios
    FOREIGN KEY (Usuarios_idUsuarios)
    REFERENCES Usuarios (idUsuarios),
  CONSTRAINT fk_Posgrados_Areas1
    FOREIGN KEY (Areas_idAreas)
    REFERENCES Areas (idAreas));

INSERT INTO posgrados (idPosgrados, Nombre, PNPCP, Carrera, Modalidad, Nivel, Link, FechaExamen, FechaPropedeutico, FechaIngreso, FechaFin, Costos, FechaRegistro, Status, Años, Periodo, Poster, Usuarios_idUsuarios, Areas_idAreas) VALUES ('1', 'Maestria en Computacion', '1', 'Ingenieria en Sistemas Computacionales', 'Presencial', 'Maestria', 'http://www.ittoluca.edu.mx/', '2015-06-28', '2015-08-17', '2015-09-18', '2017-06-09', '3999.99', '2015-06-16', '1', '2', 'Semestral', 'Maestria en Computacion', '2', '7');
INSERT INTO posgrados (idPosgrados, Nombre, PNPCP, Carrera, Modalidad, Nivel, Link, FechaExamen, FechaPropedeutico, FechaIngreso, FechaFin, Costos, FechaRegistro, Status, Años, Periodo, Poster, Usuarios_idUsuarios, Areas_idAreas) VALUES ('2', 'Maestria en Ambiental', '1', 'Ingenieria Quimica', 'Presencial', 'Maestria', 'http://www.itsx.edu.mx/', '2015-06-28', '2015-08-17', '2015-09-18', '2017-06-09', '3999.99', '2015-06-16', '1', '2', 'Semestral', 'Maestria en Ambiental', '1', '7');


-- -----------------------------------------------------
-- Tabla Eventos
-- -----------------------------------------------------
CREATE TABLE Eventos (
  idEventos INT NOT NULL,
  NombreEvento VARCHAR(100) NOT NULL,
  GrupoDirigito VARCHAR(60) NOT NULL,
  TipoEvento VARCHAR(20) NOT NULL,
  Formato VARCHAR(20) NOT NULL,
  Costos DOUBLE NOT NULL,
  FechaInicio DATE NOT NULL,
  FechaFin DATE NOT NULL,
  Especialidad VARCHAR(50) NOT NULL,
  Poster VARCHAR(50) NOT NULL,
  Estatus TINYINT(1) NOT NULL,
  Usuarios_idUsuarios INT NOT NULL,
  Areas_idAreas INT NOT NULL,
  PRIMARY KEY (idEventos, Usuarios_idUsuarios, Areas_idAreas),
  INDEX fk_Eventos_Usuarios1_idx (Usuarios_idUsuarios ASC),
  INDEX fk_Eventos_Areas1_idx (Areas_idAreas ASC),
  CONSTRAINT fk_Eventos_Usuarios1
    FOREIGN KEY (Usuarios_idUsuarios)
    REFERENCES Usuarios (idUsuarios),
  CONSTRAINT fk_Eventos_Areas1
    FOREIGN KEY (Areas_idAreas)
    REFERENCES Areas (idAreas));




