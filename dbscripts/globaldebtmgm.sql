-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2012 at 09:55 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `globaldebtmgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_payable`
--
CREATE DATABASE IF NOT EXISTS globaldebtmgm;
USE globaldebtmgm;


CREATE TABLE IF NOT EXISTS `tbl_account_payable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) DEFAULT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `invoice_amount` float DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_file_id` (`Fk_user_id`)
);

--
-- RELATIONS FOR TABLE `tbl_account_payable`:
--   `Fk_user_id`
--       `tbl_user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_receivable`
--

CREATE TABLE IF NOT EXISTS `tbl_account_receivable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) DEFAULT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `invoice_amount` float DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_file_id` (`Fk_user_id`)
);

--
-- RELATIONS FOR TABLE `tbl_account_receivable`:
--   `Fk_user_id`
--       `tbl_user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amortization`
--

CREATE TABLE IF NOT EXISTS `tbl_amortization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `payment_start_date` datetime DEFAULT NULL,
  `payment_end_date` datetime DEFAULT NULL,
  `total_monthly_cost` float DEFAULT NULL,
  `adminstration_fee` float DEFAULT NULL,
  `maintenance_fee` float DEFAULT NULL,
  `settlement_savings_fund` float DEFAULT NULL,
  `total_monthly_cost_total` float DEFAULT NULL,
  `total_adminstration_fee` float DEFAULT NULL,
  `total_maintenance_fee` float DEFAULT NULL,
  `total_settlement_savings_fund` float DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`)
) ; ;

--
-- RELATIONS FOR TABLE `tbl_amortization`:
--   `Fk_debtor_id`
--       `tbl_debtor` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `file_number` varchar(255) DEFAULT NULL,
  `savings` float DEFAULT NULL,
  `assigned_to` varchar(255) DEFAULT NULL,
  `negotiator` varchar(255) DEFAULT NULL,
  `client_services` varchar(255) DEFAULT NULL,
  `account_managers` varchar(255) DEFAULT NULL,
  `total_debt` float DEFAULT NULL,
  `original_debt` float DEFAULT NULL,
  `enrollment_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `file_number` (`file_number`)
);

--
-- RELATIONS FOR TABLE `tbl_client`:
--   `Fk_user_id`
--       `tbl_user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_creditor`
--

CREATE TABLE IF NOT EXISTS `tbl_creditor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) NOT NULL,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `badge_number` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone1` varchar(255) DEFAULT NULL,
  `telephone1_ext` varchar(6) DEFAULT NULL,
  `telephone2` varchar(255) DEFAULT NULL,
  `telephone2_ext` varchar(6) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `faxnumber` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`)
);

