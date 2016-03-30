create database if not exists `f2e`;
use f2e;

drop tables if exists `imgur`;
create table `imgur`(
	id int not null auto_increment,
    pic_add varchar(100) not null,
    primary key(id)
);

INSERT INTO `imgur` (pic_add) VALUES('https://i.imgur.com/7I2eYt9.gif');