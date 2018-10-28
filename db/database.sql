CREATE TABLE tourneys
(
	id SERIAL PRIMARY KEY
	, tName VARCHAR(40) UNIQUE NOT NULL
);

CREATE TABLE entries
(
	id SERIAL PRIMARY KEY
	, entry VARCHAR(40) NOT NULL
	, tourney_id INT NOT NULL REFERENCES tourneys(id)
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

INSERT INTO entries (entry, tourney_id) VALUES ('Mountain Dew', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Dr Pepper', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Root Beer', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Sprite', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('7Up', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Cream Soda', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Red Cream Soda', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Coca Cola', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Pepsi', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Diet Coke', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Diet Pepsi', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Diet Dr Pepper', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Diet Mountain Dew', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Mellow Yellow', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Cherry Pepsi', 1);
INSERT INTO entries (entry, tourney_id) VALUES ('Mountai Dew Code Red', 1);

INSERT INTO entries (entry, tourney_id) VALUES ('Snickers', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Skittles', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Reeses Cup', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Lemonheads', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Herhsey Bar', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Sour Gummi Worms', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Mike N Ike', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Jelly Beans', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Left Twix', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Right Twix', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Sour Skittles', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Mars Bar', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Mounds', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Almond Joy', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Sprees', 2);
INSERT INTO entries (entry, tourney_id) VALUES ('Sweetarts', 2);

INSERT INTO entries (entry, tourney_id) VALUES ('The Lion King', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Peter Pan', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Moana', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Journey to Atlantis', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Hercules', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Tarzan', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Cinderella', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Toy Story', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Tangled', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('A Bugs Life', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Mulan', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('The Nightmare Before Christmas', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Cars', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Sleeping Beauty', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Snow White', 3);
INSERT INTO entries (entry, tourney_id) VALUES ('Aladdin', 3);






