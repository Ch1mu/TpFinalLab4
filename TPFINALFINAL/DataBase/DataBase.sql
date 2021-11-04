create DATABASE TpFinalLab4;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

USE TpFinalLab4;

DROP TABLE IF EXISTS students;
CREATE TABLE students
(
	studentId INT NOT NULL PRIMARY KEY,
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
select *from students;



DROP TABLE IF EXISTS account;
CREATE TABLE account
(
    email NVARCHAR(100) NOT NULL PRIMARY KEY,
    pass NVARCHAR(100) NOT NULL,
    job INT

);

DROP TABLE IF EXISTS jobs;
CREATE TABLE jobs
(
        jobPositionId INT NOT NULL PRIMARY KEY,
        careerId INT NOT NULL,
        descript NVARCHAR(100) NOT NULL,
        companyId INT NOT NULL,
        constraint fk_companyId foreign key (companyId) references companys(id)
);

DROP TABLE IF EXISTS companys;
CREATE TABLE companys
(
    id INT NOT NULL PRIMARY KEY,
    nombre NVARCHAR(100) NOT NULL,
    localidad VARCHAR(100) NOT NULL,
    rubro VARCHAR(100) NOT NULL
        
);

DROP TABLE IF EXISTS careers;
CREATE TABLE IF NOT EXISTS careers (
  careerId int(11) NOT NULL PRIMARY KEY,
  description varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  active varchar(100) NOT NULL
  
);