--
-- RELATIONS FOR TABLE `tbl_creditor`:
--   `Fk_debtor_id`
--       `tbl_debtor` -> `id`
--   `Fk_user_id`
--       `tbl_user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) DEFAULT NULL,
  `file_number` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `drivers_licence` varchar(255) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `social_insurance_number` varchar(255) DEFAULT NULL,
  `date_filed_chapter7` datetime DEFAULT NULL,
  `date_filed_chapter13` datetime DEFAULT NULL,
  `home_telephone` varchar(255) DEFAULT NULL,
  `mobile_telephone` varchar(255) DEFAULT NULL,
  `other_telephone` varchar(255) DEFAULT NULL,
  `best_time_to_call` varchar(255) DEFAULT NULL,
  `faxnumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `employment_status` int(11) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `employment_occupation` varchar(255) DEFAULT NULL,
  `employment_work_years` int(11) DEFAULT NULL,
  `employment_telephone` varchar(255) DEFAULT NULL,
  `employment_insurance` int(11) DEFAULT NULL,
  `employment_disability` int(11) DEFAULT NULL,
  `employee_pension` int(11) DEFAULT NULL,
  `correspondence_language` int(11) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `spouse_firstname` varchar(255) DEFAULT NULL,
  `spouse_lastname` varchar(255) DEFAULT NULL,
  `spouse_address` varchar(255) DEFAULT NULL,
  `spouse_marital_status` int(11) DEFAULT NULL,
  `spouse_monthly_income` float DEFAULT NULL,
  `spouse_gross_monthly_income` float DEFAULT NULL,
  `spouse_employment_status` int(11) DEFAULT NULL,
  `spouse_employer` varchar(255) DEFAULT NULL,
  `spouse_employment_occupation` varchar(255) DEFAULT NULL,
  `spouse_employment_work_years` int(11) DEFAULT NULL,
  `spouse_number_of_children` int(11) DEFAULT NULL,
  `spouse_drivers_licence` varchar(255) DEFAULT NULL,
  `spouse_active_duty` int(11) DEFAULT NULL,
  `spouse_comments` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_user_id` (`Fk_user_id`),
  KEY `file_number` (`file_number`),
  KEY `firstname` (`firstname`),
  KEY `lastname` (`lastname`),
  KEY `address` (`address`),
  KEY `social_insurance_number` (`social_insurance_number`)
) ; 

--
-- RELATIONS FOR TABLE `tbl_debtor`:
--   `Fk_user_id`
--       `tbl_user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor_budget_info`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor_budget_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monthly_income` float DEFAULT NULL,
  `monthly_auto_expenses` float DEFAULT NULL,
  `car_payment1` float DEFAULT NULL,
  `car_payment2` float DEFAULT NULL,
  `recreational_vehicle` float DEFAULT NULL,
  `monthly_auto_payments` float DEFAULT NULL,
  `monthly_utilites` float DEFAULT NULL,
  `monthly_grocery_expenses` float DEFAULT NULL,
  `monthly_insurance_payments` float DEFAULT NULL,
  `rrsp` float DEFAULT NULL,
  `gas_and_electricuty` float DEFAULT NULL,
  `telephone` float DEFAULT NULL,
  `water_trash_sewer` float DEFAULT NULL,
  `cable_and_internet_services` float DEFAULT NULL,
  `food_stamp_or_other` float DEFAULT NULL,
  `spouse_monthly_takehome_pay` float DEFAULT NULL,
  `reason_for_hardship` varchar(255) DEFAULT NULL,
  `estimated_home_value` float DEFAULT NULL,
  `remaining_mortgage_balance` float DEFAULT NULL,
  `total_number_dependants` int(11) DEFAULT NULL,
  `household_expenses` float DEFAULT NULL,
  `total_debt_to_income_perc` float DEFAULT NULL,
  `total_expenses_to_income_variance` float DEFAULT NULL,
  `mortgage` float DEFAULT NULL,
  `rent` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Fk_debtor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ; 

--
-- RELATIONS FOR TABLE `tbl_debtor_budget_info`:
--   `Fk_debtor_id`
--       `tbl_debtor` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor_financial_info`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor_financial_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `name_financial_institution` varchar(255) DEFAULT NULL,
  `branch_address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `institution_numer` varchar(255) DEFAULT NULL,
  `branch_number` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
);

--
-- RELATIONS FOR TABLE `tbl_debtor_financial_info`:
--   `Fk_debtor_id`
--       `tbl_debtor` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor_program_info`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor_program_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `program_type` int(11) DEFAULT NULL,
  `monthly_payment` float DEFAULT NULL,
  `type_of_debt` varchar(255) DEFAULT NULL,
  `total_debt` float DEFAULT NULL,
  `original_debt` float DEFAULT NULL,
  `monthly_income` float DEFAULT NULL,
  `saf_monthly_payment` float DEFAULT NULL,
  `nsf_amount` float DEFAULT NULL,
  `monthly_payment_due_date` datetime DEFAULT NULL,
  `enrollment_date` datetime DEFAULT NULL,
  `first_monthly_payment_date` datetime DEFAULT NULL,
  `next_payment_due_date` datetime DEFAULT NULL,
  `contract_due_date` datetime DEFAULT NULL,
  `maintenance_fee_manual` float DEFAULT NULL,
  `maintenance_fee_automatic` float DEFAULT NULL,
  `admin_fee_automatic` float DEFAULT NULL,
  `admin_fee_percentage_automatic` float DEFAULT NULL,
  `admin_fee_manual` float DEFAULT NULL,
  `admin_fee_percentage_manual` float DEFAULT NULL,
  `service_fee_automatic` float DEFAULT NULL,
  `service_fee_percentage_automatic` float DEFAULT NULL,
  `service_fee_manual` float DEFAULT NULL,
  `service_fee_percentage_manual` float DEFAULT NULL,
  `savings_amount` float DEFAULT NULL,
  `savings_percentage` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`)
);

