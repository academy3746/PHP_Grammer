# Table Name: rock_stream
create table rock_stream
(
    id    int          not null auto_increment,
    genre varchar(255) not null,
    era   int          not null,
    primary key (`id`)
);

insert into rock_stream (id, genre, era) VALUES (1, 'Hard Rock', 70);
insert into rock_stream (id, genre, era) VALUES (2, 'Classic Rock', 80);
insert into rock_stream (id, genre, era) VALUES (3, 'Heavy Metal', 80);
insert into rock_stream (id, genre, era) VALUES (4, 'Thrash Metal', 80);
insert into rock_stream (id, genre, era) VALUES (5, 'LA Metal', 80);
insert into rock_stream (id, genre, era) VALUES (6, 'Glam Rock', 80);
insert into rock_stream (id, genre, era) VALUES (7, 'Progressive Rock', 80);
insert into rock_stream (id, genre, era) VALUES (8, 'Grunge Rock', 90);
insert into rock_stream (id, genre, era) VALUES (9, 'Modern Rock', 90);
insert into rock_stream (id, genre, era) VALUES (10, 'Neo Punk', 90);


# Table Name: rock_band
create table rock_band
(
    id int not null auto_increment,
    band varchar(255) not null,
    era int not null,
    genre_code int not null,
    primary key (`id`)
);

insert into rock_band (band, era, genre_code) VALUES ('Led Zeppelin', 70, 1);
insert into rock_band (band, era, genre_code) VALUES ('Deep Purple', 70, 1);
insert into rock_band (band, era, genre_code) VALUES ('The Who', 80, 2);
insert into rock_band (band, era, genre_code) VALUES ('White Snake', 80, 3);
insert into rock_band (band, era, genre_code) VALUES ('Pantera', 80, 4);
insert into rock_band (band, era, genre_code) VALUES ('Megadeth', 80, 4);
insert into rock_band (band, era, genre_code) VALUES ('Guns N Roses', 80, 5);
insert into rock_band (band, era, genre_code) VALUES ('KISS', 80, 6);
insert into rock_band (band, era, genre_code) VALUES ('The Pink Floyd', 80, 7);
insert into rock_band (band, era, genre_code) VALUES ('King Crimson', 80, 7);
insert into rock_band (band, era, genre_code) VALUES ('Nirvana', 90, 8);
insert into rock_band (band, era, genre_code) VALUES ('Pearl Jam', 90, 8);
insert into rock_band (band, era, genre_code) VALUES ('Maroon5', 90, 9);
insert into rock_band (band, era, genre_code) VALUES ('Linkin Park', 90, 9);
insert into rock_band (band, era, genre_code) VALUES ('Motor Head', 80, 3);


# Inner Join
select rb.band, rs.genre, rs.era from rock_stream as rs
join rock_band as rb on rs.id = rb.genre_code
order by rs.era;