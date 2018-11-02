create database homebeer;
use homebeer;

create table IF NOT EXISTS usuario (
	
	email varchar(50) unique,
    
	senha varchar(32),
   
 	nome varchar(80),
   
 	anoN date,
    
	cpf_cnpj varchar(16) primary key

)
