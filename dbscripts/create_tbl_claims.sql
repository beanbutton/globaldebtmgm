
create table tbl_claims
(
    id int not null auto_increment primary key,

    Fk_clientid int,
    index( Fk_clientid ),
    foreign key( Fk_clientid) references tbl_client(Fk_clientid),
    
    Fk_creditor_id int,
    index(Fk_creditor_id),
    foreign key(Fk_creditor_id) references tbl_creditor(Fk_creditor_id ),
   
    file_number varchar(255), index( file_number),
    type_of_debt varchar(255),
    amount_of_claim float,
    days_behind int,
    
    settlement_date datetime,
    settlement_amount float,
    savings float,
    
    created_at timestamp, 
  	updated_at timestamp 

);


