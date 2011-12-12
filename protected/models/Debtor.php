<?php

/**
 * This is the model class for table "tbl_debtor".
 *
 * The followings are the available columns in table 'tbl_debtor':
 * @property integer $id
 * @property integer $Fk_client_id
 * @property integer $Fk_debtor_additional_info_id
 * @property integer $Fk_creditor_id
 * @property integer $Fk_negotiator_id
 * @property integer $Fk_budget_info_id
 * @property integer $Fk_program_info_id
 * @property integer $Fk_amortization_id
 * @property integer $Fk_settlement_offer_id
 * @property integer $Fk_client_progress_id
 * @property string $file_number
 * @property string $firstname
 * @property string $lastname
 * @property string $address
 * @property string $date_of_birth
 * @property string $social_insurance_number
 * @property string $date_filed_chapter7
 * @property string $date_filed_chapter13
 * @property string $home_telephone
 * @property string $mobile_telephone
 * @property string $other_telephone
 * @property string $best_time_to_call
 * @property string $faxnumber
 * @property string $email
 * @property string $drivers_licence
 * @property string $credit_card_number
 * @property integer $employment_status
 * @property string $employer
 * @property string $employment_occupation
 * @property integer $employment_work_years
 * @property string $employment_telephone
 * @property integer $employment_insurance
 * @property integer $employment_disability
 * @property integer $pension
 * @property integer $correspondence_language
 * @property string $comments
 * @property string $created_at
 * @property string $updated_at
 */
class Debtor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Debtor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_debtor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at', 'required'),
			array('Fk_client_id, Fk_debtor_additional_info_id, Fk_creditor_id, Fk_negotiator_id, Fk_budget_info_id, Fk_program_info_id, Fk_amortization_id, Fk_settlement_offer_id, Fk_client_progress_id, employment_status, employment_work_years, employment_insurance, employment_disability, pension, correspondence_language', 'numerical', 'integerOnly'=>true),
			array('file_number, firstname, lastname, address, social_insurance_number, home_telephone, mobile_telephone, other_telephone, best_time_to_call, faxnumber, email, drivers_licence, credit_card_number, employer, employment_occupation, employment_telephone, comments', 'length', 'max'=>255),
			array('date_of_birth, date_filed_chapter7, date_filed_chapter13', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Fk_client_id, Fk_debtor_additional_info_id, Fk_creditor_id, Fk_negotiator_id, Fk_budget_info_id, Fk_program_info_id, Fk_amortization_id, Fk_settlement_offer_id, Fk_client_progress_id, file_number, firstname, lastname, address, date_of_birth, social_insurance_number, date_filed_chapter7, date_filed_chapter13, home_telephone, mobile_telephone, other_telephone, best_time_to_call, faxnumber, email, drivers_licence, credit_card_number, employment_status, employer, employment_occupation, employment_work_years, employment_telephone, employment_insurance, employment_disability, pension, correspondence_language, comments, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Fk_client_id' => 'Fk Client',
			'Fk_debtor_additional_info_id' => 'Fk Debtor Additional Info',
			'Fk_creditor_id' => 'Fk Creditor',
			'Fk_negotiator_id' => 'Fk Negotiator',
			'Fk_budget_info_id' => 'Fk Budget Info',
			'Fk_program_info_id' => 'Fk Program Info',
			'Fk_amortization_id' => 'Fk Amortization',
			'Fk_settlement_offer_id' => 'Fk Settlement Offer',
			'Fk_client_progress_id' => 'Fk Client Progress',
			'file_number' => 'File Number',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'address' => 'Address',
			'date_of_birth' => 'Date Of Birth',
			'social_insurance_number' => 'Social Insurance Number',
			'date_filed_chapter7' => 'Date Filed Chapter7',
			'date_filed_chapter13' => 'Date Filed Chapter13',
			'home_telephone' => 'Home Telephone',
			'mobile_telephone' => 'Mobile Telephone',
			'other_telephone' => 'Other Telephone',
			'best_time_to_call' => 'Best Time To Call',
			'faxnumber' => 'Faxnumber',
			'email' => 'Email',
			'drivers_licence' => 'Drivers Licence',
			'credit_card_number' => 'Credit Card Number',
			'employment_status' => 'Employment Status',
			'employer' => 'Employer',
			'employment_occupation' => 'Employment Occupation',
			'employment_work_years' => 'Employment Work Years',
			'employment_telephone' => 'Employment Telephone',
			'employment_insurance' => 'Employment Insurance',
			'employment_disability' => 'Employment Disability',
			'pension' => 'Pension',
			'correspondence_language' => 'Correspondence Language',
			'comments' => 'Comments',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Fk_client_id',$this->Fk_client_id);
		$criteria->compare('Fk_debtor_additional_info_id',$this->Fk_debtor_additional_info_id);
		$criteria->compare('Fk_creditor_id',$this->Fk_creditor_id);
		$criteria->compare('Fk_negotiator_id',$this->Fk_negotiator_id);
		$criteria->compare('Fk_budget_info_id',$this->Fk_budget_info_id);
		$criteria->compare('Fk_program_info_id',$this->Fk_program_info_id);
		$criteria->compare('Fk_amortization_id',$this->Fk_amortization_id);
		$criteria->compare('Fk_settlement_offer_id',$this->Fk_settlement_offer_id);
		$criteria->compare('Fk_client_progress_id',$this->Fk_client_progress_id);
		$criteria->compare('file_number',$this->file_number,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('social_insurance_number',$this->social_insurance_number,true);
		$criteria->compare('date_filed_chapter7',$this->date_filed_chapter7,true);
		$criteria->compare('date_filed_chapter13',$this->date_filed_chapter13,true);
		$criteria->compare('home_telephone',$this->home_telephone,true);
		$criteria->compare('mobile_telephone',$this->mobile_telephone,true);
		$criteria->compare('other_telephone',$this->other_telephone,true);
		$criteria->compare('best_time_to_call',$this->best_time_to_call,true);
		$criteria->compare('faxnumber',$this->faxnumber,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('drivers_licence',$this->drivers_licence,true);
		$criteria->compare('credit_card_number',$this->credit_card_number,true);
		$criteria->compare('employment_status',$this->employment_status);
		$criteria->compare('employer',$this->employer,true);
		$criteria->compare('employment_occupation',$this->employment_occupation,true);
		$criteria->compare('employment_work_years',$this->employment_work_years);
		$criteria->compare('employment_telephone',$this->employment_telephone,true);
		$criteria->compare('employment_insurance',$this->employment_insurance);
		$criteria->compare('employment_disability',$this->employment_disability);
		$criteria->compare('pension',$this->pension);
		$criteria->compare('correspondence_language',$this->correspondence_language);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}