drop database if exists race;
create database race;
use race;

create table Race(
    raceId int auto_increment primary key not null,
    raceName varchar(255) not null,
    distance int not null,
    location varchar(255) not null,
    startDate int(11) not null
);

insert into Race (raceName, distance, location, startDate) values ("Beat the heat", 3, "Phoenix", 1443475289);
insert into Race (raceName, distance, location, startDate) values ("Snowmathon", 26, "Flagstaff", 1443472399);
insert into Race (raceName, distance, location, startDate) values ("Escape LA", 60, "Los Angeles", 1443425369);
