<?php

/**
 * This is the model class for table "pages".
 *
 * The followings are the available columns in table 'pages':
 * @property integer $id
 * @property integer $owner_id
 * @property integer $author
 * @property string $label
 * @property string $short_text
 * @property string $full_text
 * @property string $thumb
 * @property string $create_date
 * @property string $last_update_date
 * @property string $template
 * @property integer $status
 * @property integer $sort
 * @property integer $show_in_nav
 * @property string $nav_label
 */
class Pages extends CActiveRecord
{
	private static $_items=array('Корневая');

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pages';
	}

	public function getEditUrl()
    {
    	if($this->module=='news')
	        return Yii::app()->createUrl('admin/edit_news', array(
	            'id'=>$this->id,
	        ));
	    else return Yii::app()->createUrl('admin/edit_page', array(
	            'id'=>$this->id,
	        ));
    }
    public function getUrl()
    {
        if($this->module=='news')
	        return Yii::app()->createUrl('news/', array(
	            'id'=>$this->id,
	        ));
	    else return Yii::app()->createUrl('page/', array(
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
			array('owner_id, label, full_text, status', 'required'),
			array('owner_id, author, status', 'numerical', 'integerOnly'=>true),
			array('label, thumb', 'length', 'max'=>255),
			array('template', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, owner_id, show_in_nav, nav_label, author, label, short_text, full_text, thumb, create_date, last_update_date, template, status, sort', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'author'),
			'seo' => array(self::HAS_ONE, 'Seo', 'owner_id', 'condition'=>'seo.module="pages"')
		);

	}

	public function addSeo($seo)
	{
	    $seo->module=='pages';
	    $seo->owner_id==$this->id;
	    return $seo->save();
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '№',
			'owner_id' => 'Родительская страница',
			'author' => 'Автор',
			'label' => 'Заголовок',
			'short_text' => 'Краткое описание',
			'full_text' => 'Текст страницы',
			'thumb' => 'Изображение',
			'create_date' => 'Дата создания',
			'last_update_date' => 'Дата последнего обновления',
			'template' => 'Шаблон',
			'status' => 'Статус',
			'sort' => 'Сортировка',
			'show_in_nav' => 'Отображать в панеле навигации?',
			'nav_label' => 'Заголовок в панеле навигации',
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
		$criteria->compare('module',$this->module);
		$criteria->compare('owner_id',$this->owner_id);
		$criteria->compare('author',$this->author);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('short_text',$this->short_text,true);
		$criteria->compare('full_text',$this->full_text,true);
		$criteria->compare('thumb',$this->thumb,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('last_update_date',$this->last_update_date,true);
		$criteria->compare('template',$this->template,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('show_in_nav',$this->show_in_nav);
		$criteria->compare('nav_label',$this->nav_label,true);
		$criteria->order = 'owner_id, sort';

		return new CActiveDataProvider($this, array(
			'pagination'=>array(
                    'pageSize'=>100,
            ),
			'criteria'=>$criteria,
		));
	}

	public static function getItems($start=0, $level=1){
		
        //self::$_items=array('Корневая');
		$lvl = $level;
		++$lvl;
        $models=self::model()->findAll(array(
        	'condition'=>'owner_id=:oid and module="pages"', 
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

	public function genMenuTree($rid){
		return $this->findAll(array(
		    'condition'=>'owner_id=:oid and show_in_nav=:sin and module="pages"',
		    'order'=>'sort',
		    'params'=>array(':oid'=>$rid,':sin'=>1),
		));
	}
	public function genBreadCrumbs($rid){
		return $this->find(array(
		    'condition'=>'id=:oid and show_in_nav=:sin and module="pages"',
		    'order'=>'sort',
		    'limit'=>1,
		    'params'=>array(':oid'=>$rid,':sin'=>1),
		));
	}
	public function genNewsWidget($count){
		return $this->findAll(array(
		    'condition'=>'module="news"',
		    'order'=>'id DESC',
		    'limit'=>$count,
		));
	}

	protected function afterDelete() {
	    parent::afterDelete();
	    Pages::model()->updateAll(array('owner_id'=>$this->owner_id),'owner_id="'.$this->id.'"');
	    Seo::model()->deleteAll('owner_id=' .$this->id);
    }
    protected function beforeSave()
    {
    	if(parent::beforeSave()){
    		unset($_POST['ajaxthumb']);
    		if($this->isNewRecord){
		    	$model = new Pages;
			    $criteria=new CDbCriteria;
				$criteria->select='max(sort) AS sort';
				$row = $model->model()->find($criteria);
				$somevariable = $row['sort'];
			    $this->sort = ++$somevariable;
			    $this->create_date = $this->last_update_date = time();
			    $this->author = Yii::app()->user->id;
			    $this->thumb = 'thumb_'.$this->thumb;
			} else {
				$this->last_update_date = time();
				$this->thumb = 'thumb_'.$this->thumb;
			}

		    return true;
	    } else
	    	return false;
    }


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
