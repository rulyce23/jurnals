<?php

/**
 * This is the model class for table "kategori".
 *
 * The followings are the available columns in table 'kategori':
 * @property integer $id_kategori
 * @property string $judul_kategori
 */
class Kategori extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kategori';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenis_kategori,judul_kategori,tgl_publish', 'required'),
			array('judul_kategori', 'length', 'max'=>15),
			array('jenis_kategori', 'length', 'max'=>35),
			array('tgl_publish', 'length', 'max'=>20),
			array('tgl_publish', 'length','on'=>'create'),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kategori, jenis_kategori,judul_kategori,tgl_publish', 'safe', 'on'=>'search'),
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
			'idKategori2' => array(self::BELONGS_TO, 'Jurnal','id_kategori'),
			'idJt' => array(self::BELONGS_TO, 'Jurnal','id_jurnal'),
	
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kategori' => 'Id Kategori',
			'jenis_kategori'=>'Jenis Kategori',
			'judul_kategori' => 'Judul Kategori',
			'tgl_publish' => 'Tanggal Publish',
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

		$criteria->compare('id_kategori',$this->id_kategori);
		$criteria->compare('jenis_kategori',$this->jenis_kategori);
		$criteria->compare('judul_kategori',$this->judul_kategori,true);
		$criteria->compare('tgl_publish',$this->tgl_publish,true);
		$criteria->with = array('idKategori','idJt');
		$criteria->addSearchCondition('idJt.id_jurnal',$this->idJt);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kategori the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
