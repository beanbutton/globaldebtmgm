use globaldebtmgm;

drop table if exists tbl_user;
create table tbl_user
(
    id int not null auto_increment primary key,
    Fk_role_id int,

    username varchar(255), index( username ), unique( username),
    password varchar(255), index(password),
    salt varchar(255),
    
    remember_me int default 0,
    
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL

);

