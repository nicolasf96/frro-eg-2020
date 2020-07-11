CREATE SCHEMA pps;
USE pps;
CREATE TABLE tipo_usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
    descr VARCHAR(255)
);
CREATE TABLE usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(255),
    nombre VARCHAR(255),
    legajo VARCHAR(255),
    password VARCHAR(255),
    tipo_usuario INT
);
CREATE TABLE vistas(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    tipo VARCHAR(50),
    controller VARCHAR(255),
    accion VARCHAR(255)
);
CREATE TABLE vistas_usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
    tipo_id INT,
    vista_id INT
);
CREATE TABLE pps(
	id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT,
    nombre VARCHAR(255),
    area VARCHAR(255),
    contacto VARCHAR(50),
    descripcion VARCHAR(255),
    tutor INT,
    estado INT
);
CREATE TABLE seguimientos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    pps_id INT,
    dir VARCHAR(255),
    tipo INT,
    fecha DATETIME,
    estado INT
);

ALTER TABLE usuarios 
ADD CONSTRAINT tipo_usuario 
FOREIGN KEY(tipo_usuario)
REFERENCES tipo_usuarios(id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE pps 
ADD CONSTRAINT tutor 
FOREIGN KEY(tutor)
REFERENCES usuarios(id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE seguimientos 
ADD CONSTRAINT pps_seg 
FOREIGN KEY(pps_id)
REFERENCES pps(id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE pps 
ADD CONSTRAINT usuario_pps
FOREIGN KEY(usuario_id)
REFERENCES usuarios(id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE vistas_usuarios 
ADD CONSTRAINT tipo_usuario_vista
FOREIGN KEY(tipo_id)
REFERENCES tipo_usuarios(id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE vistas_usuarios 
ADD CONSTRAINT vista
FOREIGN KEY(vista_id)
REFERENCES vistas(id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;




