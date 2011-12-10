use globaldebtmgm;

drop table if exists tbl_user;
create table tbl_user
(
    id int not null auto_increment primary key,
    
    username varchar(255),
    index( username ), unique( username),
    
    password varchar(255),
    index(password),

    salt varchar(255),
    
    email varchar(255),
    index(email),
    
    remember_me int default 0,
    last_login timestamp,
    
    created_at timestamp, 
    updated_at timestamp    

);