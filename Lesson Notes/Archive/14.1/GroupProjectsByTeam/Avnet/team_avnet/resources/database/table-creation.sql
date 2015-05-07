CREATE TABLE user (
	user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	email VARCHAR(255),
	password VARCHAR(255),
	created_timestamp TIMESTAMP,
	last_login TIMESTAMP
)

insert into user (first_name, last_name, email, password)
    values ("bob", "smith", "bob@smith.com", "abc123");


CREATE TABLE game (
	game_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255),
	description TEXT,
	start_time DATETIME,
	end_time DATETIME,
	equipment TEXT,
	skill_requirements TEXT,
	scoring TEXT,
	date_created TIMESTAMP
)

insert into game (title, description, start_time, end_time, equipment, skill_requirements, scoring)
    values ("Desktop Domination", 

    	"Students will be provided with laptops to work in a Windows 7 environment to complete certain tasks and fix specific issues. They will review and go through a build checklist along with completing other side tasks in a given timeframe.", 

    	"2014-04-21 08:00:00", 
    	"2014-04-21 12:00:00", 

    	"",
    	 
    	"Understanding of a Windows client/domain infrastructure
    	Some knowledge and familiarity in a Windows 7 environment
    	Basic computer troubleshooting skills, mostly on the software-end",

    	"");


CREATE TABLE team (
	team_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255)
)

insert into team (name)
    values ("Binary Bombers");

insert into team (name)
    values ("Team Awesome");

insert into team (name)
    values ("Nerds on Parade");

CREATE TABLE user_team (
	user_team_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	user_id INT,
	team_id INT
)

CREATE TABLE game_team (
	game_team_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	game_id INT,
	team_id INT
)

CREATE TABLE school (
	school_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255)
)

insert into school (name)
    values ("University of RockIT");

insert into school (name)
    values ("Taylor University");

insert into school (name)
    values ("Arizona State University");

insert into school (name)
    values ("University of Arizona");

insert into school (name)
    values ("College of Dupage");