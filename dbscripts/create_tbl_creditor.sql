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
    
    status int,
    current_settlement_offer float,
    current_settlement_perc float,
    
    offer_date datetime,
    offer_valid_until_date datetime,
    
    created_at timestamp, 
  	updated_at timestamp 
);