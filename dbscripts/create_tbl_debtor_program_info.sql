use globaldebtmgm;

drop table if exists tbl_debtor_program_info;
create table tbl_debtor_program_info
(
     id int not null auto_increment primary key,
     
     
     monthly_payment float,
     total_debt float,
     original_debt float,
     monthly_income float,
     saf_monthly_payment float,
     nsf_amount float,
     
     monthly_payment_due_date datetime,
     enrollment_date datetime,
     first_monthly_payment_date datetime,
     next_payment_due_date datetime,
     contract_due_date datetime,
     
     maintenance_fee_manual float,
     maintenance_fee_automatic float,
     
     admin_fee_automatic float,
     admin_fee_perc_automatic float,
     admin_fee_manual float,
     admin_fee_perc_manual float,
     
     service_fee_automatic float,
     service_fee_perc_automatic float,
     service_fee_manual float,
     service_fee_perc_manual float,
     

    created_at timestamp, 
  	updated_at timestamp
);
