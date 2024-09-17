CREATE DATABASE calendario_eventos;

USE calendario_eventos;

CREATE TABLE tb_eventos(
    id_evento INT AUTO_INCREMENT PRIMARY KEY,
    nome VARVHAR(100),
    data DATE
);