<?php

/**
 * This is the model class for table "chat".
 *
 * The followings are the available columns in table 'chat':
 * @property string $nama
 * @property string $email
 * @property string $ditujukan
 * @property string $komen
 * @property string $waktu
 * @property string $cek
 */
class Chat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'chat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
	
			array('nama', 'length', 'max'=>12),
			array('email', 'length', 'max'=>35),
			array('ditujukan', 'length', 'max'=>50),
			array('Subject', 'length', 'max'=>50),
			array('komen', 'length', 'max'=>120),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nama, email, ditujukan, komen, waktu, cek', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama',
			'email' => 'Email',
			'ditujukan' => 'Ditujukan',
			'komen' => 'Komen',
			'Subject' => 'subject',
	
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ditujukan',$this->ditujukan,true);
		$criteria->compare('komen',$this->komen,true);
		$criteria->compare('Subject',$this->Subject,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Chat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
