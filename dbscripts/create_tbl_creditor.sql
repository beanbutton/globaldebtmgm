use globaldebtmgm;

drop table if exists tbl_creditor;
create table tbl_creditor
(
    id int not null auto_increment primary key,
    Fk_debtor_id int, index(Fk_debtor_id),

    badge_number varchar(255),

    name varchar(255),
    address varchar(255),
    telephone1 varchar(255),
    telephone1_ext varchar(6),

    telephone2 varchar(255),
    telephone2_ext varchar(6),

    email varchar(255),
    faxnumber varchar(255),
    comments varchar(255),
     
    created_at timestamp, 
    updated_at timestamp 
);
