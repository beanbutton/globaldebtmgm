use globaldebtmgm;

drop table if exists tbl_debtor_additional_info;
create table tbl_debtor_additional_info
(
    id int not null auto_increment primary key,
    
    spouse_firstname varchar(255),    
    spouse_lastname varchar(255),
    spouse_address varchar(255),
    
    spouse_monthly_income float,
    spouse_gross_monthly_income float,
    
    spouse_employer varchar(255),
    spouse_employment_occupation varchar(255),
    spouse_employment_work_years int,
    
    spouse_number_of_children int,
    spouse_drivers_licence varchar(255),
    
    spouse_active_duty int,
    comments varchar(255),
    
    created_at timestamp, 
  	updated_at timestamp
);