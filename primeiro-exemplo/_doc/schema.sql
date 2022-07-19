use laravel;

drop table pessoas;

create table pessoas(
    id int not null auto_increment,
    nome varchar(100) not null,
    sobrenome varchar(100) not null,
    dtnasc date,
    primary key(id)
);
