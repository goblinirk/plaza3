<?php

/**
 * This is the model class for table "seo".
 *
 * The followings are the available columns in table 'seo':
 * @property integer $id
 * @property string $module
 * @property integer $owner_id
 * @property string $alias
 * @property string $title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $meta_robots
 * @property string $meta_author
 * @property string $redirect_header
 * @property string $redirect_url
 */
class Seo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alias', 'required'),
			array('alias, title', 'length', 'max'=>128),
			array('meta_description, meta_keywords', 'length', 'max'=>500),
			array('meta_robots', 'length', 'max'=>32),
			array('meta_author', 'length', 'max'=>64),
			array('redirect_header, redirect_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, module, owner_id, alias, title, meta_description, meta_keywords, meta_robots, meta_author, redirect_header, redirect_url', 'safe', 'on'=>'search'),
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
			'module' => 'Module',
			'owner_id' => 'Owner',
			'alias' => 'Псевдоним (alias)',
			'title' => 'Заголовок страницы (title)',
			'meta_description' => 'Meta Description',
			'meta_keywords' => 'Meta Keywords',
			'meta_robots' => 'Meta Robots',
			'meta_author' => 'Meta Author',
			'redirect_header' => 'Redirect Header',
			'redirect_url' => 'Переадрисация (redirect)',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('module',$this->module,true);
		$criteria->compare('owner_id',$this->owner_id);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_robots',$this->meta_robots,true);
		$criteria->compare('meta_author',$this->meta_author,true);
		$criteria->compare('redirect_header',$this->redirect_header,true);
		$criteria->compare('redirect_url',$this->redirect_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
