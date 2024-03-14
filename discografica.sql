
create database discografica;

create table canciones (
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar (200),
    genero varchar (20),
    compositor  varchar (20),

);

create table usuarios (
    id_usuario int AUTO_INCREMENT PRIMARY  KEY,
    nombre varchar  (39),
    email varchar (30),
    telefono varchar (20),
);

create table compras (
    id_compras int AUTO_INCREMENT PRIMARY KEY,
    fecha_compra date ,
    id_usuario int,
    id_canciones int,
    foreng key  id_usuarios references compras (id);
    foreng key (id_canciones) references canciones (id);
);