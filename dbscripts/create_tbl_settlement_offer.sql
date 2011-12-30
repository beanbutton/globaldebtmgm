use globaldebtmgm;

drop table if exists tbl_settlement_offer;
create table tbl_settlement_offer
(
    id int not null auto_increment primary key,

    Fk_debtor_id int, index(Fk_debtor_id),
    Fk_creditor_id int, index(Fk_creditor_id),
    Fk_negotiator_id int, index(Fk_negotiator_id),

    file_number varchar(255), index( file_number),
    offer_date datetime,
    offer_amount float,
    offer_amount_percentage float,
    client_saving_amonut float,
    client_savings_percentage float,
    client_reserves float,
    service_fees float,
    difference_amount float,
    offer_status int,
    valid_date datetime,
    comments varchar(255),
   
    created_at timestamp, 
    updated_at timestamp
);

