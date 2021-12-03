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





INSERT INTO horarios (horario) VALUES ('auladiurno1');
INSERT INTO horarios (horario) VALUES ('auladiurno2');
INSERT INTO horarios (horario) VALUES ('auladiurno3');
INSERT INTO horarios (horario) VALUES ('auladiurno4');
INSERT INTO horarios (horario) VALUES ('auladiurno5');
INSERT INTO horarios (horario) VALUES ('auladiurno6');

INSERT INTO horarios (horario) VALUES ('grupodiurno1');
INSERT INTO horarios (horario) VALUES ('grupodiurno2');
INSERT INTO horarios (horario) VALUES ('grupodiurno3');
INSERT INTO horarios (horario) VALUES ('grupodiurno4');
INSERT INTO horarios (horario) VALUES ('grupodiurno5');
INSERT INTO horarios (horario) VALUES ('grupodiurno6');

INSERT INTO horarios (horario) VALUES ('aulanocturno1');
INSERT INTO horarios (horario) VALUES ('aulanocturno2');
INSERT INTO horarios (horario) VALUES ('aulanocturno3');
INSERT INTO horarios (horario) VALUES ('aulanocturno4');
INSERT INTO horarios (horario) VALUES ('aulanocturno5');
INSERT INTO horarios (horario) VALUES ('aulanocturno6');

INSERT INTO horarios (horario) VALUES ('gruponocturno1');
INSERT INTO horarios (horario) VALUES ('gruponocturno2');
INSERT INTO horarios (horario) VALUES ('gruponocturno3');
INSERT INTO horarios (horario) VALUES ('gruponocturno4');
INSERT INTO horarios (horario) VALUES ('gruponocturno5');
INSERT INTO horarios (horario) VALUES ('gruponocturno6');
