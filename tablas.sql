use tareas_esi;

create table if not exists contacts(
    phone varchar(15) primary key,
    name varchar(15) not null ,
    last_name varchar(15) not null
);

insert into contacts values ('21341234','Lucas','Pintos'), ('098123456','Agustin','Fernandez');