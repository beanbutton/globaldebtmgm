<?php

/**
 * This is the model class for table "tbl_program_info".
 *
 * The followings are the available columns in table 'tbl_program_info':
 * @property integer $id
 * @property double $monthly_payment
 * @property double $total_debt
 * @property double $original_debt
 * @property double $monthly_income
 * @property double $saf_monthly_payment
 * @property double $nsf_amount
 * @property string $monthly_payment_due_date
 * @property string $enrollment_date
 * @property string $first_monthly_payment_date
 * @property string $next_payment_due_date
 * @property string $contract_due_date
 * @property double $maintenance_fee_manual
 * @property double $maintenance_fee_automatic
 * @property double $admin_fee_automatic
 * @property double $admin_fee_perc_automatic
 * @property double $admin_fee_manual
 * @property double $admin_fee_perc_manual
 * @property double $service_fee_automatic
 * @property double $service_fee_perc_automatic
 * @property double $service_fee_manual
 * @property double $service_fee_perc_manual
 * @property string $created_at
 * @property string $updated_at
 */
class ProgramInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ProgramInfo the static model class
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
		return 'tbl_program_info';
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
			array('monthly_payment, total_debt, original_debt, monthly_income, saf_monthly_payment, nsf_amount, maintenance_fee_manual, maintenance_fee_automatic, admin_fee_automatic, admin_fee_perc_automatic, admin_fee_manual, admin_fee_perc_manual, service_fee_automatic, service_fee_perc_automatic, service_fee_manual, service_fee_perc_manual', 'numerical'),
			array('monthly_payment_due_date, enrollment_date, first_monthly_payment_date, next_payment_due_date, contract_due_date, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, monthly_payment, total_debt, original_debt, monthly_income, saf_monthly_payment, nsf_amount, monthly_payment_due_date, enrollment_date, first_monthly_payment_date, next_payment_due_date, contract_due_date, maintenance_fee_manual, maintenance_fee_automatic, admin_fee_automatic, admin_fee_perc_automatic, admin_fee_manual, admin_fee_perc_manual, service_fee_automatic, service_fee_perc_automatic, service_fee_manual, service_fee_perc_manual, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'monthly_payment' => 'Monthly Payment',
			'total_debt' => 'Total Debt',
			'original_debt' => 'Original Debt',
			'monthly_income' => 'Monthly Income',
			'saf_monthly_payment' => 'Saf Monthly Payment',
			'nsf_amount' => 'Nsf Amount',
			'monthly_payment_due_date' => 'Monthly Payment Due Date',
			'enrollment_date' => 'Enrollment Date',
			'first_monthly_payment_date' => 'First Monthly Payment Date',
			'next_payment_due_date' => 'Next Payment Due Date',
			'contract_due_date' => 'Contract Due Date',
			'maintenance_fee_manual' => 'Maintenance Fee Manual',
			'maintenance_fee_automatic' => 'Maintenance Fee Automatic',
			'admin_fee_automatic' => 'Admin Fee Automatic',
			'admin_fee_perc_automatic' => 'Admin Fee Perc Automatic',
			'admin_fee_manual' => 'Admin Fee Manual',
			'admin_fee_perc_manual' => 'Admin Fee Perc Manual',
			'service_fee_automatic' => 'Service Fee Automatic',
			'service_fee_perc_automatic' => 'Service Fee Perc Automatic',
			'service_fee_manual' => 'Service Fee Manual',
			'service_fee_perc_manual' => 'Service Fee Perc Manual',
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
		$criteria->compare('monthly_payment',$this->monthly_payment);
		$criteria->compare('total_debt',$this->total_debt);
		$criteria->compare('original_debt',$this->original_debt);
		$criteria->compare('monthly_income',$this->monthly_income);
		$criteria->compare('saf_monthly_payment',$this->saf_monthly_payment);
		$criteria->compare('nsf_amount',$this->nsf_amount);
		$criteria->compare('monthly_payment_due_date',$this->monthly_payment_due_date,true);
		$criteria->compare('enrollment_date',$this->enrollment_date,true);
		$criteria->compare('first_monthly_payment_date',$this->first_monthly_payment_date,true);
		$criteria->compare('next_payment_due_date',$this->next_payment_due_date,true);
		$criteria->compare('contract_due_date',$this->contract_due_date,true);
		$criteria->compare('maintenance_fee_manual',$this->maintenance_fee_manual);
		$criteria->compare('maintenance_fee_automatic',$this->maintenance_fee_automatic);
		$criteria->compare('admin_fee_automatic',$this->admin_fee_automatic);
		$criteria->compare('admin_fee_perc_automatic',$this->admin_fee_perc_automatic);
		$criteria->compare('admin_fee_manual',$this->admin_fee_manual);
		$criteria->compare('admin_fee_perc_manual',$this->admin_fee_perc_manual);
		$criteria->compare('service_fee_automatic',$this->service_fee_automatic);
		$criteria->compare('service_fee_perc_automatic',$this->service_fee_perc_automatic);
		$criteria->compare('service_fee_manual',$this->service_fee_manual);
		$criteria->compare('service_fee_perc_manual',$this->service_fee_perc_manual);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}