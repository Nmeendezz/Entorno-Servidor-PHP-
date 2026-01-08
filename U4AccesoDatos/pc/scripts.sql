use shop;

create table if not exists shop.components (
	id int primary key auto_increment,
	name varchar(255) not null,
	brand varchar(255),
	model varchar(255)
);

create table if not exists shop.pcs(
	id varchar(255) primary key,
	owner varchar(255),
	brand varchar(255),
	price float
);

alter table shop.components 
	add pc_id varchar(255);

alter table shop.components 
	add foreign key (pc_id) references shop.pcs(id);

/* Añadir el pc 'pc7' que tiene 3 componentes n1, n2 y n3*/
INSERT INTO shop.pcs
(id, owner, brand, price)
VALUES('pc7', 'o', 'b', 150);

INSERT INTO shop.components
(name, brand, model, pc_id)
VALUES('n3', 'b', 'm', 'pc7');

INSERT INTO shop.components
(name, brand, model, pc_id)
VALUES('n1', 'b', 'm', 'pc7');

INSERT INTO shop.components
(name, brand, model, pc_id)
VALUES('n2', 'b', 'm', 'pc7');

insert into shop.components (name, brand, model) values ("uno", "marca", "modelo");
select * from shop.components;