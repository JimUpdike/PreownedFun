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
INSERT INTO userRep VALUES (0, 'jim', 'test'); 
INSERT INTO userRep VALUES (0, 'kb', 'ijkl');
INSERT INTO userRep VALUES (0, 'alex','abcd');
INSERT INTO userRep VALUES (0, 'shane', 'efgh');
