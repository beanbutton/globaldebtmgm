use globaldebtmgm;

drop table if exists tbl_budget_info;
create table tbl_budget_info
(
     id int not null auto_increment primary key,
     
     monthly_income float,
     
     monthly_auto_expenses float,
     monthly_auto_payments float,
     monthly_utilites float,
     monthly_grocery_expenses float,
     monthly_insurance_payments float,
     rrsp float,
     
     food_stamp_or_other float,
     spouse_monthly_takehome_pay float,
     reason_for_hardship varchar(255),
     estimated_home_value float,
     remaining_mortgage_balance float,
     
     total_number_dependants int,
     household_expenses float,
     total_debt_to_income_perc float,
     total_expenses_to_income_variance float,
     
     mortgage float,
     rent float,
     
     
    created_at timestamp, 
    updated_at timestamp
);