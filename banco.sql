CREATE TABLE usuarios
(
  	id int NOT null PRIMARY KEY AUTO_INCREMENT,
  	nome varchar(255) not null,
 	usuario varchar(255) not null,
        email varchar(255) not null,
        senha varchar(255) not null
);

INSERT INTO usuarios (nome, usuario, email, senha)
VALUES ('Admin do Sistema', 'admin','admin@sp.senac.br','123');

