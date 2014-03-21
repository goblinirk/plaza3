<?php

class ElfinderController extends CController
{
    public function actions()
    {
        return array(
            'connector' => array(
                'class' => 'ext.yii-elfinder.ElFinderConnectorAction',
                'settings' => array(
                    'root' => Yii::getPathOfAlias('webroot') . '/images/',
                    'URL' => Yii::app()->baseUrl . '/images/',
                    'rootAlias' => 'Home',
                    'mimeDetect' => 'none'
                )
            ),
        );
    }
}