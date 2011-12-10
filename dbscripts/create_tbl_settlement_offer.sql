use globaldebtmgm;

drop table if exists tbl_settlement_offer;
create table tbl_settlement_offer
(
    id int not null auto_increment primary key,
    
    debtor_id int,
    creditor_id int,
    negotiator_id int,

    created_at timestamp, 
  	updated_at timestamp
);

