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
INSERT INTO tourneys (tName) VALUES ('Candy');
INSERT INTO tourneys (tName) VALUES ('DisneyMovies');

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

INSERT INTO entries (entry, tName) VALUES ('Snickers', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Skittles', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Reeses Cup', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Lemonheads', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Herhsey Bar', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Sour Gummi Worms', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Mike N Ike', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Jelly Beans', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Left Twix', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Right Twix', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Sour Skittles', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Mars Bar', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Mounds', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Almond Joy', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Sprees', 'Candy');
INSERT INTO entries (entry, tName) VALUES ('Sweetarts', 'Candy');

INSERT INTO entries (entry, tName) VALUES ('The Lion King', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Peter Pan', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Moana', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Journey to Atlantis', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Hercules', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Tarzan', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Cinderella', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Toy Story', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Tangled', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('A Bugs Life', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Mulan', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('The Nightmare Before Christmas', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Cars', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Sleeping Beauty', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Snow White', 'DisneyMovies');
INSERT INTO entries (entry, tName) VALUES ('Aladdin', 'DisneyMovies');






