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
INSERT INTO userRep VALUES (1, 'jim', 'test'); 
INSERT INTO userRep VALUES (2, 'kb', 'ijkl');
INSERT INTO userRep VALUES (3, 'alex','abcd');
INSERT INTO userRep VALUES (4, 'shane', 'efgh');


DROP TABLE IF EXISTS PostAGame;
CREATE TABLE PostAGame (
	numbs INT (11) NOT NULL AUTO_INCREMENT,
	gameName VARCHAR (30) NOT NULL default '',
	creators VARCHAR(20) NOT NULL default '',
	genre VARCHAR (30) NOT NULL default '',
	yearMade INT (4) NOT NULL default '0',
	rating VARCHAR (20)NOT NULL default '',
	manual VARCHAR (3)NOT NULL default '',
	cond VARCHAR (15)NOT NULL default '',
	console VARCHAR (15)NOT NULL default '',
	PRIMARY KEY (numbs)
);