<?php

class PagesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin.twig';

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
				'actions'=>array('index','view', 'showbyalias', 'shownewslist', 'shownews', 'uploadthumb'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(''),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','newsadmin'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionUploadThumb() {
        $model = new Pages;
	    if(isset($_POST['Pages'], $_FILES['Pages'])) {
	        $model->attributes=$_POST['Pages'];
	        $rnd = rand(0123456789, 9876543210);
	    	$timeStamp = time();
	        $uploadedFile = CUploadedFile::getInstance($model, 'ajaxthumb');
	        if ($uploadedFile != null) {
		        $fileName = "{$rnd}_{$timeStamp}_{$uploadedFile}";
		    }

	        if (!empty($uploadedFile)) {
	            $uploadedFile->saveAs(Yii::app()->basePath . '/../images/' . $fileName);
	        }
	        echo $fileName;
		}//*/
	}

	public function actionShowNewslist(){
		$criteria=new CDbCriteria;
	    $criteria->condition='module=:mod';
		$criteria->params=array(':mod'=>'news');
		$criteria->order='create_date DESC';

	    $news = new CActiveDataProvider('Pages', array(
	        'criteria'=>$criteria,
	        'pagination'=>array(
	            'pageSize'=>20,
	        ),
	    ));
	    $this->render('news',array(
			'dataProvider'=>$news,
		));
	}

	public function actionShowNews(){

		if(!isset($_GET['id']))
			throw new CHttpException(404,'The requested page does not exist.');

		$news = $this->loadModel();
	    $this->render('shownews',array(
			'model'=>$news,
		));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView()
	{
		$page = $this->loadModel();
		if(!empty($page->seo->redirect_url))
			$this->redirect(array($page->seo->redirect_url));

		$page->template = empty($page->template) ? 'views/layouts/main.twig' : "views/layouts/".$page->template.".twig";

		$this->render('view',array(
			'model'=>$page,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($mod="pages")
	{
		$model=new Pages;
		$seo=new Seo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pages']))
		{
			$model->attributes=$_POST['Pages'];
			$model->show_in_nav=$_POST['Pages']['show_in_nav'];
			$model->nav_label=$_POST['Pages']['nav_label'];
			$model->module=$mod;
			if($model->save()){
				//print_r($model);
				if(isset($_POST['Seo'])){
			        $seo->attributes=$_POST['Seo'];
			        $seo->module='pages';
				    $seo->owner_id=$model->id;
				    $seo->save();
			    }
			    if($mod == 'news')
					$this->redirect(array('admin/news/'));
				else
					$this->redirect(array('admin/pages/'));
			}
		}
		$model->thumb = '';
		$this->render('create',array(
			'model'=>$model,
			'seo'=>$seo,
			'mod'=>$mod
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($mod="pages")
	{
		if(isset($_GET['id'])){
			$model=$this->loadModel();
			$seo=$model->seo;
			if(!$seo) $seo = new Seo();
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);

			if(isset($_POST['Pages']))
			{
				//print_r($_POST['Pages']);
				//die();
				$model->attributes=$_POST['Pages'];
				$model->show_in_nav=$_POST['Pages']['show_in_nav'];
				$model->nav_label=$_POST['Pages']['nav_label'];
				if($model->save()){
				//print_r($model);
				//die();
				if(isset($_POST['Seo'])){
			        $seo->attributes=$_POST['Seo'];
			        $seo->module='pages';
				    $seo->owner_id=$model->id;
				    $seo->save();
			    }
				if($mod == 'news')
					$this->redirect(array('admin/news/'));
				else
					$this->redirect(array('admin/pages/'));
			}
			}

			$this->render('update',array(
				'model'=>$model,
				'seo'=>$seo,
				'mod'=>$mod
			));
		} else
			$this->redirect(array('admin'));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete()
	{
		$this->loadModel()->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$_GET['id'] = 1;
		$this->actionView();
		//$dataProvider=new CActiveDataProvider('Pages');
		//$this->render('index',array(
		//	'dataProvider'=>$dataProvider,
		//));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pages('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pages']))
			$model->attributes=$_GET['Pages'];
		
		$model->module = 'pages';

		$this->render('admin',array(
			'model'=>$model,
			'mod'=>'pages'
		));
	} 
	public function actionNewsadmin()
	{
		$model=new Pages('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pages']))
			$model->attributes=$_GET['Pages'];
		
		$model->module = 'news';
		//$model->findAll(array('condition'=>'module="news"'));

		$this->render('admin',array(
			'model'=>$model,
			'mod'=>'news'
		));
	} 

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pages the loaded model
	 * @throws CHttpException
	 */
	public function loadModel()
	{
		if($this->_model===null){
			if(isset($_GET['id'])){
				$this->_model=Pages::model()->findByPk($_GET['id']);
			} else {
				$seo_model = Seo::model()->find('alias="'.$_GET['alias'].'"');
				$page_id = (isset($seo_model->owner_id)) ? $seo_model->owner_id : 0;
				$this->_model=Pages::model()->findByPk($page_id);
			}
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pages $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pages-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
