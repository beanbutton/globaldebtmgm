use globaldebtmgm;

drop table if exists tbl_client;
create table tbl_client
(
    id int not null auto_increment primary key,
        
    name varchar(255),
    file_number varchar(255), index( file_number),
    
    savings float,
    assigned_to varchar(255),
    
    negotiator varchar(255),
    client_services varchar(255),
    account_managers varchar(255),

    total_debt float,
    original_debt float,
    
    enrollment_date datetime,
    status int,
    
    comments varchar(255),
    
    created_at timestamp, 
  	updated_at timestamp

);