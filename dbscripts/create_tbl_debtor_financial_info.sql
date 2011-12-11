use globaldebtmgm;

drop table if exists tbl_debtor_financial_info;
create table tbl_debtor_financial_info
(
     id int not null auto_increment primary key,
     Fk_debtor_id int,

     name_financial_institution varchar(255),
     branch_address varchar(255),
     city varchar(255),
     province varchar(255),
     phone_number  varchar(255),
     institution_numer varchar(255),
     branch_number varchar(255),
     account_number varchar(255),
     
    created_at timestamp, 
    updated_at timestamp    

);