# hero_table
create table hero_table
(
    id   int primary key,
    band varchar(255) not null,
    cate int          not null
);

insert into hero_table (id, band, cate)
VALUES (1, 'Super Rock Band', 1);
insert into hero_table (id, band, cate)
VALUES (2, 'Solo', 1);
insert into hero_table (id, band, cate)
VALUES (3, 'Group', 1);

insert into hero_table (id, band, cate)
VALUES (4, 'Ozzy Osbourne', 2);
insert into hero_table (id, band, cate)
VALUES (5, 'Sebastian Bach', 2);
insert into hero_table (id, band, cate)
VALUES (6, 'Robert Plant', 2);

insert into hero_table (id, band, cate)
VALUES (7, 'Black Sabbath', 3);
insert into hero_table (id, band, cate)
VALUES (8, 'Skid Row', 3);
insert into hero_table (id, band, cate)
VALUES (9, 'Led Zeppelin', 3);

# Self Join
select s.band as solo, t.band as team
from hero_table as s
         join hero_table as t on s.cate = t.id;