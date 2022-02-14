/*
Tori Cox
PHP Website Example
*/

--This script creates the database, tables, and rows

-- Create Database
DROP DATABASE IF EXISTS cox_tori_universe;
CREATE DATABASE cox_tori_universe;
USE cox_tori_universe; 

-- Create Tables
CREATE TABLE country (
  citizenship      VARCHAR(255)   NOT NULL,
  country_name     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (citizenship)
);

CREATE TABLE hero_character (
  hero_id       INT(11)        NOT NULL   AUTO_INCREMENT,
  name       	VARCHAR(255)   NOT NULL,
  real_name     VARCHAR(255)   NOT NULL,
  citizenship   VARCHAR(255)   NOT NULL,
  PRIMARY KEY (hero_id),
  
  FOREIGN KEY (citizenship) REFERENCES country(citizenship)
);


-- Insert Data
INSERT INTO country VALUES
('American', 'United States of America'),
('Asgardian','Asgard'),
('Sokovian','Sokovia'),
('Wakandian', 'Wakanda');

INSERT INTO hero_character VALUES
(1, 'Iron Man', 'Anthony Edward Stark', 'American'),
(2, 'Scarlet Witch', 'Wanda Maximoff', 'Sokovian'),
(3, 'Thor', 'Thor Odinson', 'Asgardian'),
(4, 'Hulk', 'Robert Bruce Banner', 'American'),
(5, 'Ant-Man', 'Scott Edward Harris Lang', 'American'),
(6, 'Spider Man', 'Peter Benjamin Parker', 'American'),
(7, 'Star-Lord', 'Peter Jason Quill', 'American'),
(8, 'Doctor Strange', 'Stephen Vincent Strange', 'American'),
(9, 'Valkyrie', 'Brunnhilde', 'Asgardian'),
(10, 'Black Panther', 'TChalla', 'Wakandian'),
(11, 'Quicksilver', 'Pietro Maximoff', 'Sokovian'),
(12, 'Okoye', 'Okoye', 'Wakandian'),
(13, 'Nakia', 'Nakia', 'Wakandian'),
(14, 'Shuri', 'Shuri', 'Wakandian');


-- Create User
GRANT SELECT, INSERT, DELETE, UPDATE
ON cox_tori_universe.*
TO toriinternet@localhost
IDENTIFIED BY 'toricinema';