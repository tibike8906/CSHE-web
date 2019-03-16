create database cshe;

create table users(
    user_name Varchar(15) primary key not null,
	user_veznev Varchar(15) not null,
    user_kernev Varchar(15) not null,
    user_email Varchar(30) not null,
    user_jelszo Varchar(64) not null
);
create table emails(
    id int AUTO_INCREMENT primary key not null,
	email Varchar(30) not null,
    szoveg Varchar(400) not null
);

CREATE USER 'cshe_net'@'localhost' IDENTIFIED BY 'alfa1';
CREATE USER 'cshe_net'@'%' IDENTIFIED BY 'alfa1';


GRANT SELECT, INSERT, DELETE ON emails TO 'cshe_net'@'localhost' IDENTIFIED BY 'alfa1';
GRANT SELECT, INSERT, DELETE ON emails TO 'cshe_net'@'%' IDENTIFIED BY 'alfa1';

GRANT SELECT, INSERT, DELETE ON users TO 'cshe_net'@'localhost' IDENTIFIED BY 'alfa1';
GRANT SELECT, INSERT, DELETE ON users TO 'cshe_net'@'%' IDENTIFIED BY 'alfa1';



