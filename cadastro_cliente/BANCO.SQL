CREATE DATABASE sistema_clientes;

USE sistema_clientes;

CREATE TABLE cliente(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    arquivo_pdf VARCHAR(255)
);