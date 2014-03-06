<?php

/**
 * This is the model class for table "galleries".
 *
 * The followings are the available columns in table 'galleries':
 * @property integer $id
 * @property integer $owner_id
 * @property string $label
 * @property string $description
 * @property string $create_date
 * @property integer $status
 */
class Galleries extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'galleries';
	}
	public function getEditUrl()
    {
        return Yii::app()->createUrl('admin/edit_gallery/', array(
            'id'=>$this->id,
        ));
    }
    public function getUrl()
    {
        return Yii::app()->createUrl('gallery/', array(
            'id'=>$this->id,
        ));
    }
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('owner_id, label, description', 'required'),
			array('owner_id, status', 'numerical', 'integerOnly'=>true),
			array('label', 'length', 'max'=>128),
			array('description', 'length', 'max'=>320),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, owner_id, label, description, create_date, status', 'safe', 'on'=>'search'),
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
			'images' => array(self::HAS_MANY, 'GalleryImages', 'owner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'owner_id' => 'Родительская категория',
			'label' => 'Заголовок',
			'description' => 'Описание',
			'create_date' => 'Дата создания',
			'status' => 'Статус',
		);
	}

	public function genGalleryInfo($rid){
		if(!$rid){
			return $this->findAll(array(
			    'condition'=>'owner_id=:oid',
			    'params'=>array(':oid'=>$rid),
			));
		} else {
			return $this->findAll(array(
			    'condition'=>'id=:rid',
			    'params'=>array(':rid'=>$rid),
			));
		}
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

		$criteria->compare('id',$this->id);
		$criteria->compare('owner_id',$this->owner_id);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Galleries the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
