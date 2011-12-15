<?php

/**
 * This is the model class for table "tbl_negotiator".
 *
 * The followings are the available columns in table 'tbl_negotiator':
 * @property integer $id
 * @property integer $Fk_debtor_id
 * @property string $name
 * @property string $address
 * @property string $telephone
 * @property string $email
 * @property string $faxnumber
 * @property string $created_at
 * @property string $updated_at
 */
class Negotiator extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Negotiator the static model class
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
		return 'tbl_negotiator';
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
			array('Fk_debtor_id', 'numerical', 'integerOnly'=>true),
			array('name, address, telephone, email, faxnumber', 'length', 'max'=>255),
			array('updated_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Fk_debtor_id, name, address, telephone, email, faxnumber, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'address' => 'Address',
			'telephone' => 'Telephone',
			'email' => 'Email',
			'faxnumber' => 'Faxnumber',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('faxnumber',$this->faxnumber,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}