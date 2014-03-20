<?php

/**
 * This is the model class for table "gallery_images".
 *
 * The followings are the available columns in table 'gallery_images':
 * @property integer $id
 * @property integer $owner_id
 * @property string $label
 * @property string $description
 * @property string $link
 * @property string $thumb
 * @property string $medium
 * @property string $large
 * @property string $create_date
 * @property integer $status
 * @property integer $sort
 */
class GalleryImages extends CActiveRecord
{
	private static $_items=array('Корневая');
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gallery_images';
	}
	public function getEditUrl()
    {
        return Yii::app()->createUrl('admin/edit_image/', array(
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
			array('owner_id, label, description, link, thumb, medium, large, create_date, status, sort', 'required'),
			array('owner_id, status, sort', 'numerical', 'integerOnly'=>true),
			array('label, thumb, medium, large', 'length', 'max'=>128),
			array('description', 'length', 'max'=>500),
			array('link', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, owner_id, label, description, link, thumb, medium, large, create_date, status, sort', 'safe', 'on'=>'search'),
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
			'owner_id' => 'Галерея',
			'label' => 'Заголовок',
			'description' => 'Описание',
			'link' => 'Ссылка',
			'thumb' => 'Изображение',
			'medium' => 'Medium',
			'large' => 'Large',
			'create_date' => 'Дата создания',
			'status' => 'Статус',
			'sort' => 'Sort',
		);
	}

	public static function getItems($start=0, $level=1){
		
        //self::$_items=array('Корневая');
		$lvl = $level;
		++$lvl;
        $models=Galleries::model()->findAll(array(
        	'condition'=>'owner_id=:oid', 
        	'order'=>'sort',
        	'params'=>array(':oid'=>$start),
        	));
        foreach($models as $model){
        	$label = $level==0?'':'|';
        	for($i=0;$i<$level;++$i) $label .= '---';
        	$label .= $model->label;
            self::$_items[$model->id]=$label;
            self::getItems($model->id, $lvl);
        }
        return self::$_items;
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
		$criteria->compare('link',$this->link,true);
		$criteria->compare('thumb',$this->thumb,true);
		$criteria->compare('medium',$this->medium,true);
		$criteria->compare('large',$this->large,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('sort',$this->sort);
		$criteria->order = 'owner_id, sort';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function beforeSave()
    {
    	if(parent::beforeSave()){
    		unset($_POST['ajaxthumb']);
    		return true;
    	}else{
    		return false;
    	}
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GalleryImages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
