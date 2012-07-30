<?php

/**
 * This is the model class for table "tbl_actions".
 *
 * The followings are the available columns in table 'tbl_actions':
 * @property integer $id
 * @property string $title
 * @property string $teaser
 * @property string $teaser_image
 * @property string $url
 * @property integer $is_popup
 * @property string $status
 * @property string $created
 */
class Actions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TblActions the static model class
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
		return 'tbl_actions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, url, is_popup, created', 'required'),
			array('is_popup', 'numerical', 'integerOnly'=>true),
			array('title, teaser_image, url', 'length', 'max'=>255),
			array('status', 'length', 'max'=>13),
			array('teaser', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, teaser, teaser_image, url, is_popup, status, created, index_flag', 'safe', 'on'=>'search'),
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
     * @return string the URL that shows the detail of the actions item
     */
    public function getUrl()
    {
        return Yii::app()->createUrl('actions/view', array(
            '#'=>$this->id
        ));
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
			'teaser_image' => 'Изображение предпросмотра',
			'url' => 'Ссылка',
			'is_popup' => 'Всплывающее окно',
			'status' => 'Статус',
            'index_flag' => 'На главной',
			'created' => 'Создано',
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
		$criteria->compare('teaser_image',$this->teaser_image,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('is_popup',$this->is_popup);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('created',$this->created,true);
        $criteria->compare('index_flag',$this->index_flag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}