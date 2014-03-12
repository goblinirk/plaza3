<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'PLAZA CMS 3.0',
	'language' => 'ru',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'drop',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	'defaultController'=>'pages',
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'viewRenderer' => array(
		    'class' => 'ext.Twig.ETwigViewRenderer',

		    // All parameters below are optional, change them to your needs
		    'fileExtension' => '.twig',
		    'options' => array(
		        'autoescape' => true,
		    ),
		    
		    'globals' => array(
		        'html' => 'CHtml'
		    ),
		    'functions' => array(
		        'rot13' => 'str_rot13',
		        'print_r' => 'print_r',
		        'strtotime' => 'strtotime',
		    ),
		    'filters' => array(
		        'jencode' => 'CJSON::encode',
		    ),
		    // Change template syntax to Smarty-like (not recommended)
		    'lexerOptions' => array(
		        'tag_comment'  => array('{*', '*}'),
		        'tag_block'    => array('{%', '%}'),
		        'tag_variable' => array('{{', '}}')
		    ),
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'page/<id:\d+>/'=>'pages/view',
				'page/<alias:.*?>/'=>'pages/view',
				'pages/'=>'pages/index',
				'pages/uploadthumb'=>'pages/uploadthumb',
				'news/'=>'pages/shownewslist',
				'news/<id:.*?>'=>'pages/shownews',
				'feedback/send/'=>'FbMessages/create',
				'feedback/sendotziv/'=>'FbMessages/create_otz',
				'admin/pages/'=>'pages/admin',
				'admin/news/'=>'pages/newsadmin',
				'admin/navigation/'=>'menus/admin',
				'admin/forms/'=>'site/admin',
				'admin/galleries/'=>'galleries/admin',
				'admin/modules/'=>'site/admin',
				'admin/options/'=>'site/admin',
				'admin/login/'=>'site/login',
				'admin/add_page/'=>'pages/create',
				'admin/add_news/'=>'pages/create/mod/news',
				'admin/edit_page/<id:\d+>/'=>'pages/update',
				'admin/edit_news/<id:\d+>/'=>'pages/update/mod/news',
				'admin/delete_page/<id:\d+>/'=>'pages/delete',
				'admin/add_gallery/'=>'galleries/create',
				'admin/edit_gallery/<id:\d+>/'=>'galleries/update',
				'admin/delete_gallery/<id:\d+>/'=>'galleries/delete',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=insite_samus',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'drop',
			'charset' => 'utf8',
		),
		/*
		'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
            'defaultRoles' => array('guest'),
        ),
		*/
		'clientScript'=>array(
		  'packages'=>array(
		    'jquery'=>array(
		      'baseUrl'=>'//ajax.googleapis.com/ajax/libs/jquery/1.10.2',
		      'js'=>array('jquery.min.js'),
		      'coreScriptPosition'=>CClientScript::POS_HEAD
		    ),
		    'jquery.ui'=>array(
		      'baseUrl'=>'//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3',
		      'js'=>array('jquery-ui.min.js'),
		      'depends'=>array('jquery'),
		      'coreScriptPosition'=>CClientScript::POS_BEGIN
		    )
		  ),
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);