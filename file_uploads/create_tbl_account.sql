use globaldebtmgm;

drop table if exists tbl_account_payable;
create table tbl_account_payable
(
    id int not null auto_increment primary key,
    Fk_file_id int, index(Fk_file_id),
    
    invoice_number varchar(255),
    invoice_date datetime,
    invoice_amount float,
    description varchar(255),

    created_at datetime NOT NULL,
    updated_at datetime NOT NULL 
);


drop table if exists tbl_account_receivable;
create table tbl_account_receivable
(
    id int not null auto_increment primary key,
    Fk_file_id int, index(Fk_file_id),
    
    invoice_number varchar(255),
    invoice_date datetime,
    invoice_amount float,
    description varchar(255),

    created_at datetime NOT NULL,
    updated_at datetime NOT NULL 
);

