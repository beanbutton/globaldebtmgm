use globaldebtmgm;

drop table if exists tbl_client_progress;
create table tbl_client_progress
(
    id int not null auto_increment primary key,
    
    client_id int,
    debtor_id int,
    creditor_id int,
    negotiator_id int,

    created_at timestamp, 
  	updated_at timestamp
);