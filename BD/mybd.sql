/*Criando uma tabela usuario com alto incremento.*/
CREATE TABLE usuarios (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(20) NOT NULL,
        sobrenome VARCHAR(120),
        email VARCHAR(50)
);