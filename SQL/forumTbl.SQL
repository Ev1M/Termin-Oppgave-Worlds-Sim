Create database DBTerminTea

create table forum (
    f_id int(11) AUTO_INCREMENT PRIMARY KEY ,
    f_title varchar(255),
    f_text text,
    f_authour varchar(255),
    f_date date
)
