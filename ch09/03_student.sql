# Built-In Function in SQL
create table student
(
    stu_id int not null auto_increment primary key,
    stu_name varchar(255) not null,
    department varchar(255) not null,
    sex varchar(255) null default null,
    stu_subject varchar(255) null default null,
    grade int null default null
);