DROP DATABASE IF EXISTS userdb;
CREATE DATABASE IF NOT EXISTS userdb;
GRANT ALL PRIVILEGES ON userdb.* TO 'Useruser'@'localhost' identified by 'user';
USE userdb;
CREATE TABLE userRep (
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(20),
	password VARCHAR (20),
	rating dec (3,2) NOT NULL default -1,
	PRIMARY KEY (id)
	);
INSERT INTO userRep VALUES (0, 'jim', 'test', -1); 
INSERT INTO userRep VALUES (0, 'kb', 'ijkl', -1);
INSERT INTO userRep VALUES (0, 'alex','abcd', -1);
INSERT INTO userRep VALUES (0, 'shane', 'efgh', -1);

CREATE TABLE currentPostings (
	post_id INT  NOT NULL AUTO_INCREMENT,
	gameName VARCHAR (75) NOT NULL default '',
        creators VARCHAR (50) NOT NULL default '',
	genre VARCHAR (30) NOT NULL default '',
	yearMade INT(4) NOT NULL default 1,
	manual VARCHAR (3)NOT NULL default '',
	cond VARCHAR (15)NOT NULL default '',
	platform VARCHAR (30)NOT NULL default '',
	price DEC(5,2) NOT NULL default 000.00,
	seller_id INT NOT NULL,
	CONSTRAINT userRep_seller_id_fk
	FOREIGN KEY (seller_id)
	REFERENCES userRep (id),
	PRIMARY KEY (post_id)
);

INSERT INTO currentPostings VALUES(0, 'Legend of Zelda A Link To the Past','Nintendo', 'Action/Adventure', 1991, 'Yes', 'Mint', 'Super Nintendo Entertainment System',  59.99, 2);
INSERT INTO currentPostings VALUES(0, 'Super Mario World','Nintendo','Platformer',1992 ,'No', 'Poor', 'Super Nintendo Entertainment System',  19.99, 2);
INSERT INTO currentPostings VALUES(0, 'Megaman X','Capcom','SideScroller',1993 ,'Yes', 'Mint', 'Super Nintendo Entertainment System',  59.99, 1);
