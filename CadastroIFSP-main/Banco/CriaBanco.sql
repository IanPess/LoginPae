drop database ifsp;

create database ifsp;

USE ifsp;
CREATE TABLE Cidade (
    id int auto_increment,
    nome varchar(50),
    estado varchar(02),
    primary key (id)
);

CREATE TABLE Cliente (
    id int auto_increment,
    nome varchar(50),
    email varchar(50),
    senha varchar(10),
    ativo bool,
    id_cidade int,
    primary key (id),
    constraint FK_ClienteCidade foreign key (id_cidade) references Cidade(id)
);

insert into cidade (nome, estado) values 
    ('Birigui', 'SP'), 
    ('Araçatuba', 'SP'),
    ('Itu', 'SP'),
    ('Bilac', 'SP'),
    ('Sorocaba', 'SP');

insert into cliente (nome, email, senha, ativo, id_cidade) values 
    ('Victor', 'victoracanassa@gmail.com', '21213', null, '1'), 
    ('Ian', 'ianpesquero@gmail.com', '212913', null, '2'),
    ('Matheus', 'matheusduarte@gmail.com', '2199213', null, '3'),
    ('Nunes', 'nunestapa@gmail.com', '2129013', null, '4'),
    ('Dejair', 'dejairales@gmail.com', '2100213', null, '5');

select * from cliente where id_cidade = 1;

update cidade set nome = 'Bauru' where id = 1;

update cliente set nome = 'Cássio Stersi' where id = 1;

update cliente set id_cidade = '2' where id_cidade = 4;

delete from cidade where id = 4;

delete from cliente where id = 1;

