CREATE DATABASE users;

USE users;

CREATE TABLE client (
  id int NOT NULL AUTO_INCREMENT,
  nome varchar(60) DEFAULT NULL,
  email varchar(60) DEFAULT NULL,
  pass varchar(60) DEFAULT NULL
)

ALTER TABLE client
add CPF varchar(11);

ALTER TABLE client
add ADMISSAO date;

ALTER TABLE client
add CARGO varchar(40);

CREATE TABLE medicos(
  id int NOT NULL AUTO_INCREMENT,
  NOME varchar(60),
  NR_CRM VARCHAR(6),
  UF_CRM VARCHAR(2),
  ESPECIALIDADE VARCHAR(60),
  primary key (id)
);

CREATE TABLE clientes(
  id int NOT NULL AUTO_INCREMENT,
  NOME varchar(60),
  CPF VARCHAR(11),
  CELULAR VARCHAR(10),
  CEP VARCHAR(8),
  ENDEREÇO VARCHAR(80),
  NUMERO VARCHAR(20),
  primary key (id)
);

CREATE TABLE agendamentos(
  id int NOT NULL AUTO_INCREMENT,
  CLIENTE int,
  MEDICO int,
  DATA_AGENDA date,
  HORARIO TIME,
  PRIMARY KEY (id),
  CONSTRAINT fk_cliente FOREIGN KEY (CLIENTE) REFERENCES clientes (id),
  CONSTRAINT fk_medico FOREIGN KEY (MEDICO) REFERENCES medicos (id)
); 