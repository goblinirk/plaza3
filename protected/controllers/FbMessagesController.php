<?php

class FbMessagesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/messages.twig';

	private $_model;

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
				'actions'=>array('index','view','create','create_otz', 'create_order'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','fb_contacts','fb_otziv','fb_order','create_order'),
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
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
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
			$arr['sender'] = $_POST['FbMessages']['sndr_email'];
			
			$arr['message'] = '<strong>Сообщение с сайта от '.date("d.m.Y",time()).'</strong><br />';
			$arr['message'] .= '<strong>Отправитель: </strong>'.$_POST['FbMessages']['sndr_name'].'<br />';
			$arr['message'] .= '<strong>Телефон: </strong>'.$_POST['FbMessages']['sndr_phone'].'<br />';
			$arr['message'] .= '<strong>E-Mail: </strong>'.$_POST['FbMessages']['sndr_email'].'<br />';
			$arr['message'] .= '<strong>Сообщение: </strong>'.$_POST['FbMessages']['sndr_message'].'<br />';
			
			$arr['send_date'] = date("Y-m-d H:i:s",time());

			//print_r($arr);
			//die('');

			$model->attributes=$arr;
			$model->form_id = 1;
			$model->page_id = 0;
			$model->answer= '';
			$model->answer_date = date("Y-m-d H:i:s",time());
			
			if($model->save()){
				$this->render('message',array(
					'message'=>'Ваше сообщение успешно отправленно. Наши менеджеры скоро с Вами свяжуться.',
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

	public function actionCreate_otz()
	{
		$model=new FbMessages;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Otziv']))
		{
			//$arr = array('label', 'sender', 'message', 'send_date', 'status');
			$arr['label'] = 'Новый отзыв от '.$_POST['Otziv']['name'];
			$arr['sender'] = $_POST['Otziv']['name'];
			$arr['message'] = $_POST['Otziv']['message'];
			
			$arr['send_date'] = date("Y-m-d H:i:s",time());
			$arr['status'] = 2;

			$model->attributes=$arr;
			$model->form_id = 2;
			$model->page_id = $_POST['Otziv']['page_id'];
			$model->answer= '';
			$model->answer_date = date("Y-m-d H:i:s",time());
			
			if($model->save()){
				$this->redirect('/page/'.$_POST['Otziv']['page_id'].'/#send');
			} else {
				$this->redirect('/page/'.$_POST['Otziv']['page_id'].'/#sendform');
			}
		} else throw new CHttpException(404,'Указанная запись не найдена');
	}
	public function actionCreate_order($ord=1)
	{
		$model=new FbMessages;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		//echo $ord;
		if(isset($_POST['Order']))
		{
			//$arr = array('label', 'sender', 'message', 'send_date', 'status');
			$arr['label'] = 'Новая заявка от '.date("d.m.Y",time());
			$arr['sender'] = $_POST['Order']['email'];
			
			$arr['message'] = '<strong>Сообщение с сайта от '.date("d.m.Y",time()).'</strong><br />';
			$arr['message'] .= '<strong>Отправитель: </strong>'.$_POST['Order']['name'].'<br />';
			$arr['message'] .= '<strong>Телефон: </strong>'.$_POST['Order']['phone'].'<br />';
			$arr['message'] .= '<strong>E-Mail: </strong>'.$_POST['Order']['email'].'<br />';
			$arr['message'] .= '<strong>Сообщение: </strong>'.$_POST['Order']['message'].'<br />';
			
			$arr['send_date'] = date("Y-m-d H:i:s",time());
			$arr['status'] = 2;

			$model->attributes=$arr;
			$model->form_id = 2+$ord;
			$model->page_id = 0;
			$model->answer= '';
			$model->answer_date = date("Y-m-d H:i:s",time());
			
			if($model->save()){
				$this->render('message',array(
					'message'=>'Ваше сообщение успешно отправленно. Наши менеджеры скоро с Вами свяжуться.',
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
		$this->render('forms');
	}
	public function actionFb_contacts() {
		$model=new FbMessages('search');
		$model->unsetAttributes();  // clear any default values

		if(isset($_GET['FbMessages']))
			$model->attributes=$_GET['FbMessages'];

		$model->form_id = 1;

		$this->render('fb_contacts',array(
			'model'=>$model,
		));
	}
	public function actionFb_otziv() {
		$model=new FbMessages('search');
		$model->unsetAttributes();  // clear any default values

		if(isset($_GET['FbMessages']))
			$model->attributes=$_GET['FbMessages'];

		$model->form_id = 2;

		$this->render('fb_contacts',array(
			'model'=>$model,
		));
	}
	public function actionFb_order($ord=1) {
		//echo $ord;
		//die();
		$model=new FbMessages('search');
		$model->unsetAttributes();  // clear any default values

		if(isset($_GET['FbMessages']))
			$model->attributes=$_GET['FbMessages'];

		$model->form_id = $ord+2;

		$this->render('fb_contacts',array(
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
	public function loadModel()
	{
		if($this->_model===null){
			if(isset($_GET['id'])){
				$this->_model=FbMessages::model()->findByPk($_GET['id']);
			}

			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
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
