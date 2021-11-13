create DATABASE TpFinalLab4;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

USE TpFinalLab4;

DROP TABLE IF EXISTS students;
CREATE TABLE students
(
	studentId INT  AUTO_INCREMENT PRIMARY KEY ,
    dni  varchar(100) NOT NULL,
	firstName varchar(100) NOT NULL,
    lastName varchar(100) NOT NULL,
    gender varchar(100) NOT NULL,
    birthDate varchar(100) NOT NULL,
    phoneNumber  varchar(100) NOT NULL,
    careerId INT NOT NULL,
    fileNumber  varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    activ varchar(100) NOT NULL
    
);


DROP TABLE IF EXISTS JobApplies;

CREATE TABLE JobApplies
(
	ApplyId INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Apellido VARCHAR(100) NOT NULL,
    jobId INT,
    CompId INT,
    OfferId INT,
   constraint fk_OfferID foreign key (OfferID) references jobOffers(offerID) ON DELETE CASCADE ON UPDATE CASCADE
);


DROP TABLE IF EXISTS account;
CREATE TABLE account
(
    email VARCHAR(100) NOT NULL PRIMARY KEY,
    pass VARCHAR(100) NOT NULL,
    role VARCHAR(100) NOT NULL

);

DROP TABLE IF EXISTS jobOffers;
CREATE TABLE jobOffers
(
		offerID INT AUTO_INCREMENT PRIMARY KEY,
        jobPositionId INT NOT NULL,
        careerId INT NOT NULL,
        description VARCHAR(100) NOT NULL,
        companyID int NOT NULL,
        vacancies int,
        active int, 
        constraint fk_companyID foreign key (companyID) references companys(id) ON DELETE CASCADE ON UPDATE CASCADE
);

DROP TABLE IF EXISTS companys;
CREATE TABLE companys
(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    localidad VARCHAR(100) NOT NULL,
    rubro VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    active int
        
);

DROP TABLE IF EXISTS careers;
CREATE TABLE IF NOT EXISTS careers (
  careerId int  AUTO_INCREMENT PRIMARY KEY,
  description varchar(100),
  active varchar(100) NOT NULL
  
);


insert into account values ("admin@utn.com", "admin", "Admin");
UPDATE account SET role = "Admin" where email = "admin@utn.com";
 
select * from careers;
select * from account;
select * from companys;
select * from job;
select * from students;
select * from JobApplies;
select * from JobOffers;