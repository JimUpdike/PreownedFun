DROP DATABASE IF EXISTS preowneddb;
CREATE DATABASE IF NOT EXISTS preowneddb;
GRANT ALL PRIVILEGES ON preowneddb.* TO 'Preowneduser'@'localhost' identified by 'user';
USE preowneddb;
CREATE TABLE users (
	user_id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR (50) NOT NULL,
	password VARCHAR (50) NOT NULL,
	rating dec (3,2) NOT NULL default -1,
	email VARCHAR (50) NOT NULL,
	PRIMARY KEY (user_id)
	);

CREATE TABLE for_sale(
	merch_id INT NOT NULL,
	seller_id INT NOT NULL,
	PRIMARY KEY (merch_id, seller_id)
);

CREATE TABLE game_info (
	game_id INT  NOT NULL AUTO_INCREMENT,
     	title VARCHAR (50) NOT NULL default '',
	creators VARCHAR (50) NOT NULL default '',
	genre VARCHAR (30) NOT NULL default '',
	ESRB VARCHAR (12) NOT NULL default 'NOT RATED',
	yearMade INT(4) NOT NULL default 1,
	platform VARCHAR (40) NOT NULL default '',
	PRIMARY KEY (game_id)
);
create index platform_index on game_info (platform);
create index genre_index on game_info (genre);
CREATE TABLE merch (
	merch_id INT  NOT NULL AUTO_INCREMENT,
	game_id INT  NOT NULL,
	price DEC(5,2) NOT NULL default 000.00,
	manual CHAR NOT NULL default 'N',
	cond VARCHAR (15)NOT NULL default '',
	PRIMARY KEY (merch_id)
);
create index  price_index on merch (price);
create index condition_index on merch (cond);
