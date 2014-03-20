<?php

class SiteController extends Controller
{

	public $layout='//layouts/admin.twig';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('login','contact'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('logout'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin_modules', 'admin_options', 'mod_slider'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionAdmin_modules() {
		$this->render('modules');
	}
	public function actionMod_slider() {
		$data = new Galleries();
		$model = Registry::model()->getFreeParam('slider', 'owner_id');
		$good = false;
		//echo $model->value;
		if(isset($_POST['Galleries'])){
			$model->value = $_POST['Galleries']['owner_id'];
			//echo $_POST['Galleries']['owner_id'];
			//echo $model->value;
			$model->save();
			$good = true;
		}

		$data->owner_id=$model->value;
		$this->render('mod_slider', array('model' => $model, 'data' => $data, 'good'=>$good));
	}
	public function actionMod_circles() {

		$good = false;
		
		//echo $model->value;
		for ($i=0; $i < 5; $i++) {
			$data[$i] = new Pages();
			$model[$i] = Registry::model()->genSpheresMenu($i+1);
		}

		if(isset($_POST['Pages'])){
			$i=0;
			foreach ($model[$_POST['index']-1] as $key => $value) {
	            if($value->param == 'link')
					$model[$_POST['index']-1][$i]->value = $_POST['Pages']['owner_id'];
				if($value->param == 'label')
					$model[$_POST['index']-1][$i]->value = $_POST['Pages']['label'];
				$model[$_POST['index']-1][$i]->save();
				$good = true;
				$i++;
	        }
		}
		for ($i=0; $i < 5; $i++) { 
			$sphere = array();
	        foreach ($model[$i] as $key => $value) {
	            $sphere[$value->param] = $value->value;
	        }
			$data[$i]->label = 	$sphere['label'];
			$data[$i]->owner_id = $sphere['link'];
		}
		//print_r($_POST);

		//$data->owner_id=$model->value;
		$this->render('mod_circles', array('model' => $model, 'data' => $data, 'good'=>$good));
	}
	public function actionMod_banners() {
		$good = false;
		
		//echo $model->value;
		for ($i=0; $i < 1; $i++) {
			$data[$i] = new Pages();
			$model[$i] = Registry::model()->genBanners($i+1);
		}

		if(isset($_POST['Pages'])){
			$i=0;
			foreach ($model[$_POST['index']-1] as $key => $value) {
	            if($value->param == 'link')
					$model[$_POST['index']-1][$i]->value = $_POST['Pages']['owner_id'];
				if($value->param == 'label')
					$model[$_POST['index']-1][$i]->value = $_POST['Pages']['label'];
				if($value->param == 'image')
					$model[$_POST['index']-1][$i]->value = $_POST['Pages']['ajaxthumb'];

				$model[$_POST['index']-1][$i]->save();
				$good = true;
				$i++;
	        }
		}
		for ($i=0; $i < 1; $i++) { 
			$sphere = array();
	        foreach ($model[$i] as $key => $value) {
	            $sphere[$value->param] = $value->value;
	        }
			$data[$i]->label = 	$sphere['label'];
			$data[$i]->owner_id = $sphere['link'];
			$data[$i]->thumb = $sphere['image'];
		}
		//print_r($_POST);

		//$data->owner_id=$model->value;
		$this->render('mod_banners', array('model' => $model, 'data' => $data, 'good'=>$good));
	}


	public function actionAdmin_options() {
		$this->render('options');
	}


	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$data['word'] = "GOBLIN MEGA MASTER";
		$this->render('index', $data);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect('/admin/pages/');
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect('/page/1/');
	}
}