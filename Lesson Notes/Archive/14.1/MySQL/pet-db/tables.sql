CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    username VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE pet (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    name VARCHAR(255),
    pet_type_id INT
);

CREATE TABLE pet_type (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(255)
);

-- join the three tables together
select p.name, pt.type, u.firstname
from pet as p, pet_type as pt, user as u 
where p.pet_type_id = pt.id
and p.user_id = u.id;

-- create above select as a view (virtal table)
create view pet_owner as
select p.name, pt.type, u.firstname
from pet as p, pet_type as pt, user as u 
where p.pet_type_id = pt.id
and p.user_id = u.id;

