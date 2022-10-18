# Table Name: rock_stream
create table rock_stream
(
    id    int          not null auto_increment,
    genre varchar(255) not null,
    era   int          not null,
    primary key (`id`)
);

insert into rock_stream (genre, era)
VALUES ('Hard Rock', 80);
insert into rock_stream (genre, era)
VALUES ('Classic Rock', 70);
insert into rock_stream (genre, era)
VALUES ('Thrash Metal', 80);
insert into rock_stream (genre, era)
VALUES ('LA Metal', 80);
insert into rock_stream (genre, era)
VALUES ('Grunge Rock', 90);
insert into rock_stream (genre, era)
VALUES ('Progressive Rock', 80);
insert into rock_stream (genre, era)
VALUES ('Glam Rock', 80);
insert into rock_stream (genre, era)
VALUES ('Modern Rock', 90);
insert into rock_stream (genre, era)
VALUES ('Post Grunge', 90);
insert into rock_stream (genre, era)
VALUES ('Neo Punk', 90);


# Table Name:
create table rock_band
(
    id       int          not null auto_increment,
    band     varchar(255) not null,
    era      int          not null,
    genre_id int          not null,
    primary key (`id`)
);

insert into rock_band (band, era, genre_id)
VALUES ('Led Zeppelin', 80, 1);
insert into rock_band (band, era, genre_id)
VALUES ('Deep Purple', 80, 1);
insert into rock_band (band, era, genre_id)
VALUES ('Nirvana', 90, 5);
insert into rock_band (band, era, genre_id)
VALUES ('Megadeth', 80, 3);
insert into rock_band (band, era, genre_id)
VALUES ('Guns N Roses', 80, 4);
insert into rock_band (band, era, genre_id)
VALUES ('Green Day', 90, 10);
insert into rock_band (band, era, genre_id)
VALUES ('Sum41', 90, 10);
insert into rock_band (band, era, genre_id)
VALUES ('Pantera', 80, 3);
insert into rock_band (band, era, genre_id)
VALUES ('KISS', 80, 7);
insert into rock_band (band, era, genre_id)
VALUES ('Travis', 90, 8);
insert into rock_band (band, era, genre_id)
VALUES ('Creed', 90, 9);
insert into rock_band (band, era, genre_id)
VALUES ('The Who', 70, 2);
insert into rock_band (band, era, genre_id)
VALUES ('The Pink Floyd', 80, 6);
insert into rock_band (band, era, genre_id)
VALUES ('Maroon5', 90, 8);
insert into rock_band (band, era, genre_id)
VALUES ('King Crimson', 80, 6);


# Inner Join
select rb.band, rs.genre, rb.era from rock_stream rs
    inner join rock_band rb on rs.id = rb.genre_id
order by rb.era;