/*Crear tabla PROFESOR*/
CREATE TABLE `bbdd`.`profesor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `dni` VARCHAR(9) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(9) NOT NULL,
  `firma` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));

/*Crear tabla PERMISOS*/
CREATE TABLE `bbdd`.`permisos` (
  `idPermiso` INT NOT NULL AUTO_INCREMENT,
  `fechaIni` DATE NOT NULL,
  `fechaFin` DATE NOT NULL,
  `motivo` VARCHAR(450) NOT NULL,
  `diaCompleto` TINYINT NOT NULL,
  `concedido` TINYINT NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`idPermiso`));

/*Crear tabla DOCUMENTOS*/
CREATE TABLE `bbdd`.`documentos` (
  `nombre` VARCHAR(30) NOT NULL,
  `ubicacion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`nombre`));

/*Crear tabla DEPARTAMENTOS*/
CREATE TABLE `bbdd`.`departamentos` (
  `nombreDepartamento` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`nombreDepartamento`));

/*Crear tabla GRUPOS*/
CREATE TABLE `bbdd`.`grupos` (
  `nombreGrupo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`nombreGrupo`));

/*Crear tabla HORARIOS*/
CREATE TABLE `bbdd`.`horiarios` (
  `horario` TINYINT NOT NULL,
  PRIMARY KEY (`horario`));

