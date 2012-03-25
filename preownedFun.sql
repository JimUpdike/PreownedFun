DROP DATABASE IF EXISTS preowneddb;
CREATE DATABASE IF NOT EXISTS preowneddb;
GRANT ALL PRIVILEGES ON preowneddb.* TO 'Preowneduser'@'localhost' identified by 'user';
USE preowneddb;
CREATE TABLE users (
	user_id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(20),
	password VARCHAR (20),
	rating dec (3,2) NOT NULL default -1,
	PRIMARY KEY (user_id)
	);

CREATE TABLE billing_address(
	user_id INT NOT NULL,
	address_id INT NOT NULL,
	PRIMARY KEY (user_id, address_id)
);
CREATE TABLE shipping_address(
	user_id INT NOT NULL,
	address_id INT NOT NULL,
	PRIMARY KEY (user_id, address_id)
);
CREATE TABLE addresses(
	address_id INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (address_id),
	street VARCHAR (50) NOT NULL,
	zip INT NOT NULL 
);
CREATE  TABLE zip_codes(
	zip_code INT NOT NULL,
	PRIMARY KEY (zip_code),
	city VARCHAR(50),
	state VARCHAR(50)
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
CREATE TABLE merch (
	merch_id INT  NOT NULL AUTO_INCREMENT,
	game_id INT  NOT NULL,
	price DEC(5,2) NOT NULL default 000.00,
	manual VARCHAR (3)NOT NULL default '',
	cond VARCHAR (15)NOT NULL default '',
	PRIMARY KEY (merch_id)
);

CREATE TABLE seller_transaction_info(
	seller_trans_id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (seller_trans_id),
	seller_id INT NOT NULL,
	ship_from_address INT NOT NULL
);
CREATE TABLE buyer_transaction_info(
	buyer_trans_id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (buyer_trans_id),
	buyer_id INT NOT NULL,
	ship_from_address INT NOT NULL
);
CREATE TABLE completed_transaction(
	trans_id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (trans_id),
	merch_id INT NOT NULL,
	game_id INT NOT NULL,
	seller_trans_id INT NOT NULL,
	buyer_trans_id INT NOT NULL,
	rating INT NOT NULL default -1
);
