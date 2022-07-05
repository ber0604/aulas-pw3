use laravel;


create table livros(
    id int not null auto_increment,
    autor varchar(100) not null,
    titulo varchar(100) not null,
    primary key(id)
);
