CREATE DATABASE GerenciadorAtendimentos;

USE GerenciadorAtendimentos;

CREATE TABLE atendente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    nivel_acesso ENUM('admin', 'atendente') NOT NULL
);

CREATE TABLE formaAtendimento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL
);


CREATE TABLE solicitante (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL
);


CREATE TABLE tipoAtendimento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    solicitante_id INT NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    FOREIGN KEY (solicitante_id) REFERENCES solicitante(id)
);


CREATE TABLE atendimento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    atendente_id INT NOT NULL,
    forma_atendimento_id INT NOT NULL,
    solicitante_id INT NOT NULL,
    tipo_atendimento_id INT NOT NULL,
    detalhes TEXT,
    data_hora DATETIME NOT NULL,
    FOREIGN KEY (atendente_id) REFERENCES atendente(id),
    FOREIGN KEY (forma_atendimento_id) REFERENCES formaAtendimento(id),
    FOREIGN KEY (solicitante_id) REFERENCES solicitante(id),
    FOREIGN KEY (tipo_atendimento_id) REFERENCES tipoAtendimento(id)
);