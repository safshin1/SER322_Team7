CREATE DATABASE petsplosion;

use petsplosion;

CREATE TABLE ADOPTERS (
	aID INT NOT NULL,
	fName VARCHAR(15) NOT NULL,
	lName VARCHAR(15) NOT NULL,
	contactInfoID INT NOT NULL,
	PRIMARY KEY(aID),
	FOREIGN KEY(contactInfoID) references CONTACT_INFO(contactInfoID)
);

CREATE TABLE PETS (
	petID INT NOT NULL,
	petName VARCHAR(15) NOT NULL,
	breedID VARCHAR(15) NOT NULL,
	age INT,
	sex CHAR(1),
	locID INT,
	dateRecieved DATE,
	intakeAgent VARCHAR(15) NOT NULL,
	adoptionID INT,
	PRIMARY KEY (petID),
	FOREIGN KEY(breedID) references BREEDS(breedID),
	FOREIGN KEY(locID) references LOCATIONS(locID),
	FOREIGN KEY(adoptionID) references ADOPTION_INFO(adoptionID)
);

CREATE TABLE ADOPTION_INFO (
	adoptionID INT NOT NULL,
	dateAdopted DATE,
	adoptionAgent VARCHAR(15) NOT NULL,
	adopterID INT NOT NULL,
	PRIMARY KEY(adoptionID),
	FOREIGN KEY(adopterID) references ADOPTERS(aID)
);

CREATE TABLE BREEDS (
	breedID INT NOT NULL,
	breedName VARCHAR(15) NOT NULL,
	petType VARCHAR(8) NOT NULL,
	size VARCHAR(8),
	color VARCHAR(8),
	demeanor VARCHAR(15),
	PRIMARY KEY(breedID)
);

CREATE TABLE VET_RECORDS (
	petID INT NOT NULL,
	vetRecID INT NOT NULL,
	vacRecID INT NOT NULL,
	weight INT,
	issue1 DATE,
	issue2 DATE,
	issue3 DATE,
	visitDate DATE NOT NULL,
	PRIMARY KEY(vetRecID),
	FOREIGN KEY(petID) references PETS(petID),
	FOREIGN KEY(vacRecID) references VACCINATION_RECORDS(vacRecID)
);

CREATE TABLE VACCINATION_RECORDS(
	vacRecID INT NOT NULL,
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

CREATE TABLE CONTACT_INFO(
	contactInfoID INT NOT NULL,
	addressName VARCHAR(15),
	street VARCHAR(15),
	state VARCHAR(15),
	zip INT,
	email VARCHAR(15) NOT NULL,
	phone INT NOT NULL,
	PRIMARY KEY(contactInfoID)
);

CREATE TABLE EMPLOYEES(
	empID INT NOT NULL,
	fName VARCHAR(15) NOT NULL,
	lName VARCHAR(15) NOT NULL,
	contactInfoID INT NOT NULL,
	empPosition VARCHAR(10),
	locID INT,
	PRIMARY KEY(empID),
	FOREIGN KEY(contactInfoID) references CONTACT_INFO(contactInfoID),
	FOREIGN KEY(locID) references LOCATIONS(locID)
);

CREATE TABLE LOCATIONS(
	locID INT NOT NULL,
	locName VARCHAR(25),
	contactInfoID INT NOT NULL,
	PRIMARY KEY(locID),
	FOREIGN KEY(contactInfoID) references CONTACT_INFO(contactInfoID)
);
