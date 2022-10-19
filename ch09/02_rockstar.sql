# Table Name: rock_star
create table rock_star
(
    id int primary key,
    star varchar(255) not null,
    key_code int not null
);

insert into rock_star values (1, 'Metal Hero', 1);
insert into rock_star values (2, 'Solo', 1);
insert into rock_star values (3, 'Team', 1);

insert into rock_star values (4, 'Sebastian Bach', 2);
insert into rock_star values (5, 'Ozzy Osbourne', 2);
insert into rock_star values (6, 'John Lennon', 2);
insert into rock_star values (7, 'Robert Plant', 2);
insert into rock_star values (12, 'Michael Sweet', 2);

insert into rock_star values (8, 'Skid Row', 3);
insert into rock_star values (9, 'Black Sabbath', 3);
insert into rock_star values (10, 'The Beatles', 3);
insert into rock_star values (11, 'Led Zeppelin', 3);
insert into rock_star values (13, 'Stryper', 3);

# Self Join
select s.star as solo, t.star as team
from rock_star as s
join rock_star as t on t.key_code = s.id
order by s.id;