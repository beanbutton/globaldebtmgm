<?php

/**
 * This is the model class for table "tbl_amortization".
 *
 * The followings are the available columns in table 'tbl_amortization':
 * @property integer $id
 * @property string $payment_date
 * @property double $total_monthly_cost
 * @property double $adminstration_fee
 * @property double $maintenance_fee
 * @property double $settlement_savings_fund
 * @property double $total_monthly_cost_total
 * @property double $total_adminstration_fee
 * @property double $total_maintenance_fee
 * @property double $total_settlement_savings_fund
 * @property string $created_at
 * @property string $updated_at
 */
class Amortization extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Amortization the static model class
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
		return 'tbl_amortization';
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
			array('total_monthly_cost, adminstration_fee, maintenance_fee, settlement_savings_fund, total_monthly_cost_total, total_adminstration_fee, total_maintenance_fee, total_settlement_savings_fund', 'numerical'),
			array('payment_date, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, payment_date, total_monthly_cost, adminstration_fee, maintenance_fee, settlement_savings_fund, total_monthly_cost_total, total_adminstration_fee, total_maintenance_fee, total_settlement_savings_fund, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'payment_date' => 'Payment Date',
			'total_monthly_cost' => 'Total Monthly Cost',
			'adminstration_fee' => 'Adminstration Fee',
			'maintenance_fee' => 'Maintenance Fee',
			'settlement_savings_fund' => 'Settlement Savings Fund',
			'total_monthly_cost_total' => 'Total Monthly Cost Total',
			'total_adminstration_fee' => 'Total Adminstration Fee',
			'total_maintenance_fee' => 'Total Maintenance Fee',
			'total_settlement_savings_fund' => 'Total Settlement Savings Fund',
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
		$criteria->compare('payment_date',$this->payment_date,true);
		$criteria->compare('total_monthly_cost',$this->total_monthly_cost);
		$criteria->compare('adminstration_fee',$this->adminstration_fee);
		$criteria->compare('maintenance_fee',$this->maintenance_fee);
		$criteria->compare('settlement_savings_fund',$this->settlement_savings_fund);
		$criteria->compare('total_monthly_cost_total',$this->total_monthly_cost_total);
		$criteria->compare('total_adminstration_fee',$this->total_adminstration_fee);
		$criteria->compare('total_maintenance_fee',$this->total_maintenance_fee);
		$criteria->compare('total_settlement_savings_fund',$this->total_settlement_savings_fund);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}