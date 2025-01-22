CREATE DATABASE hotel_marques;
USE hotel_marques;

CREATE TABLE Usuario(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
cpf VARCHAR (20) NOT NULL,
senha VARCHAR(50) NOT NULL,
cargo VARCHAR(100) NOT NULL,
statusUsuario VARCHAR(255) NOT NULL,
foto VARCHAR(255)
);

CREATE TABLE Cliente(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
cpf VARCHAR(15) NOT NULL,
telefone VARCHAR(15) NOT NULL,
email VARCHAR(100) NOT NULL,
endereco VARCHAR(100) NOT NULL
);

CREATE TABLE Quarto(
id INT PRIMARY KEY AUTO_INCREMENT,
numeroQuarto VARCHAR(10) NOT NULL,
tipo VARCHAR(50) NOT NULL,
capacidade INT NOT NULL,
precoDiaria FLOAT NOT NULL,
statusQuarto VARCHAR(20) NOT NULL, /*Indica se o quarto está disponível, ocupado...*/
descricao VARCHAR (100)/*Indica o modelo do quarto: se tem ar-condicionado, tem vista pro mar...*/
);

CREATE TABLE Reserva(
id INT PRIMARY KEY AUTO_INCREMENT,
dataEntrada DATE NOT NULL,
dataSaida DATE NOT NULL,
statusReserva VARCHAR(50) NOT NULL,
dataReserva DATETIME NOT NULL,
precoTotal FLOAT NOT NULL,
idCliente INT NOT NULL,
idQuarto INT NOT NULL,
FOREIGN KEY (idCliente) REFERENCES Cliente(id),
FOREIGN KEY (idQuarto) REFERENCES Quarto(id)
);