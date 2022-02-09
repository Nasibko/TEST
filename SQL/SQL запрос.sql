CREATE TABLE FIO(
    id INT NOT NULL  AUTO_INCREMENT,
    name VARCHAR(40),
    email VARCHAR(40),
    phone_number INT(12) CHECK (phone_number LIKE(+'[7][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]')),
    birth_day DATE,
    age INT(2),
    date_of_creation DATETIME,
    passport INT(10),
    middle_place_in_the_competition INT(1),
    biography TEXT,
    video LONGBLOB,
    
    PRIMARY KEY (id)
);