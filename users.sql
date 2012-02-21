DROP DATABASE IF EXISTS users;
CREATE DATABASE IF NOT EXISTS users;
GRANT ALL PRIVILEGES ON users.* TO 'Useruser'@'localhost' identified by 'user';

USE users;
CREATE TABLE userRep (
	id int NOT NULL auto_increment,
	username VARCHAR(20) NOT NULL;
	password VARCHAR (20) NOT NULL;
	PRIMARY KEY (id) 
	);
