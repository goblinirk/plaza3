<?php

/**
 * This is the model class for table "registry".
 *
 * The followings are the available columns in table 'registry':
 * @property integer $id
 * @property string $module
 * @property string $label
 * @property string $param
 * @property string $value
 * @property string $create_date
 */
class Registry extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registry';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module, label, param, value, create_date', 'required'),
			array('module, label, param, value', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, module, label, param, value, create_date', 'safe', 'on'=>'search'),
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
			'label' => 'Label',
			'param' => 'Param',
			'value' => 'Value',
			'create_date' => 'Create Date',
		);
	}
	public function getSysParam($param)
	{
		return $this->find(array(
		    'condition'=>'module=:mod and param=:prm',
		    'params'=>array(':mod'=>'system',':prm'=>$param),
		));
	}
	public function genSpheresMenu($ind)
	{
		return $this->findAll(array(
		    'condition'=>'module=:mod',
		    'params'=>array(':mod'=>'sphere_module-'.$ind),
		));
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
		$criteria->compare('label',$this->label,true);
		$criteria->compare('param',$this->param,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('create_date',$this->create_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registry the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
