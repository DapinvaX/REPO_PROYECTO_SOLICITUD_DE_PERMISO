-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema solicitud
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `solicitud` ;

-- -----------------------------------------------------
-- Schema solicitud
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `solicitud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `solicitud` ;

-- -----------------------------------------------------
-- Table `solicitud`.`profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `solicitud`.`profesor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `dni` VARCHAR(9) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(9) NOT NULL,
  `firma` VARCHAR(45) NOT NULL,
  `asignatura` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 26
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `solicitud`.`permisos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `solicitud`.`permisos` (
  `idPermiso` INT NOT NULL AUTO_INCREMENT,
  `fechaIni` DATE NOT NULL,
  `fechaFin` DATE NOT NULL,
  `motivo` VARCHAR(450) NOT NULL,
  `diaCompleto` TINYINT NOT NULL,
  `concedido` TINYINT NOT NULL,
  `fecha` DATE NOT NULL,
  `profesor` INT NOT NULL,
  PRIMARY KEY (`idPermiso`),
  INDEX `fk_permisos_1_idx` (`profesor` ASC) VISIBLE,
  CONSTRAINT `fk_permisos_1`
    FOREIGN KEY (`profesor`)
    REFERENCES `solicitud`.`profesor` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 23
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `solicitud`.`horarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `solicitud`.`horarios` (
  `horario` INT NOT NULL AUTO_INCREMENT,
  `auladiurno1` VARCHAR(30) NULL DEFAULT NULL,
  `auladiurno2` VARCHAR(30) NULL DEFAULT NULL,
  `auladiurno3` VARCHAR(30) NULL DEFAULT NULL,
  `auladiurno4` VARCHAR(30) NULL DEFAULT NULL,
  `auladiurno5` VARCHAR(30) NULL DEFAULT NULL,
  `auladiurno6` VARCHAR(30) NULL DEFAULT NULL,
  `aulanocturno1` VARCHAR(30) NULL DEFAULT NULL,
  `aulanocturno2` VARCHAR(30) NULL DEFAULT NULL,
  `aulanocturno3` VARCHAR(30) NULL DEFAULT NULL,
  `aulanocturno4` VARCHAR(30) NULL DEFAULT NULL,
  `aulanocturno5` VARCHAR(30) NULL DEFAULT NULL,
  `aulanocturno6` VARCHAR(30) NULL DEFAULT NULL,
  `grupodiurno1` VARCHAR(30) NULL DEFAULT NULL,
  `grupodiurno2` VARCHAR(30) NULL DEFAULT NULL,
  `grupodiurno3` VARCHAR(30) NULL DEFAULT NULL,
  `grupodiurno4` VARCHAR(30) NULL DEFAULT NULL,
  `grupodiurno5` VARCHAR(30) NULL DEFAULT NULL,
  `grupodiurno6` VARCHAR(30) NULL DEFAULT NULL,
  `gruponocturno1` VARCHAR(30) NULL DEFAULT NULL,
  `gruponocturno2` VARCHAR(30) NULL DEFAULT NULL,
  `gruponocturno3` VARCHAR(30) NULL DEFAULT NULL,
  `gruponocturno4` VARCHAR(30) NULL DEFAULT NULL,
  `gruponocturno5` VARCHAR(30) NULL DEFAULT NULL,
  `gruponocturno6` VARCHAR(30) NULL DEFAULT NULL,
  INDEX `fk_horarios_1_idx` (`horario` ASC) VISIBLE,
  CONSTRAINT `fk_horarios_1`
    FOREIGN KEY (`horario`)
    REFERENCES `solicitud`.`permisos` (`idPermiso`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
