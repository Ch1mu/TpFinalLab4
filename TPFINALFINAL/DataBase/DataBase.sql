create DATABASE TpFinalLab4;

USE TpFinalLab4;

CREATE TABLE students
(
	studentID INT NOT NULL PRIMARY KEY,L
    careerId INT NOT NULL,
    fileNumber INT NOT NULL,
    email NVARCHAR(100) NOT NULL,
    active BOOLEAN NOT NULL,
    
)Engine=InnoDB;

CREATE TABLE person
(
        dni INT NOT NULL PRIMARY KEY,
	    firstName NVARCHAR(100) NOT NULL,
        lastName NVARCHAR(100) NOT NULL,
        gender NVARCHAR(100) NOT NULL,
        birthDate DATE NOT NULL,
        phoneNumber INT NOT NULL

)Engine=InnoDB;

CREATE TABLE Account
(
    email NVARCHAR(100) NOT NULL PRIMARY KEY,
    pass password NOT NULL,
    job INT

)Engine=InnoDB;

CREATE TABLE Jobs
(
        jobPositionId INT NOT NULL PRIMARY KEY,
        careerId INT NOT NULL
        descript NVARCHAR(100) NOT NULL

)Engine=InnoDB;

CREATE TABLE Companys
(
    id INT NOT NULL PRIMARY KEY,
    nombre NVARCHAR(100) NOT NULL,
    localidad NVARCHAR(100) NOT NULL,
    rubro NVARCHAR(100) NOT NULL,
        
)Engine=InnoDB;

