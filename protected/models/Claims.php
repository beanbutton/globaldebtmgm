<?php

/**
 * This is the model class for table "tbl_claims".
 *
 * The followings are the available columns in table 'tbl_claims':
 * @property integer $id
 * @property integer $Fk_clientid
 * @property integer $Fk_creditor_id
 * @property string $file_number
 * @property string $account_number
 * @property integer $status
 * @property double $current_settlement_offer
 * @property double $current_settlement_perc
 * @property string $offer_date
 * @property string $offer_valid_until_date
 * @property string $type_of_debt
 * @property double $amount_of_claim
 * @property integer $days_behind
 * @property string $settlement_date
 * @property double $settlement_amount
 * @property double $savings
 * @property string $created_at
 * @property string $updated_at
 */
class Claims extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Claims the static model class
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
		return 'tbl_claims';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Fk_clientid, Fk_creditor_id, status, days_behind', 'numerical', 'integerOnly'=>true),
			array('current_settlement_offer, current_settlement_perc, amount_of_claim, settlement_amount, savings', 'numerical'),
			array('file_number, account_number, type_of_debt', 'length', 'max'=>255),
			array('offer_date, offer_valid_until_date, settlement_date, updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Fk_clientid, Fk_creditor_id, file_number, account_number, status, current_settlement_offer, current_settlement_perc, offer_date, offer_valid_until_date, type_of_debt, amount_of_claim, days_behind, settlement_date, settlement_amount, savings, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}
        
        /**
	 * @return before save
	 */
        public function beforeSave() {
            if ($this->isNewRecord)
                $this->created_at = new CDbExpression('NOW()');
            else
                $this->updated_at = new CDbExpression('NOW()');

            return parent::beforeSave();
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
			'Fk_clientid' => 'Fk Clientid',
			'Fk_creditor_id' => 'Fk Creditor',
			'file_number' => 'File Number',
			'account_number' => 'Account Number',
			'status' => 'Status',
			'current_settlement_offer' => 'Current Settlement Offer',
			'current_settlement_perc' => 'Current Settlement Perc',
			'offer_date' => 'Offer Date',
			'offer_valid_until_date' => 'Offer Valid Until Date',
			'type_of_debt' => 'Type Of Debt',
			'amount_of_claim' => 'Amount Of Claim',
			'days_behind' => 'Days Behind',
			'settlement_date' => 'Settlement Date',
			'settlement_amount' => 'Settlement Amount',
			'savings' => 'Savings',
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
		$criteria->compare('Fk_clientid',$this->Fk_clientid);
		$criteria->compare('Fk_creditor_id',$this->Fk_creditor_id);
		$criteria->compare('file_number',$this->file_number,true);
		$criteria->compare('account_number',$this->account_number,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('current_settlement_offer',$this->current_settlement_offer);
		$criteria->compare('current_settlement_perc',$this->current_settlement_perc);
		$criteria->compare('offer_date',$this->offer_date,true);
		$criteria->compare('offer_valid_until_date',$this->offer_valid_until_date,true);
		$criteria->compare('type_of_debt',$this->type_of_debt,true);
		$criteria->compare('amount_of_claim',$this->amount_of_claim);
		$criteria->compare('days_behind',$this->days_behind);
		$criteria->compare('settlement_date',$this->settlement_date,true);
		$criteria->compare('settlement_amount',$this->settlement_amount);
		$criteria->compare('savings',$this->savings);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}