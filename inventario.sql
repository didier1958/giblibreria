
create database libreria;
use libreria;
CREATE TABLE inventario (
  Codigo int NOT NULL ,
  Titulo varchar(100) NOT NULL,
  Autor varchar(100) NOT NULL,
  Genero varchar(100) NOT NULL,
  Editorial varchar(100) NOT NULL,
  Cantidad int(100) NOT NULL,
  Fecha_publicacion date NOT NULL,
  Edicion varchar(100) NOT NULL
);

