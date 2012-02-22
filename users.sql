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
INTSERT INTO userRep VALUES (0, jim, test);