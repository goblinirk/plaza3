<?php

class FbMessagesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/messages.twig';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new FbMessages;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FbMessages']))
		{
			//$arr = array('label', 'sender', 'message', 'send_date', 'status');
			$arr['label'] = 'Сообщение с сайта от '.date("d.m.Y",time());
			$arr['sender'] = 'Сообщение с сайта от '.$_POST['FbMessages']['sndr_email'];
			
			$arr['message'] = '<strong>Сообщение с сайта от '.date("d.m.Y",time()).'</strong><br />';
			$arr['message'] .= '<strong>Отправитель: </strong>'.$_POST['FbMessages']['sndr_name'].'<br />';
			$arr['message'] .= '<strong>Телефон: </strong>'.$_POST['FbMessages']['sndr_phone'].'<br />';
			$arr['message'] .= '<strong>E-Mail: </strong>'.$_POST['FbMessages']['sndr_email'].'<br />';
			$arr['message'] .= '<strong>Сообщение: </strong>'.$_POST['FbMessages']['sndr_message'].'<br />';
			
			$arr['send_date'] = date("Y-m-d H:i:s",time());
			$arr['status'] = 2;

			//print_r($arr);
			//die('');

			$model->attributes=$arr;
			if($model->save()){
				$this->render('message',array(
					'message'=>'Ваше сообщение успешно отправленно. Наши менеджеры скоро с вами свяжуться.',
					'type'=>'success',
				));
			} else {
				$this->render('message',array(
					'message'=>'При отправке сообщения возникли проблемы. Пожалуйста попробуйте еще раз через некоторое время.',
					'type'=>'error',
				));
			}
		} else throw new CHttpException(404,'Указанная запись не найдена');
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FbMessages']))
		{
			$model->attributes=$_POST['FbMessages'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('FbMessages');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FbMessages('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FbMessages']))
			$model->attributes=$_GET['FbMessages'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FbMessages the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FbMessages::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FbMessages $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fb-messages-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
