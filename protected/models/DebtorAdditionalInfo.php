<?php

/**
 * This is the model class for table "tbl_debtor_additional_info".
 *
 * The followings are the available columns in table 'tbl_debtor_additional_info':
 * @property integer $id
 * @property string $spouse_firstname
 * @property string $spouse_lastname
 * @property string $spouse_address
 * @property double $spouse_monthly_income
 * @property double $spouse_gross_monthly_income
 * @property string $spouse_employer
 * @property string $spouse_employment_occupation
 * @property integer $spouse_employment_work_years
 * @property integer $spouse_number_of_children
 * @property string $spouse_drivers_licence
 * @property integer $spouse_active_duty
 * @property string $comments
 * @property string $created_at
 * @property string $updated_at
 */
class DebtorAdditionalInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return DebtorAdditionalInfo the static model class
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
		return 'tbl_debtor_additional_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at', 'required'),
			array('spouse_employment_work_years, spouse_number_of_children, spouse_active_duty', 'numerical', 'integerOnly'=>true),
			array('spouse_monthly_income, spouse_gross_monthly_income', 'numerical'),
			array('spouse_firstname, spouse_lastname, spouse_address, spouse_employer, spouse_employment_occupation, spouse_drivers_licence, comments', 'length', 'max'=>255),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, spouse_firstname, spouse_lastname, spouse_address, spouse_monthly_income, spouse_gross_monthly_income, spouse_employer, spouse_employment_occupation, spouse_employment_work_years, spouse_number_of_children, spouse_drivers_licence, spouse_active_duty, comments, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'spouse_firstname' => 'Spouse Firstname',
			'spouse_lastname' => 'Spouse Lastname',
			'spouse_address' => 'Spouse Address',
			'spouse_monthly_income' => 'Spouse Monthly Income',
			'spouse_gross_monthly_income' => 'Spouse Gross Monthly Income',
			'spouse_employer' => 'Spouse Employer',
			'spouse_employment_occupation' => 'Spouse Employment Occupation',
			'spouse_employment_work_years' => 'Spouse Employment Work Years',
			'spouse_number_of_children' => 'Spouse Number Of Children',
			'spouse_drivers_licence' => 'Spouse Drivers Licence',
			'spouse_active_duty' => 'Spouse Active Duty',
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
		$criteria->compare('spouse_firstname',$this->spouse_firstname,true);
		$criteria->compare('spouse_lastname',$this->spouse_lastname,true);
		$criteria->compare('spouse_address',$this->spouse_address,true);
		$criteria->compare('spouse_monthly_income',$this->spouse_monthly_income);
		$criteria->compare('spouse_gross_monthly_income',$this->spouse_gross_monthly_income);
		$criteria->compare('spouse_employer',$this->spouse_employer,true);
		$criteria->compare('spouse_employment_occupation',$this->spouse_employment_occupation,true);
		$criteria->compare('spouse_employment_work_years',$this->spouse_employment_work_years);
		$criteria->compare('spouse_number_of_children',$this->spouse_number_of_children);
		$criteria->compare('spouse_drivers_licence',$this->spouse_drivers_licence,true);
		$criteria->compare('spouse_active_duty',$this->spouse_active_duty);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}