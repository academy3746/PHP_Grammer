# Built-In Function in SQL
create table student
(
    stu_id    int          not null auto_increment primary key,
    front_man varchar(255) not null,
    band      varchar(255) not null,
    sex       varchar(255) null default null,
    genre     varchar(255) null default null,
    age       int          null default null
);

insert into student (front_man, band, sex, genre, age)
values ('Robert Plant', 'Led Zeppelin', 'Male', 'Hard Rock', 1970),
       ('Ian Gillan', 'Deep Purple', 'Male', 'Hard Rock', 1970),
       ('Rob Hereford', 'Judas Priest', 'Male', 'B.H.M', 1980),
       ('Ozzy Osbourne', 'Black Sabbath', 'Male', 'B.H.M', 1980),
       ('Sebastian Bach', 'Skid Row', 'Male', 'Heavy Metal', 1980),
       ('Phil Anselmo', 'Pantera', 'Male', 'Thrash Metal', 1980),
       ('Adam Levine', 'Maroon5', 'Male', 'Modern Rock', 1990),
       ('Kurt Cobain', 'Nirvana', 'Male', 'Alternative', 1990),
       ('Avril lavigne', 'Avril lavigne Band', 'Female', 'Pop', 2000),
       ('Chad Kruger', 'Nickel Back', 'Male', 'Post Grunge', 2000)
;

# SUM([DISTINCT] expr)
select genre, sum(age) as sum
from student
where genre = 'Hard Rock';

# MIN([DISTINCT] expr) / MAX([DISTINCT] expr)
select band, min(age) as min
from student
where sex = 'Male';

select band, max(age) as max
from student
where sex = 'Male'
  and genre = 'Alternative';

# avg([distinct] expr)
select band, round(avg(age)) as avg
from student
where genre = 'Hard Rock';

# count(expr)
select count(*) as cnt from student
where age = 1980;

# group by ~ having
select front_man, band, sex, genre, age from student
group by genre
having avg(age) >= 1980;