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

CREATE TABLE currentPostings (
	post_id INT  NOT NULL AUTO_INCREMENT,
	gameName VARCHAR (75) NOT NULL default '',
	genre VARCHAR (30) NOT NULL default '',
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

INSERT INTO currentPostings VALUES(0, 'Legend of Zelda A Link To the Past', 'Action/Adventure', 'Yes', 'mint', 'Super Nintendo Entertainment System',  59.99, 2);
INSERT INTO currentPostings VALUES(0, 'Megaman X', 'SideScroller', 'Yes', 'mint', 'Super Nintendo Entertainment System',  59.99, 1);
