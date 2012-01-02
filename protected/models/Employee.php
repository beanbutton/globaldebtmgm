<?php

/**
 * This is the model class for table "tbl_employee".
 *
 * The followings are the available columns in table 'tbl_employee':
 * @property integer $id
 * @property integer $Fk_user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $phone_number
 * @property string $address
 * @property string $city
 * @property string $postal_code
 * @property string $email
 * @property string $emergency_contact
 * @property string $emergency_phone_number
 * @property string $created_at
 * @property string $updated_at
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Employee the static model class
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
		return 'tbl_employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Fk_user_id', 'numerical', 'integerOnly'=>true),
			array('firstname, lastname, phone_number, address, city, postal_code, email, emergency_contact, emergency_phone_number', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Fk_user_id, firstname, lastname, phone_number, address, city, postal_code, email, emergency_contact, emergency_phone_number, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'Fk_user_id' => 'Employee #',
			'firstname' => 'First Name',
			'lastname' => 'Last Name',
			'phone_number' => 'Phone Number',
			'address' => 'Address',
			'city' => 'City',
			'postal_code' => 'Postal Code',
			'email' => 'Email',
			'emergency_contact' => 'Emergency Contact',
			'emergency_phone_number' => 'Emergency Phone Number',
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
		$criteria->compare('Fk_user_id',$this->Fk_user_id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('postal_code',$this->postal_code,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('emergency_contact',$this->emergency_contact,true);
		$criteria->compare('emergency_phone_number',$this->emergency_phone_number,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}