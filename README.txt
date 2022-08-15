_______________________________________________________


VIDEO DE APRESENTAÇÃO DO PROJETO:
https://youtu.be/41Bvsgl5eBg

_______________________________________________________


Comando para a criacao do banco:


create database db_colaboradores;
use db_colaboradores;

create table tbl_produtos( 
referencia varchar(50) not null, 
nome varchar(30) not null, 
preco float not null, 
fornecedor varchar(50) not null, 
primary key (referencia), 
foreign key (fornecedor) references tbl_fornecedores(nome) 
);


create table tbl_fornecedores( 
nome varchar(50) primary key not null 
);



// TESTES REALIZADOS
insert into tbl_fornecedores values("Fornecedor X");
insert into tbl_fornecedores values("Fornecedor Y");
insert into tbl_fornecedores values("Fornecedor Z");

insert into tbl_produtos values("mlt", "Mouse Logitech", 120, "Fornecedor X")
insert into tbl_produtos values("nbkd", "Notebook Dell", 4000, "Fornecedor Y")
insert into tbl_produtos values("vdgps4", "Playstation 4", 3000, "Fornecedor Z")
insert into tbl_produtos values("tclr", "Teclado Razer", 800, "Fornecedor X")
insert into tbl_produtos values("fnx", "Fone HyperX", 400, "Fornecedor Y")
