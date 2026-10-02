CREATE DATABASE IF NOT EXISTS crud_brinquedos;
use crud_brinquedos;

CREATE TABLE IF NOT EXISTS brinquedos (
    id INT AUTO_INCREMENTE PRIMARY KEY NOT NULL,
    nome varchar(100) NOT NULL,
    categoria varchar(100) NOT NULL,
    faixaEtarioa INT NOT NULL,
    preco decimal (10,2) NOT NULL,
    QuantiaEstoque int (1000) NOT NULL
)