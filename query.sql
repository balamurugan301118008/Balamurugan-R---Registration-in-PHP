create database Registration_Users;

create table users(
    id int not null AUTO_INCREMENT,
    name varchar(255),
    email varchar(255),
    password varchar(255),
    created_at timestamp,
    updated_at timestamp,
    PRIMARY key(id)
    );