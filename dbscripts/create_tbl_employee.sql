use globaldebtmgm;

drop table if exists tbl_employee;
create table tbl_employee
(
    id int not null auto_increment primary key,
    Fk_user_id int, index(Fk_user_id),

    firstname varchar(255), index( firstname ),
    lastname varchar(255), index( lastname),
    phone_number varchar(255), 
    address varchar(255),
    city varchar(255),
    postal_code varchar(255),
    email varchar(255),
    emergency_contact varchar(255),
    emergency_phone_number varchar(255),

    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
);