DROP DATABASE IF EXISTS dbdocker;

CREATE DATABASE dbdocker;

USE dbdocker;

CREATE OR REPLACE TABLE User (
	id int NOT NULL AUTO_INCREMENT,
	lastName VARCHAR(63),
	firstName VARCHAR(63),
	age int,
	CONSTRAINT user_pk PRIMARY KEY (id)
);

INSERT INTO User (lastName, firstName, age) VALUES ('Barseyni', 'Nicolas', 23);
INSERT INTO User (lastName, firstName, age) VALUES ('Daninthe', 'Diego', 21);