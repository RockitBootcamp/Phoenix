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