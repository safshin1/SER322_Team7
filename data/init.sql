CREATE DATABASE PETSPLOSION;

use test;

CREATE TABLE CONTACT_INFO(
	contactInfoID int NOT NULL,
	addressName varchar(15),
	street varchar(15),
	state varchar(15),
	zip int,
	email varchar(15) NOT NULL,
	phone int NOT NULL,
	PRIMARY KEY(contactInfoID)
);

CREATE TABLE ADOPTERS (
	aID int NOT NULL,
	fName varchar(15) NOT NULL,
	lName varchar(15) NOT NULL,
	contactInfoID int NOT NULL,
	PRIMARY KEY(aID),
	FOREIGN KEY(contactInfoID) REFERENCES CONTACT_INFO(contactInfoID)
);

CREATE TABLE BREEDS (
	breedID int NOT NULL,
	breedName varchar(15) NOT NULL,
	petType varchar(8) NOT NULL,
	size varchar(8),
	color varchar(8),
	demeanor varchar(15),
	PRIMARY KEY(breedID)
);

CREATE TABLE LOCATIONS(
	locID int NOT NULL,
	locName varchar(25),
	contactInfoID int NOT NULL,
	PRIMARY KEY(locID),
	FOREIGN KEY(contactInfoID) REFERENCES CONTACT_INFO(contactInfoID)
);

CREATE TABLE ADOPTION_INFO (
	adoptionID int NOT NULL,
	dateAdopted DATE,
	adoptionAgent varchar(15) NOT NULL,
	adopterID int NOT NULL,
	PRIMARY KEY(adoptionID),
	FOREIGN KEY(adopterID) REFERENCES ADOPTERS(aID)
);

CREATE TABLE PETS (
	petID int NOT NULL,
	petName varchar(15) NOT NULL,
	breedID varchar(15) NOT NULL,
	age int,
	sex CHAR(1),
	locID int,
	dateRecieved DATE,
	intakeAgent varchar(15) NOT NULL,
	adoptionID int
	PRIMARY KEY(petID),
	FOREIGN KEY(breedID) REFERENCES BREEDS(breedID),
	FOREIGN KEY(locID) REFERENCES LOCATIONS(locID),
	FOREIGN KEY(adoptionID) REFERENCES ADOPTION_INFO(adoptionID)
);

CREATE TABLE VACCINATION_RECORDS(
	vacRecID int NOT NULL
	rabies DATE,
	parvo DATE,
	distemper DATE,
	canineHep DATE,
	bordetella DATE,
	panleukopenia DATE,
	calicivirus DATE,
	rhinotracheitis DATE,
	polyomavirus DATE,
	PRIMARY KEY(vacRecID)
);

CREATE TABLE VET_RECORDS (
	petID int NOT NULL,
	vetRecID int NOT NULL,
	vacRecID int NOT NULL,
	weight int,
	issue1 DATE,
	issue2 DATE,
	issue3 DATE,
	visitDate DATE NOT NULL,
	PRIMARY KEY(vetRecID),
	FOREIGN KEY(petID) REFERENCES PETS(petID)
	FOREIGN KEY(vacRecID) REFERENCES VACCINATION_RECORDS(vacRecID)
);

CREATE TABLE EMPLOYEES(
	empID int NOT NULL,
	fName varchar(15) NOT NULL,
	lName varchar(15) NOT NULL,
	contactInfoID int NOT NULL,
	empPosition varchar(10),
	locID int,
	PRIMARY KEY(empID),
	FOREIGN KEY(contactInfoID) REFERENCES CONTACT_INFO(contactInfoID),
	FOREIGN KEY(locID) REFERENCES LOCATIONS(locID)
);

CREATE TABLE LOCATIONS(
	locID int NOT NULL,
	locName varchar(25),
	contactInfoID int NOT NULL,
	PRIMARY KEY(locID),
	FOREIGN KEY(contactInfoID) REFERENCES CONTACT_INFO(contactInfoID)
);


