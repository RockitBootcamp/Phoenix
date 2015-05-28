create database users;
use users;

create table user (
    id int auto_increment primary key,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    phone varchar(255)
);

insert into user (first_name, last_name, email, phone)
    values
    ('bob', 'dylan', 'bob@rollin.stone', '111-222-1969'),
    ('joan', 'jett', 'joan@rocknroll.com', '888-777-1234');