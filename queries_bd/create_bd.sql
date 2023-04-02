CREATE DATABASE `diplomado_ibero` /*!40100 COLLATE 'latin1_swedish_ci' */;

CREATE TABLE `usuario` (
	`id_usuario` INT NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50) NOT NULL,
	`apellido` VARCHAR(50) NOT NULL,
	`documento` VARCHAR(50) NOT NULL,
	`correo` VARCHAR(50) NOT NULL,
	`telefono` VARCHAR(50) NOT NULL,
	`direccion` VARCHAR(50) NULL,
	`ciudad` VARCHAR(50) NULL,
	PRIMARY KEY (`id_usuario`)
)
COLLATE='latin1_swedish_ci'
;
CREATE TABLE `cita` (
	`id_cita` INT NOT NULL AUTO_INCREMENT,
	`fk_id_cliente` INT NOT NULL,
	`comentario` VARCHAR(500) NOT NULL,
	`medio_cita` VARCHAR(50) NOT NULL,
	`tipo_servicio` VARCHAR(50) NOT NULL,
	`fecha_cita` DATE NOT NULL,
	`fecha_cita` DATE NOT NULL,
	`fecha_creacion` TIME NOT NULL,
	PRIMARY KEY (`id_cita`),
	INDEX `fk_id_cliente` (`fk_id_cliente`)
)
COLLATE='latin1_swedish_ci'
;
