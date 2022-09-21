<?php

/**
 * This is the model class for table "jurnal".
 *
 * The followings are the available columns in table 'jurnal':
 * @property integer $id_kategori
 * @property integer $id_jurnal
 * @property integer $id_user
 * @property string $tgl_diajukan
 * @property string $penulis
 * @property string $nm_publisher
 * @property string $nm_editor
 * @property string $nm_reviewed
 * @property string $kata_kunci
 * @property integer $volume
 * @property integer $no
 * @property integer $hal
 * @property string $thn
 * @property string $issn_isbn
 * @property string $berkas
 * @property string $gambar
 * @property string $artikel
 * @property string $abstraksi
 * @property string $ket_editor
 * @property string $ket_reviewer
 * @property string $ket_admin
 * @property string $status_editor
 * @property string $status_reviewer
 * @property string $status_admin
 * @property integer $s_admin2
 * @property string $publikasi
 */
class Jurnal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jurnal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		array('artikel,kata_kunci,penulis, abstraksi, tgl_diajukan', 'required','on'=>'create,update'),
			array('id_kategori', 'numerical', 'integerOnly'=>true),
		array('artikel,kata_kunci,penulis, abstraksi', 'required'),
			
			array('id_jurnal,issn_isbn, volume, no, hal,thn', 'numerical', 'integerOnly'=>true),
			array('kata_kunci', 'length', 'max'=>60),
			array('artikel', 'length'),
			array('abstraksi', 'length'),
			array('penulis', 'length', 'max'=>50),
			array('volume', 'length', 'max'=>11),
			array('tgl_diajukan', 'length', 'max'=>20),
			array('status_editor', 'length', 'max'=>35),
			array('status_reviewer', 'length', 'max'=>35),
			array('status_admin', 'length', 'max'=>35),
			array('nm_publisher', 'length', 'max'=>35),
			array('publikasi', 'length', 'max'=>20,'on'=>'approved,declined'),
			array('ket_admin','length'),
			array('ket_reviewer','length'),
			array('ket_editor','length'),
			
			array('s_admin2', 'numerical','integerOnly'=>true),
			
			//rray('id_user', 'length', 'max'=>11),
			array('berkas','file','types'=>'pdf, rar, docx',
            'allowEmpty'=>false,
            'maxSize'=>1024*1024*1,
            'tooLarge'=>'File terlalu besar, maksimal file 20 MB.',
			'on'=>'create,update','message' =>'Maksimal Jurnal 6 Halaman !!','on'=>'create'),
			
			
			
			array('gambar','file','types'=>'jpg,png',
            'allowEmpty'=>false,
            'maxSize'=>1024*1024*1,
            'tooLarge'=>'File terlalu besar, maksimal file 20 MB.',
			'on'=>'create2,update2','message' =>'Format Gambar Haruslah PNG Atau JPG'),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_kategori, id_jurnal, id_user, tgl_diajukan, penulis, nm_publisher, kata_kunci, volume, no, hal, thn, issn_isbn, berkas, gambar, artikel, abstraksi, ket_editor, ket_reviewer, ket_admin, status_editor, status_reviewer, status_admin, s_admin2, publikasi', 'safe', 'on'=>'search'),
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
		    'idKategori'=>array(self::BELONGS_TO,'Kategori',array('id_kategori')),
           //'idKategori1'=>array(self::BELONGS_TO,'Kategori',array('id_kategori'=>'id_jurnal')),
	        'idUser' => array(self::BELONGS_TO, 'Users','id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kategori' => 'Id Kategori',
			'id_jurnal' => 'Id Jurnal',
			'id_user' => 'Id User',
			'tgl_diajukan' => 'Tgl Diajukan',
			'penulis' => 'Penulis',
			'nm_publisher' => 'Nm Publisher',
			'kata_kunci' => 'Kata Kunci',
			'volume' => 'Volume',
			'no' => 'No',
			'hal' => 'Hal',
			'thn' => 'Thn',
			'issn_isbn' => 'Issn Isbn',
			'berkas' => 'Berkas',
			'gambar' => 'Gambar',
			'artikel' => 'Artikel',
			'abstraksi' => 'Abstraksi',
			'ket_editor' => 'Ket Editor',
			'ket_reviewer' => 'Ket Reviewer',
			'ket_admin' => 'Ket Admin',
			'status_editor' => 'Status Editor',
			'status_reviewer' => 'Status Reviewer',
			'status_admin' => 'Status Admin',
			's_admin2' => 'S Admin2',
			'publikasi' => 'Publikasi',
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
		$criteria->compare('id_jurnal',$this->id_jurnal);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('tgl_diajukan',$this->tgl_diajukan,true);
		$criteria->compare('penulis',$this->penulis,true);
		$criteria->compare('nm_publisher',$this->nm_publisher,true);
		$criteria->compare('kata_kunci',$this->kata_kunci,true);
		$criteria->compare('volume',$this->volume);
		$criteria->compare('no',$this->no);
		$criteria->compare('hal',$this->hal);
		$criteria->compare('thn',$this->thn,true);
		$criteria->compare('issn_isbn',$this->issn_isbn,true);
		$criteria->compare('berkas',$this->berkas,true);
		$criteria->compare('gambar',$this->gambar,true);
		$criteria->compare('artikel',$this->artikel,true);
		$criteria->compare('abstraksi',$this->abstraksi,true);
		$criteria->compare('ket_editor',$this->ket_editor,true);
		$criteria->compare('ket_reviewer',$this->ket_reviewer,true);
		$criteria->compare('ket_admin',$this->ket_admin,true);
		$criteria->compare('status_editor',$this->status_editor,true);
		$criteria->compare('status_reviewer',$this->status_reviewer,true);
		$criteria->compare('status_admin',$this->status_admin,true);
		$criteria->compare('s_admin2',$this->s_admin2);
		$criteria->compare('publikasi',$this->publikasi,true);
		$criteria->with = array('idKategori','idUser');
		$criteria->addSearchCondition('idKategori.id_kategori',$this->idKategori);
		$criteria->addSearchCondition('idKategori.judul_kategori',$this->idKategori);
		$criteria->addSearchCondition('idKategori.jenis_kategori',$this->idKategori);
		//$criteria->addSearchCondition('idUser.email',$this->idUser->email,TRUE);

	
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jurnal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}
