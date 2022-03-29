drop table if exists info;
create table info(
    id      integer primary key auto_increment,
    nom    varchar(100),
    prenom varchar(100),
  
)engine="innodb";