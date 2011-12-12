use globaldebtmgm;

drop table if exists tbl_debtor;
create table tbl_debtor
(
    id int not null auto_increment primary key,
    
    Fk_client_id int,
    index( Fk_client_id ),
    #foreign key(Fk_client_id) references tbl_client(Fk_client_id ),

    Fk_debtor_additional_info_id int,
    index( Fk_debtor_additional_info_id),
    #foreign key(Fk_debtor_additional_info_id) references tbl_debtor_additional_info(Fk_debtor_additional_info_id ),
    
    Fk_creditor_id int,
    index( Fk_creditor_id),
    #foreign key(Fk_creditor_id) references tbl_creditor(Fk_creditor_id ),
    
    Fk_negotiator_id int,
    index( Fk_negotiator_id),
    #foreign key(Fk_negotiator_id) references tbl_negotiator(Fk_negotiator_id ),
    
    
    Fk_budget_info_id int,
    index(Fk_budget_info_id),
    #foreign key(Fk_budget_info_id) references tbl_budget_info(Fk_budget_info_id),
    
    Fk_program_info_id int,
    index(Fk_program_info_id),
    #foreign key(Fk_program_info_id) references tbl_program_info(Fk_program_info_id),
    
    Fk_amortization_id int,
    index(Fk_amortization_id),
    #foreign key(Fk_amortization_id) references tbl_amortization(Fk_amortization_id),
  
    Fk_settlement_offer_id int,
    index(Fk_settlement_offer_id),
    #foreign key(Fk_settlement_offer_id) references tbl_settlement_offer(Fk_settlement_offer_id),
    
    Fk_client_progress_id int,
    index(Fk_client_progress_id),
    #foreign key(Fk_client_progress_id) references tbl_client_progress(Fk_client_progress_id),
    
    file_number varchar(255), index( file_number),
    firstname varchar(255), index( firstname),
    lastname varchar(255), index( lastname),
    address varchar(255), index( address ),
    
	date_of_birth datetime,
    social_insurance_number varchar(255), index( social_insurance_number),
    date_filed_chapter7 datetime,
    date_filed_chapter13 datetime,
        
    home_telephone varchar(255),
    mobile_telephone varchar(255),
    other_telephone varchar(255),
    best_time_to_call varchar(255),
    faxnumber varchar(255),
    email varchar(255),
	
    drivers_licence varchar(255),
    credit_card_number varchar(255), index(credit_card_number),
    	
	employment_status int(11),
    
	employer varchar(255),
    employment_occupation varchar(255),
	employment_work_years int,
    employment_telephone varchar(255),
    
    employment_insurance int,
    employment_disability int,
    pension int,
    	
    correspondence_language int,
    
    comments varchar(255),
    
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
);