CREATE DATABASE semana_academica;

USE semana_academica;

CREATE TABLE inscricoes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    telefone VARCHAR(20)
);