use pooNico;

create table if not exists users (
	id int PRIMARY KEY auto_increment,
	name varchar(255),
	surname varchar(255),
	dni varchar(255) UNIQUE,
	email varchar(255) unique,
	password varchar(255)
);

create table if not exists books (
	id int PRIMARY KEY auto_increment,
	title varchar(255),
	available bool,
	autor varchar(255),
	isbn varchar(255) unique
);