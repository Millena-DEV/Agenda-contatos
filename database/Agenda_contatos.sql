-- Database: Agenda_contatos

-- DROP DATABASE IF EXISTS "Agenda_contatos";

CREATE DATABASE "Agenda_contatos"
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Portuguese_Brazil.1252'
    LC_CTYPE = 'Portuguese_Brazil.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

CREATE TABLE Pessoa_Fisica (
	idPessoa_Fisica SERIAL PRIMARY KEY,
	cpf VARCHAR(11)
);

CREATE TABLE Pessoa_Juridica (
	idPessoa_Juridica SERIAL PRIMARY KEY,
	cnpj VARCHAR(14)
);

CREATE TABLE Endereco (
	idEndereco SERIAL PRIMARY KEY,
	logradouro VARCHAR(50),
	cep VARCHAR(10),
	numero VARCHAR(5),
	bairro VARCHAR(50),
	cidade VARCHAR(50),
	estado VARCHAR(50)
);

CREATE TABLE Cliente (
	idCliente SERIAL PRIMARY KEY,
	nome VARCHAR(50) NOT NULL,
	
	idPessoa_Fisica INTEGER NOT NULL,
	idPessoa_Juridica INTEGER NOT NULL,
	idEndereco INTEGER NOT NULL,
	
	FOREIGN KEY (idPessoa_Fisica) REFERENCES Pessoa_Fisica(idPessoa_Fisica),
	FOREIGN KEY (idPessoa_Juridica) REFERENCES Pessoa_Juridica(idPessoa_Juridica),
	FOREIGN KEY (idEndereco) REFERENCES Endereco(idEndereco)
);

CREATE TABLE Tipo_Contato (
	idTipo_Contato SERIAL PRIMARY KEY,
	telefone VARCHAR(15) NOT NULL,
	email VARCHAR(120) NOT NULL,
	
	idCliente INTEGER NOT NULL,
	
	FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente)
);

CREATE TABLE Contatos (
	idContato SERIAL PRIMARY KEY,
	
	idTipo_Contato INTEGER NOT NULL,
	idCliente INTEGER NOT NULL,
	
	FOREIGN KEY (idTipo_Contato) REFERENCES Tipo_Contato(idTipo_Contato),
	FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente)
);
