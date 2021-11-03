create DATABASE TpFinalLab4;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

USE TpFinalLab4;

DROP TABLE IF EXISTS students;
CREATE TABLE students
(
	studentID INT NOT NULL PRIMARY KEY,
    careerId INT NOT NULL,
    fileNumber INT NOT NULL,
    email NVARCHAR(100) NOT NULL,
    active BOOLEAN NOT NULL
    
)Engine=InnoDB;

DROP TABLE IF EXISTS person;
CREATE TABLE person
(
        dni INT NOT NULL PRIMARY KEY,
	    firstName NVARCHAR(100) NOT NULL,
        lastName NVARCHAR(100) NOT NULL,
        gender NVARCHAR(100) NOT NULL,
        birthDate DATE NOT NULL,
        phoneNumber INT NOT NULL

)Engine=InnoDB;

DROP TABLE IF EXISTS account;
CREATE TABLE account
(
    email NVARCHAR(100) NOT NULL PRIMARY KEY,
    pass NVARCHAR(100) NOT NULL,
    job INT

)Engine=InnoDB;

DROP TABLE IF EXISTS jobs;
CREATE TABLE jobs
(
        jobPositionId INT NOT NULL PRIMARY KEY,
        careerId INT NOT NULL,
        descript NVARCHAR(100) NOT NULL

)Engine=InnoDB;

DROP TABLE IF EXISTS companys;
CREATE TABLE companys
(
    id INT NOT NULL PRIMARY KEY,
    nombre NVARCHAR(100) NOT NULL,
    localidad NVARCHAR(100) NOT NULL,
    rubro NVARCHAR(100) NOT NULL
        
)Engine=InnoDB;

DROP TABLE IF EXISTS careers;
CREATE TABLE IF NOT EXISTS careers (
  careerId int(11) NOT NULL PRIMARY KEY,
  description varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  active tinyint(1) NOT NULL,
  
) ENGINE=InnoDB;