--
-- RELATIONS FOR TABLE `tbl_debtor_program_info`:
--   `Fk_debtor_id`
--       `tbl_debtor` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debtor_progress`
--

CREATE TABLE IF NOT EXISTS `tbl_debtor_progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `current_settlement_offer` float DEFAULT NULL,
  `current_settlement_perc` float DEFAULT NULL,
  `offer_date` datetime DEFAULT NULL,
  `offer_valid_until_date` datetime DEFAULT NULL,
  `type_of_debt` varchar(255) DEFAULT NULL,
  `total_debt` float DEFAULT NULL,
  `days_behind` int(11) DEFAULT NULL,
  `settlement_date` datetime DEFAULT NULL,
  `settlement_amount` float DEFAULT NULL,
  `savings` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`)
) ;

--
-- RELATIONS FOR TABLE `tbl_debtor_progress`:
--   `Fk_debtor_id`
--       `tbl_debtor` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `emergency_contact` varchar(255) DEFAULT NULL,
  `emergency_phone_number` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_user_id` (`Fk_user_id`),
  KEY `firstname` (`firstname`),
  KEY `lastname` (`lastname`)
) ;

--
-- RELATIONS FOR TABLE `tbl_employee`:
--   `Fk_user_id`
--       `tbl_user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_upload_item`
--

CREATE TABLE IF NOT EXISTS `tbl_file_upload_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_user_id` int(11) NOT NULL,
  `description` text,
  `filename` varchar(128) DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
);

--
-- RELATIONS FOR TABLE `tbl_file_upload_item`:
--   `Fk_user_id`
--       `tbl_user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_negotiator`
--

CREATE TABLE IF NOT EXISTS `tbl_negotiator` (
  `Fk_user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `faxnumber` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`)
);

--
-- RELATIONS FOR TABLE `tbl_negotiator`:
--   `Fk_debtor_id`
--       `tbl_debtor` -> `id`
--   `Fk_user_id`
--       `tbl_user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settlement_offer`
--

CREATE TABLE IF NOT EXISTS `tbl_settlement_offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fk_debtor_id` int(11) DEFAULT NULL,
  `file_number` varchar(255) DEFAULT NULL,
  `offer_date` datetime DEFAULT NULL,
  `offer_amount` float DEFAULT NULL,
  `offer_amount_percentage` float DEFAULT NULL,
  `client_saving_amonut` float DEFAULT NULL,
  `client_savings_percentage` float DEFAULT NULL,
  `client_reserves` float DEFAULT NULL,
  `service_fees` float DEFAULT NULL,
  `difference_amount` float DEFAULT NULL,
  `offer_status` int(11) DEFAULT NULL,
  `valid_date` datetime DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `Fk_debtor_id` (`Fk_debtor_id`),
  KEY `file_number` (`file_number`)
) ; 

