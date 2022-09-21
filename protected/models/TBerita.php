<?php

/**
 * This is the model class for table "t_berita".
 *
 * The followings are the available columns in table 't_berita':
 * @property integer $id
 * @property integer $id_user
 * @property string $jenis
 * @property string $penulis
 * @property string $tanggal
 * @property string $judul
 * @property string $b_gambar
 */
class TBerita extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_berita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenis, penulis, tanggal, judul', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('jenis', 'length', 'max'=>10),
			array('deskripsi_acara', 'length'),
			array('penulis', 'length', 'max'=>45),
			array('b_gambar','file','types'=>'jpg,png',
            'allowEmpty'=>false,
            'maxSize'=>1024*1024*1,
            'tooLarge'=>'File terlalu besar, maksimal file 1 MB.',
			'on'=>'update,create','message' =>'Format Gambar Haruslah JPG'),
			array('id_user', 'default', 'value'=>Yii::app()->user->id, 'on'=>'create'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_berita, id_user, jenis, penulis, tanggal, judul, b_gambar', 'safe', 'on'=>'search'),
		);
	}

	/**CAX
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		'LUsers'=>array(self::HAS_ONE, 'Users', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_berita' => 'No',
			'id_user' => 'Id User',
			'jenis' => 'Jenis',
			'penulis' => 'Penulis',
			'tanggal' => 'Tanggal',
			'judul' => 'Judul',
			'b_gambar' => 'B Gambar',
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

		$criteria->compare('id_berita',$this->id_berita);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('jenis',$this->jenis,true);
		$criteria->compare('penulis',$this->penulis,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('b_gambar',$this->b_gambar,true);
		$criteria->with = array('LUsers');
		$criteria->addSearchCondition('LUsers.id_user',$this->LUsers);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TBerita the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
