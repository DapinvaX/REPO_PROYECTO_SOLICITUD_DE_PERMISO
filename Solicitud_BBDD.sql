/*Crear tabla PROFESOR*/
CREATE TABLE `bbdd`.`profesor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `dni` VARCHAR(9) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(9) NOT NULL,
  `firma` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
);
/*Crear tabla PERMISOS*/
CREATE TABLE `bbdd`.`permisos` (
  `idPermiso` INT NOT NULL AUTO_INCREMENT,
  `fechaIni` DATE NOT NULL,
  `fechaFin` DATE NOT NULL,
  `motivo` VARCHAR(450) NOT NULL,
  `diaCompleto` TINYINT NOT NULL,
  `concedido` TINYINT NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`idPermiso`)
);
/*Crear tabla DOCUMENTOS*/
CREATE TABLE `bbdd`.`documentos` (
  `nombre` VARCHAR(30) NOT NULL,
  `ubicacion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`nombre`)
);
/*Crear tabla DEPARTAMENTOS*/
CREATE TABLE `bbdd`.`departamentos` (
  `nombreDepartamento` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`nombreDepartamento`)
);
/*Crear tabla GRUPOS*/
CREATE TABLE `bbdd`.`grupos` (
  `nombreGrupo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`nombreGrupo`)
);
/*Crear tabla HORARIOS*/
CREATE TABLE `bbdd`.`horarios` (
  `horario` TINYINT NOT NULL,
  PRIMARY KEY (`horario`)
);




COLUMNA ASIGNATURAS
ALTER TABLE `bbdd`.`profesor` 
ADD COLUMN `asignatura` VARCHAR(45) NOT NULL AFTER `firma`;


ALTER TABLE `bbdd`.`permisos` 
ADD
  FOREIGN KEY (`idProfesor`)
  REFERENCES `bbdd`.`profesor` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;





ALTER TABLE `bbdd`.`horarios` ADD COLUMN `auladiurno1` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `auladiurno2` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `auladiurno3` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `auladiurno4` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `auladiurno5` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `auladiurno6` VARCHAR(30);

ALTER TABLE `bbdd`.`horarios` ADD COLUMN `aulanocturno1` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `aulanocturno2` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `aulanocturno3` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `aulanocturno4` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `aulanocturno5` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `aulanocturno6` VARCHAR(30);

ALTER TABLE `bbdd`.`horarios` ADD COLUMN `grupodiurno1` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `grupodiurno2` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `grupodiurno3` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `grupodiurno4` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `grupodiurno5` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `grupodiurno6` VARCHAR(30);

ALTER TABLE `bbdd`.`horarios` ADD COLUMN `gruponocturno1` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `gruponocturno2` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `gruponocturno3` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `gruponocturno4` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `gruponocturno5` VARCHAR(30);
ALTER TABLE `bbdd`.`horarios` ADD COLUMN `gruponocturno6` VARCHAR(30);
