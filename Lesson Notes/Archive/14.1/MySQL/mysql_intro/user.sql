CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(20),
    age INT,
    school VARCHAR(255),
    street_address VARCHAR(255),
    city VARCHAR(255),
    state VARCHAR(2),
    zipcode VARCHAR(10),
    accepted_terms BOOLEAN,
    bio TEXT
);

CREATE TABLE game (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    details TEXT,
    sponsor VARCHAR(255),
    location VARCHAR(255),
    capacity INT,
    registration_state VARCHAR(10),
    start_time TIME,
    end_time TIME
);



insert into user (first_name, last_name, email, password)
    values ("bob", "smith", "bob@smith.com", "abc123");
insert into user (first_name, last_name, email, password)
    values ("daniel", "billotte", "daniel@litfuze.com", "mybirthday");    
insert into user (first_name, last_name, email, password)
    values ("sally", "green", "sg@foo.com", "mycatsname");    
insert into user (first_name, last_name, email, password)
    values ("jimbo", "rankins", "jr@rankins.com", "notsosecure");    
insert into user (first_name, last_name, email, password)
    values ("liz", "johnson", "ljohnson@bar.com", "stealme");    
