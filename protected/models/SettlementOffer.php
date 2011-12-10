<?php

/**
 * This is the model class for table "tbl_settlement_offer".
 *
 * The followings are the available columns in table 'tbl_settlement_offer':
 * @property integer $id
 * @property integer $debtor_id
 * @property integer $creditor_id
 * @property integer $negotiator_id
 * @property string $created_at
 * @property string $updated_at
 */
class SettlementOffer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return SettlementOffer the static model class
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
		return 'tbl_settlement_offer';
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
			array('debtor_id, creditor_id, negotiator_id', 'numerical', 'integerOnly'=>true),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, debtor_id, creditor_id, negotiator_id, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'debtor_id' => 'Debtor',
			'creditor_id' => 'Creditor',
			'negotiator_id' => 'Negotiator',
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
		$criteria->compare('debtor_id',$this->debtor_id);
		$criteria->compare('creditor_id',$this->creditor_id);
		$criteria->compare('negotiator_id',$this->negotiator_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}