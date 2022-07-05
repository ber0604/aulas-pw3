use laravel;

create table pessoas(
    id int not null auto_increment,
    nome varchar(100) not null,
    sobrenome varchar(100) not null,
    primary key(id)
);
