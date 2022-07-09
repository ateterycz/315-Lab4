drop database if exists diet;
create database diet;
use diet;
create table diet(food varchar(64), cals varchar(64));

insert into diet values ('apple', '50');
insert into diet values ('apple', '65');
insert into diet values ('coffee', '250');
insert into diet values ('orange', '75');
insert into diet values ('coca cola', '550');

CREATE USER 'lab4user315'@'localhost' IDENTIFIED BY 'password315';
GRANT ALL PRIVILEGES ON * . * TO 'lab4user315'@'localhost';
FLUSH PRIVILEGES;