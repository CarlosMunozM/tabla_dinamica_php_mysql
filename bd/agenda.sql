create database tabla_dinamica;
use tabla_dinamica;

create table personas(
	id int auto_increment,
	nombre varchar(50),
	apellido varchar(50),
	email varchar(50),
	telefono varchar(50),
	primary key(id) 
);
