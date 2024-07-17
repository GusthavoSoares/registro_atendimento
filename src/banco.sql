CREATE DATABASE atendimentos;

USE atendimentos;

CREATE TABLE usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) DEFAULT '',
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    cargo ENUM('usuario', 'admin') NOT NULL DEFAULT 'usuario',
    ativo ENUM('Ativado', 'Desativado') NOT NULL DEFAULT 'Ativado'
);

CREATE TABLE solicitante(
	id INT AUTO_INCREMENT PRIMARY KEY, 
    id_usuario INT NOT NULL,
	tipo_pessoa ENUM('pessoa_fisica', 'pessoa_juridica') NOT NULL,
    tipo_solicitante VARCHAR(255) NOT NULL,
    identificador_unico VARCHAR(255) NOT NULL,
    forma_atendimento VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(255) NOT NULL,
    tipo_informacao VARCHAR(255) NOT NULL DEFAULT '',
    descricao VARCHAR(255) NOT NULL DEFAULT '',
    ativo ENUM('Ativado', 'Desativado') NOT NULL DEFAULT 'Ativado',
    data_registro_soli DATETIME NOT NULL,
	FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

CREATE TABLE atendimento(
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_solicitante INT NOT NULL,
	informacao VARCHAR(255) NOT NULL,
    data_registro DATETIME NOT NULL,
    FOREIGN KEY (id_solicitante) REFERENCES solicitante(id)    
);

CREATE INDEX data_solicitante_index ON solicitante(data_registro_soli);
CREATE INDEX data_atendimento_index ON atendimento(data_registro);
CREATE INDEX email_solicitante_index ON solicitante(email);
