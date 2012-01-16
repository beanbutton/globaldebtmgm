<?php

	require_once("AES.class.php");
	
	/**
	 * This is the model class for table "tbl_user".
	 *
	 * The followings are the available columns in table 'tbl_user':
	 * @property integer $id
	 * @property integer $Fk_role_id
	 * @property string $username
	 * @property string $password
	 * @property string $salt
	 * @property integer $remember_me
	 * @property string $created_at
	 * @property string $updated_at
	 */
	class User extends CActiveRecord {

		/**
		 * Returns the static model of the specified AR class.
		 * @return User the static model class
		 */
		public static function model($className = __CLASS__) {
			return parent::model($className);
		}

		/**
		 * @return string the associated database table name
		 */
		public function tableName() {
			return 'tbl_user';
		}

		/**
		 * @return array validation rules for model attributes.
		 */
		public function rules() {
			// NOTE: you should only define rules for those attributes that
			// will receive user inputs.
			return array( array('Fk_role_id, remember_me', 'numerical', 'integerOnly' => true), array('username, password, salt', 'length', 'max' => 255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
				array('id, Fk_role_id, username, password, salt, remember_me, created_at, updated_at', 'safe', 'on' => 'search'), );
		}

		/**
		 * @return before save
		 */
		public function beforeSave() {
			$aes = new AES( AES::$z);
			if ($this -> isNewRecord) {
				$this -> salt = md5($this -> password);
				$this -> password = $aes -> encrypt($this -> password);
				$this -> created_at = new CDbExpression('NOW()');
			} else {
				$this -> salt = md5($this -> password);
				$this -> password = $aes -> encrypt($this -> password);
				$this -> updated_at = new CDbExpression('NOW()');

			}

			return parent::beforeSave();
		}

		/**
		 * @return array relational rules.
		 */
		public function relations() {
			// NOTE: you may need to adjust the relation name and the related
			// class name for the relations automatically generated below.
			return array();
		}

		/**
		 * @return array customized attribute labels (name=>label)
		 */
		public function attributeLabels() {
			return array('id' => 'ID', 'Fk_role_id' => 'Fk Role', 'username' => 'Username', 'password' => 'Password', 'salt' => 'Salt', 'remember_me' => 'Remember Me', 'created_at' => 'Created At', 'updated_at' => 'Updated At', );
		}

		/**
		 * Retrieves a list of models based on the current search/filter conditions.
		 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
		 */
		public function search() {
			// Warning: Please modify the following code to remove attributes that
			// should not be searched.

			$criteria = new CDbCriteria;

			$criteria -> compare('id', $this -> id);
			$criteria -> compare('Fk_role_id', $this -> Fk_role_id);
			$criteria -> compare('username', $this -> username, true);
			$criteria -> compare('password', $this -> password, true);
			$criteria -> compare('salt', $this -> salt, true);
			$criteria -> compare('remember_me', $this -> remember_me);
			$criteria -> compare('created_at', $this -> created_at, true);
			$criteria -> compare('updated_at', $this -> updated_at, true);

			return new CActiveDataProvider($this, array('criteria' => $criteria, ));
		}

	}
