drop database pettest;
create database pettest;
use pettest;

-- create statements
create table user (
    id int auto_increment primary key,
    firstname varchar(255),
    lastname varchar(255)
);

CREATE TABLE pet (
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) DEFAULT NULL,
  name varchar(255) DEFAULT NULL,
  pet_type_id int(11) DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE pet_type (
  id int(11) NOT NULL AUTO_INCREMENT,
  type varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
);

-- insert statements

insert into user (firstname, lastname) values ('fred', 'green');
insert into pet_type (type) values ('dog');    
insert into pet (user_id, name, pet_type_id) values (1, 'fido', 1);


-- simple queries (selects)
select firstname from user;
select * from user where firstname = 'fred';

select * from pet_type;

select * from pet;
select name from pet where pet_type_id = 1;


-- --select that joins all three tables

-- select all fields from user and pet so that pets are linked to their owner
select * from user, pet where user.id = pet.user_id;

-- select name & type from pet so that pets are linked to their pet-type
select name, type from pet, pet_type where pet.pet_type_id = pet_type.id;

-- select all fields from pet where pet-type is dog
select * from pet, pet_type
    where pet.pet_type_id = pet_type.id and pet_type.type = 'dog';

-- join all three tables so pets are linked to their owner and their pet-type
select * from user, pet, pet_type
    where user.id = pet.user_id and pet.pet_type_id=pet_type.id;


