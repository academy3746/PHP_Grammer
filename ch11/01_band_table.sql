# rock_band
CREATE TABLE `rock_band`
(
    `id`      INT(11)      NOT NULL AUTO_INCREMENT,
    `artist`  VARCHAR(255) NOT NULL,
    `hit_age` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO rock_band (id, artist, hit_age)
VALUES (1, 'Led Zeppelin', '1970s');
INSERT INTO rock_band (id, artist, hit_age)
VALUES (2, 'Deep Purple', '1980s');
INSERT INTO rock_band (id, artist, hit_age)
VALUES (3, 'Nirvana', '1990s');
INSERT INTO rock_band (id, artist, hit_age)
VALUES (4, 'Pearl Jam', '1990s');
INSERT INTO rock_band (id, artist, hit_age)
VALUES (5, 'Guns N Roses', '1980s');
INSERT INTO rock_band (id, artist, hit_age)
VALUES (6, 'Oasis', '1990s');
INSERT INTO rock_band (id, artist, hit_age)
VALUES (7, 'Motor Head', '1980s');
INSERT INTO rock_band (id, artist, hit_age)
VALUES (8, 'Iron Maiden', '1980s');
INSERT INTO rock_band (id, artist, hit_age)
VALUES (9, 'R.A.T.M', '1990s');
INSERT INTO rock_band (id, artist, hit_age)
VALUES (10, 'X-JAPAN', '1990s');

# remain_songs
CREATE TABLE `remain_songs`
(
    `id`          INT(11)      NOT NULL AUTO_INCREMENT,
    `artist`      VARCHAR(255) NOT NULL,
    `song`        VARCHAR(255) NOT NULL,
    `release_age` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (1, 'Led Zeppelin', 'Stairway to heaven', '70');
INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (2, 'Deep Purple', 'Smoke on the water', '80');
INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (3, 'Nirvana', 'Smells like teens spirit', '90');
INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (4, 'Pearl Jam', 'sucks', '90');
INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (5, 'Guns N Roses', 'Welcome to the jungle', '80');
INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (6, 'Oasis', 'Wonder wall', '90');
INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (7, 'Motor Head', 'Ace of spades', '80');
INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (8, 'Iron Maiden', 'The trooper', '80');
INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (9, 'R.A.T.M', 'They sucks', '90');
INSERT INTO remain_songs (id, artist, song, release_age)
VALUES (10, 'X-JAPAN', 'Endless rain', '90');

# Inner Join
SELECT *
FROM rock_band rb
         INNER JOIN remain_songs rs on rb.artist = rs.artist
order by rs.release_age;
