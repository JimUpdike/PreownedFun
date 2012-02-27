DROP DATABASE IF EXISTS userdb;
CREATE DATABASE IF NOT EXISTS userdb;
GRANT ALL PRIVILEGES ON userdb.* TO 'Useruser'@'localhost' identified by 'user';
USE userdb;
CREATE TABLE userRep (
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(20),
	password VARCHAR (20),
	PRIMARY KEY (id)
	);
INTSERT INTO userRep VALUES (0, 'jim', 'test'); 
INSERT INTO userRep VALUES (1, 'kb', 'ijkl');
INSERT INTO userRep VALUES (2, 'alex','abcd');
INSERT INTO userRep VALUES (4, 'shane', 'efgh');