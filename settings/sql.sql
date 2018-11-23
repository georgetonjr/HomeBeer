create table produtos(
	idproduto int auto_increment primary key,
        nome varchar(40),
        descricao varchar(90),
        valor decimal(10,2),
        imagem varchar(30)
)
        
create table carrinho(
	email varchar(80),
    idproduto int(11),
    primary key (email, idproduto),
    FOREIGN KEY (idproduto) REFERENCES produtos(idproduto)
)        	