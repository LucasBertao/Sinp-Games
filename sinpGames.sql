create database sinpGames;

use sinpGames;

create table torneio(
	id_torneio int not null auto_increment,
	descricao varchar(100) not null,
	inicio date not null,
	termino date not null,
	primary key(id_torneio)
);

create table teste(
	idTeste int not null auto_increment,
	descricao varchar(12) not null,
	primary key(idTeste)
)