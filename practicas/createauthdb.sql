--NOMBRE BASE DE DATOS: bd_test_login

create table auth (
	name		varchar(10) not null,
	pass	 	varchar(30) not null,
        primary key	(name)
);


insert into auth values
  ( 'testuser', 'test123');

insert into auth values
  ( 'user', 'user' );