--
-- RELATIONS FOR TABLE `tbl_settlement_offer`:
--   `Fk_debtor_id`
--       `tbl_debtor` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `remember_me` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_2` (`username`),
  KEY `username` (`username`),
  KEY `password` (`password`)
);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- FOREGN KEYS
-- Employee
ALTER TABLE tbl_employee ADD CONSTRAINT Fk_employee_userid FOREIGN KEY(Fk_user_id) REFERENCES tbl_user(id) ON DELETE CASCADE ON UPDATE RESTRICT;

-- Client
ALTER TABLE tbl_client ADD CONSTRAINT Fk_client_userid FOREIGN KEY(Fk_user_id) REFERENCES tbl_user(id) ON DELETE CASCADE ON UPDATE RESTRICT;

-- Debtor
ALTER TABLE tbl_debtor ADD CONSTRAINT Fk_debtor_userid FOREIGN KEY(Fk_user_id) REFERENCES tbl_user(id) ON DELETE CASCADE ON UPDATE RESTRICT;

-- Creditor
ALTER TABLE tbl_creditor ADD CONSTRAINT Fk_creditor_userid FOREIGN KEY(Fk_user_id) REFERENCES tbl_user(id) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE tbl_creditor ADD CONSTRAINT Fk_creditor_debtorid FOREIGN KEY(Fk_debtor_id) REFERENCES tbl_debtor(id) ON DELETE CASCADE ON UPDATE RESTRICT;

-- Negotiator
ALTER TABLE tbl_negotiator ADD CONSTRAINT Fk_negotiator_userid FOREIGN KEY(Fk_user_id) REFERENCES tbl_user(id) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE tbl_negotiator ADD CONSTRAINT Fk_negotiator_debtorid FOREIGN KEY(Fk_debtor_id) REFERENCES tbl_debtor(id) ON DELETE CASCADE ON UPDATE RESTRICT;


--financial_info 
ALTER TABLE tbl_debtor_financial_info ADD CONSTRAINT Fk_financialinfo_debtorid FOREIGN KEY(Fk_debtor_id) REFERENCES tbl_debtor(id) ON DELETE CASCADE ON UPDATE RESTRICT;

-- program_info
ALTER TABLE tbl_debtor_program_info ADD CONSTRAINT Fk_programinfo_debtorid FOREIGN KEY(Fk_debtor_id) REFERENCES tbl_debtor(id) ON DELETE CASCADE ON UPDATE RESTRICT;
 

-- progress_
ALTER TABLE tbl_debtor_progress ADD CONSTRAINT Fk_progress_debtorid FOREIGN KEY(Fk_debtor_id) REFERENCES tbl_debtor(id) ON DELETE CASCADE ON UPDATE RESTRICT;


-- budget_info
ALTER TABLE tbl_debtor_budget_info ADD CONSTRAINT Fk_budgetinfo_debtorid FOREIGN KEY(Fk_debtor_id) REFERENCES tbl_debtor(id) ON DELETE CASCADE ON UPDATE RESTRICT;

-- amortization
ALTER TABLE tbl_amortization ADD CONSTRAINT Fk_amortization_debtorid FOREIGN KEY(Fk_debtor_id) REFERENCES tbl_debtor(id) ON DELETE CASCADE ON UPDATE RESTRICT;


-- settlement_offer
ALTER TABLE tbl_settlement_offer ADD CONSTRAINT Fk_settlementoffer_debtorid FOREIGN KEY(Fk_debtor_id) REFERENCES tbl_debtor(id) ON DELETE CASCADE ON UPDATE RESTRICT;

-- file_upload_item
ALTER TABLE tbl_file_upload_item ADD CONSTRAINT Fk_fileuploaditem_userid FOREIGN KEY(Fk_user_id) REFERENCES tbl_user(id) ON DELETE CASCADE ON UPDATE RESTRICT;

-- account_receivable
ALTER TABLE tbl_account_receivable ADD CONSTRAINT Fk_accountreceivable_userid FOREIGN KEY(Fk_user_id) REFERENCES tbl_user(id) ON DELETE CASCADE ON UPDATE RESTRICT;

-- account_payable
ALTER TABLE tbl_account_payable ADD CONSTRAINT Fk_accountpayable_userid FOREIGN KEY(Fk_user_id) REFERENCES tbl_user(id) ON DELETE CASCADE ON UPDATE RESTRICT;

