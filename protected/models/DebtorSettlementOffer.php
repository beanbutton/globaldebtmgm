<?php

/**
 * This is the model class for table "tbl_debtor_settlement_offer".
 *
 * The followings are the available columns in table 'tbl_debtor_settlement_offer':
 * @property integer $id
 * @property integer $Fk_debtor_id
 * @property integer $Fk_creditor_id
 * @property integer $Fk_negotiator_id
 * @property string $offer_date
 * @property string $offer_valid_until_date
 * @property double $offer_amount
 * @property double $offer_amount_percentage
 * @property double $client_saving_amonut
 * @property double $client_savings_percentage
 * @property double $client_reserves
 * @property double $service_fees
 * @property double $difference_amount
 * @property integer $offer_status
 * @property string $created_at
 * @property string $updated_at
 */
class DebtorSettlementOffer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return DebtorSettlementOffer the static model class
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
		return 'tbl_debtor_settlement_offer';
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
			array('Fk_debtor_id, Fk_creditor_id, Fk_negotiator_id, offer_status', 'numerical', 'integerOnly'=>true),
			array('offer_amount, offer_amount_percentage, client_saving_amonut, client_savings_percentage, client_reserves, service_fees, difference_amount', 'numerical'),
			array('offer_date, offer_valid_until_date, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Fk_debtor_id, Fk_creditor_id, Fk_negotiator_id, offer_date, offer_valid_until_date, offer_amount, offer_amount_percentage, client_saving_amonut, client_savings_percentage, client_reserves, service_fees, difference_amount, offer_status, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'Fk_debtor_id' => 'Fk Debtor',
			'Fk_creditor_id' => 'Fk Creditor',
			'Fk_negotiator_id' => 'Fk Negotiator',
			'offer_date' => 'Offer Date',
			'offer_valid_until_date' => 'Offer Valid Until Date',
			'offer_amount' => 'Offer Amount',
			'offer_amount_percentage' => 'Offer Amount Percentage',
			'client_saving_amonut' => 'Client Saving Amonut',
			'client_savings_percentage' => 'Client Savings Percentage',
			'client_reserves' => 'Client Reserves',
			'service_fees' => 'Service Fees',
			'difference_amount' => 'Difference Amount',
			'offer_status' => 'Offer Status',
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
		$criteria->compare('Fk_debtor_id',$this->Fk_debtor_id);
		$criteria->compare('Fk_creditor_id',$this->Fk_creditor_id);
		$criteria->compare('Fk_negotiator_id',$this->Fk_negotiator_id);
		$criteria->compare('offer_date',$this->offer_date,true);
		$criteria->compare('offer_valid_until_date',$this->offer_valid_until_date,true);
		$criteria->compare('offer_amount',$this->offer_amount);
		$criteria->compare('offer_amount_percentage',$this->offer_amount_percentage);
		$criteria->compare('client_saving_amonut',$this->client_saving_amonut);
		$criteria->compare('client_savings_percentage',$this->client_savings_percentage);
		$criteria->compare('client_reserves',$this->client_reserves);
		$criteria->compare('service_fees',$this->service_fees);
		$criteria->compare('difference_amount',$this->difference_amount);
		$criteria->compare('offer_status',$this->offer_status);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}