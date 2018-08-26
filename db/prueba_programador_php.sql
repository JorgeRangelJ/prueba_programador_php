-- Elimina la base de datos si existe
DROP DATABASE IF EXISTS prueba_programador_php;

-- crea la base de datos prueba_programador_php
CREATE DATABASE prueba_programador_php;

-- Usa la base de datos prueba_programador_php
USE prueba_programador_php;

-- Crea la tabla proceso
CREATE TABLE procesos (
	proceso_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	numero_proceso VARCHAR(8) NOT NULL UNIQUE,
	descripcion VARCHAR(200) NOT NULL,
	fecha_creacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	sede_id INTEGER UNSIGNED NULL,
	usuario_id INTEGER UNSIGNED NULL,
	presupuesto DOUBLE(9,3) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Inserta datos del proceso

INSERT INTO procesos (proceso_id, numero_proceso, descripcion, fecha_creacion, sede_id, usuario_id, presupuesto) VALUES
(1, '12345678', 'Proceso Prueba 1 Update', '2018-08-26 22:59:59', 1, NULL, 200000.00);

-- Crea la tabla sedes

CREATE TABLE sedes (
	sede_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insertar las sedes (Bogotá, México, Peru)

INSERT INTO sedes VALUES 
(1,'Bogota'),
(2,'Mexico'),
(3,'Peru');

-- Crea la tabla usuarios
CREATE TABLE usuarios (
	usuario_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	usuario VARCHAR(12) NOT NULL UNIQUE,
	nombre VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	contrasena VARCHAR(100) NOT NULL,
	confirma_contrasena VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insertar datos Usuario

INSERT INTO usuarios (usuario_id, usuario, nombre, email, contrasena, confirma_contrasena) VALUES
(1, 'Jorge95', 'Jorge Rangel Jimenez', 'rangel2016sistemas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e');