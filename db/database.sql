CREATE TABLE users 
(
	id SERIAL PRIMARY KEY
	, username VARCHAR(50) UNIQUE NOT NULL
	, password VARCHAR(50) NOT NULL
);

CREATE TABLE tourneys
(
	id SERIAL PRIMARY KEY
	, tName VARCHAR(40) UNIQUE NOT NULL
);

CREATE TABLE entries
(
	id SERIAL PRIMARY KEY
	, entry VARCHAR(40) NOT NULL
	, tName VARCHAR(40) NOT NULL REFERENCES tourneys(tName)
);

CREATE TABLE statistics
(
	id SERIAL PRIMARY KEY
	, entry_id INT NOT NULL REFERENCES entries(id)
	, totalScore INT NOT NULL
);

INSERT INTO tourneys (tName) VALUES ('Soda');

INSERT INTO entries (entry, tName) VALUES ('Mountain Dew', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Dr Pepper', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Root Beer', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Sprite', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('7Up', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Cream Soda', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Red Cream Soda', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Coca Cola', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Pepsi', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Diet Coke', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Diet Pepsi', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Diet Dr Pepper', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Diet Mountain Dew', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Mellow Yellow', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Cherry Pepsi', 'Soda');
INSERT INTO entries (entry, tName) VALUES ('Mountai Dew Code Red', 'Soda');


