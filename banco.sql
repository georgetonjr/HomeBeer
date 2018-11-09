create table usuario(
	userid auto_increment primary key,
	nome varchar(63) ,
    cpfcnpj varchar(18) unique,
    email varchar(80) unique,
    senha varchar
);