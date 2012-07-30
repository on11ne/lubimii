<?php

/**
 * This is the model class for table "tbl_news".
 *
 * The followings are the available columns in table 'tbl_news':
 * @property integer $id
 * @property string $title
 * @property string $teaser
 * @property string $full_text
 * @property string $images
 * @property string $date_created
 * @property string $date_publish_start
 * @property string $date_publish_finish
 * @property string $status
 */
class TblNews extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblNews the static model class
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
		return 'tbl_news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, full_text, date_created, date_publish_start, date_publish_finish', 'required'),
			array('title, images', 'length', 'max'=>128),
			array('status', 'length', 'max'=>13),
			array('teaser', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, teaser, full_text, images, date_created, date_publish_start, date_publish_finish, status', 'safe', 'on'=>'search'),
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
            'images'=>array(self::HAS_MANY, 'Image', 'id'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Название',
			'teaser' => 'Вступительный текст',
			'full_text' => 'Полный текст',
			'image' => 'Изображение',
			'date_created' => 'Дата создания',
			'date_publish_start' => 'Начало публикации',
			'date_publish_finish' => 'Окончание публикации',
			'status' => 'Статус',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('teaser',$this->teaser,true);
		$criteria->compare('full_text',$this->full_text,true);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('date_publish_start',$this->date_publish_start,true);
		$criteria->compare('date_publish_finish',$this->date_publish_finish,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}