CREATE DATABASE contatos;

USE contatos;

CREATE TABLE tb_contatos(
	id_contato INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(60),
    telefone VARCHAR(15),
    email VARCHAR(50)
);