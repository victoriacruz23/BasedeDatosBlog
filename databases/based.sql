CREATE DATABASE proyectodb CHARACTER SET utf8 COLLATE utf8_general_ci;
use proyectodb;
CREATE TABLE tipo(
  id_tipo INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(11) NOT NULL, 
  PRIMARY KEY (id_tipo)
);
INSERT INTO tipo(nombre) VALUES ('Admin');
INSERT INTO tipo(nombre) VALUES ('Estandar');
CREATE TABLE usuario(
  id_usuario INT(11) NOT NULL AUTO_INCREMENT,
  id_tipo INT(11) NOT NULL,
  nombres VARCHAR(100),
  username VARCHAR(100),
  clave VARCHAR(100),
  direccion VARCHAR(100),
  PRIMARY KEY (id_usuario),
  CONSTRAINT tipo_FK FOREIGN KEY (id_tipo) REFERENCES tipo(id_tipo)
);
CREATE TABLE categoria (
  id_categoria INT(11) NOT NULL AUTO_INCREMENT,
  descripcion VARCHAR(11) NOT NULL, 
  PRIMARY KEY (id_categoria)
);

CREATE TABLE blog (
  id_blog INT(11) NOT NULL AUTO_INCREMENT,
  id_usuario INT(11) NOT NULL,
  id_categoria INT(11) NOT NULL,
  fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  titulo VARCHAR(20),
  descripcion VARCHAR(500),
  PRIMARY KEY (id_blog),
  CONSTRAINT blog_FK  FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria),
  CONSTRAINT usuario_FK  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);
CREATE TABLE imagen (
  id_imagen INT(11) NOT NULL AUTO_INCREMENT,
  ruta VARCHAR (100),
  id_blog INT(11) NOT NULL,
  PRIMARY KEY (id_imagen),
  CONSTRAINT imagen_FK  FOREIGN KEY (id_blog) REFERENCES blog(id_blog)
);
CREATE TABLE entrada(
  id_entrada INT(11) NOT NULL AUTO_INCREMENT,
  texto_entrada VARCHAR(100),
	id_blog INT(11) NOT NULL,
  PRIMARY KEY (id_entrada),
  CONSTRAINT entrada_FK FOREIGN KEY (id_blog) REFERENCES blog(id_blog)
);
CREATE TABLE comentario(
  id_comentario INT(11) NOT NULL AUTO_INCREMENT,
  comentario VARCHAR(100),
  fecha_comentario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  id_entrada INT(11) NOT NULL,
  PRIMARY KEY (id_comentario),
  CONSTRAINT comentarios_FK FOREIGN KEY (id_entrada) REFERENCES entrada(id_entrada)
);

