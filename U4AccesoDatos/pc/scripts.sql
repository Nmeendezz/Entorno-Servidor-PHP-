use shop;

create table if not exists shop.components (
	id int PRIMARY key auto_increment,
	name varchar(255) not null,
	brand varchar(255),
	model varchar(255));

insert into shop.components (name, brand, model) values ("uno", "marca", "modelo");
select * from shop.components;