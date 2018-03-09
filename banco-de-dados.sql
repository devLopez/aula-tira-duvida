-- Aqui realizamos a criação do banco de dados;
create database mensagens;

-- Aqui setamos qual banco devemos utilizar
use mensagens;

-- aqui realizamos a criação da tabela mensagens
create database mensagens(
    id int not null primary key AUTO_INCREMENT,
    nome varchar(46) not null,
    mensagem varchar(250) not null,
    telefone varchar(15)
);