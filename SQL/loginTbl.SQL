Create database DBTerminTea

create table users (
    userId int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    usersName varchar(255) NOT NULL,
    usersEmail varchar(255) NOT NULL,
    userUid varchar(255) NOT NULL,
    usersPwd varchar(255) NOT NULL
)