drop database gamescore;
create database GameScore;
use GameScore;
create table user (
	id int primary key auto_increment,
    name varchar(50),
    email varchar(90),
    password varchar(500),
    current_score int default 0,
    max_score int default 0
);
select * from user;
