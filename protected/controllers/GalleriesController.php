<?php

class GalleriesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin.twig';

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
				'actions'=>array(),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(
					'admin','create','update','delete',
					'show_child_images','create_image','update_image','delete_image',
					'movetop',
					'moveup',
					'movedown',
					'movebottom',
					'moveimagetop',
					'moveimageup',
					'moveimagedown',
					'moveimagebottom'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionMovetop(){

		if(!isset($_GET['id']))
			throw new CHttpException(404,'The requested page does not exist.');

		$item = $this->loadModel();
		$model = $item->model();
	    $criteria=new CDbCriteria;
		$criteria->select='min(sort) AS sort';
		$criteria->condition='owner_id=:oid';
		$criteria->params=array(':oid' => $item->owner_id);
		$row = $model->model()->find($criteria);
		$minsort = $row['sort']-1;
	    
	    $item->sort = $minsort;
	    $item->save();

	    $this->redirect(array('/admin/galleries/'));
	}
	public function actionMoveup(){

		if(!isset($_GET['id']))
			throw new CHttpException(404,'The requested page does not exist.');

		$item = $this->loadModel();

		$model = new Galleries;

	    $criteria=new CDbCriteria;
		$criteria->select='id, sort';
		$criteria->condition='owner_id=:oid and sort < :cs';
		$criteria->order='sort DESC';
		$criteria->limit=1;
		$criteria->params=array(':oid' => $item->owner_id, ':cs'=>$item->sort);

		$previtem = $model->model()->find($criteria);

		if($previtem){
			$temp = $item->sort;
			$item->sort = $previtem->sort;
			$item->save();
	    
			$prevmodel = Galleries::model()->findByPk($previtem->id);
			$prevmodel->sort = $temp;
			$prevmodel->save();
		}

	    $this->redirect(array('/admin/galleries/'));
	}
	public function actionMovedown(){

		if(!isset($_GET['id']))
			throw new CHttpException(404,'The requested page does not exist.');

		$item = $this->loadModel();

		$model = new Galleries;

	    $criteria=new CDbCriteria;
		$criteria->select='id, sort';
		$criteria->condition='owner_id=:oid and sort > :cs';
		$criteria->order='sort ASC';
		$criteria->limit=1;
		$criteria->params=array(':oid' => $item->owner_id, ':cs'=>$item->sort);

		$previtem = $model->model()->find($criteria);

		if($previtem){
			$temp = $item->sort;
			$item->sort = $previtem->sort;
			$item->save();
	    
			$prevmodel = Galleries::model()->findByPk($previtem->id);
			$prevmodel->sort = $temp;
			$prevmodel->save();
		}

	    $this->redirect(array('/admin/galleries/'));
	}
	public function actionMovebottom(){

		if(!isset($_GET['id']))
			throw new CHttpException(404,'The requested page does not exist.');

		$item = $this->loadModel();
		$model = $item->model();
	    $criteria=new CDbCriteria;
		$criteria->select='max(sort) AS sort';
		$criteria->condition='owner_id=:oid';
		$criteria->params=array(':oid' => $item->owner_id);
		$row = $model->model()->find($criteria);
		$maxsort = $row['sort']+1;
	    
	    $item->sort = $maxsort;
	    $item->save();

	    $this->redirect(array('/admin/galleries/'));
	}
	public function actionMoveimagetop(){

		if(!isset($_GET['id']))
			throw new CHttpException(404,'The requested page does not exist.');

		$item = $this->loadImageModel();
		$model = $item->model();
	    $criteria=new CDbCriteria;
		$criteria->select='min(sort) AS sort';
		$criteria->condition='owner_id=:oid';
		$criteria->params=array(':oid' => $item->owner_id);
		$row = $model->model()->find($criteria);
		$minsort = $row['sort']-1;
	    
	    $item->sort = $minsort;
	    $item->save();

	    $this->redirect(array('/admin/gallery_images/'.$item->owner_id));
	}
	public function actionMoveimageup(){

		if(!isset($_GET['id']))
			throw new CHttpException(404,'The requested page does not exist.');

		$item = $this->loadImageModel();

		$model = new GalleryImages;

	    $criteria=new CDbCriteria;
		$criteria->select='id, sort';
		$criteria->condition='owner_id=:oid and sort < :cs';
		$criteria->order='sort DESC';
		$criteria->limit=1;
		$criteria->params=array(':oid' => $item->owner_id, ':cs'=>$item->sort);

		$previtem = $model->model()->find($criteria);

		if($previtem){
			$temp = $item->sort;
			$item->sort = $previtem->sort;
			$item->save();
	    
			$prevmodel = GalleryImages::model()->findByPk($previtem->id);
			$prevmodel->sort = $temp;
			$prevmodel->save();
		}

	    $this->redirect(array('/admin/gallery_images/'.$item->owner_id));
	}
	public function actionMoveimagedown(){

		if(!isset($_GET['id']))
			throw new CHttpException(404,'The requested page does not exist.');

		$item = $this->loadImageModel();

		$model = new GalleryImages;

	    $criteria=new CDbCriteria;
		$criteria->select='id, sort';
		$criteria->condition='owner_id=:oid and sort > :cs';
		$criteria->order='sort ASC';
		$criteria->limit=1;
		$criteria->params=array(':oid' => $item->owner_id, ':cs'=>$item->sort);

		$previtem = $model->model()->find($criteria);

		if($previtem){
			$temp = $item->sort;
			$item->sort = $previtem->sort;
			$item->save();
	    
			$prevmodel = GalleryImages::model()->findByPk($previtem->id);
			$prevmodel->sort = $temp;
			$prevmodel->save();
		}

	    $this->redirect(array('/admin/gallery_images/'.$item->owner_id));
	}
	public function actionMoveimagebottom(){

		if(!isset($_GET['id']))
			throw new CHttpException(404,'The requested page does not exist.');

		$item = $this->loadImageModel();
		$model = $item->model();
	    $criteria=new CDbCriteria;
		$criteria->select='max(sort) AS sort';
		$criteria->condition='owner_id=:oid';
		$criteria->params=array(':oid' => $item->owner_id);
		$row = $model->model()->find($criteria);
		$maxsort = $row['sort']+1;
	    
	    $item->sort = $maxsort;
	    $item->save();

	    $this->redirect(array('/admin/gallery_images/'.$item->owner_id));
	}

	public function actionShow_child_images()
	{
		$model=new GalleryImages('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['GalleryImages']))
			$model->attributes=$_GET['GalleryImages'];
		$model->owner_id=$_GET['id'];		
		$this->render('admin_images',array(
			'model'=>$model,
		));
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
		$model=new Galleries;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Galleries']))
		{
			$model->attributes=$_POST['Galleries'];
			$model->thumb=$_POST['Galleries']['thumb'];
			if($model->save())
				$this->redirect(array('admin/galleries/'));
		}

		$model->thumb = '';
		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionCreate_image()
	{
		$model=new GalleryImages;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GalleryImages']))
		{
			$model->attributes=$_POST['GalleryImages'];
			if($model->save())
				$this->redirect(array('admin/galleries/'));
		}
		$model->thumb = '';
		$this->render('create_image',array(
			'model'=>$model,
		));
	}

	public function actionUpdate_image($id)
	{
		$model=$this->loadImageModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GalleryImages']))
		{
			$model->attributes=$_POST['GalleryImages'];
			if($model->save())
				$this->redirect(array('admin/galleries/'));
		}

		$this->render('update_image',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete_image($id)
	{
		$this->loadImageModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
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

		if(isset($_POST['Galleries']))
		{
			$model->attributes=$_POST['Galleries'];
			$model->thumb=$_POST['Galleries']['thumb'];
			if($model->save())
				$this->redirect(array('admin/galleries/'));
		}
		if(empty($model->thumb)) $model->thumb = '';
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
	

	/*********************
	 * Lists all models. *
	 *********************/
	public function actionIndex()
	{
		$curr = isset($_GET['id'])?$_GET['id']:0;
		$_GET['id'] = isset($_GET['id'])?$_GET['id']:0;
		$dataProvider=new CActiveDataProvider('Galleries');
		$dataProvider2=new CActiveDataProvider('GalleryImages');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'dataProvider2'=>$dataProvider2,
			'curr'=>$curr,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Galleries('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Galleries']))
			$model->attributes=$_GET['Galleries'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Galleries the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id=0)
	{
		if(isset($_GET['id']))
			$model=Galleries::model()->findByPk($_GET['id']);
		else
			$model=Galleries::model()->findByPk($id);

		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	public function loadImageModel($id=0)
	{
		if(isset($_GET['id']))
			$model=GalleryImages::model()->findByPk($_GET['id']);
		else
			$model=GalleryImages::model()->findByPk($id);

		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Galleries $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='galleries-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
