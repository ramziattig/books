create table users(
    id int AUTO_INCREMENT,
    firstname varchar(50),
    lastname varchar(50),
    email varchar(250) UNIQUE,
    role varchar(50),
    password varchar(50),
    constraint pk_admins PRIMARY KEY(id)
);

ALTER TABLE users
ADD UNIQUE (email);