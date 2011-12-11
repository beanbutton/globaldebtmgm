use globaldebtmgm;

drop table if exists tbl_creditor;
create table tbl_creditor
(
    id int not null auto_increment primary key,

    name varchar(255),
    address varchar(255),
    telephone varchar(255),
    email varchar(255),
    faxnumber varchar(255),
     
    created_at timestamp, 
    updated_at timestamp 
);