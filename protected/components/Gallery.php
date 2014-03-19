<?php
Yii::import('zii.widgets.CPortlet');
 
class Gallery extends CWidget
{
    
    public $rootId=0;
    public $visible=true;
    public $showdesc=true;
    public $showlabel=true;
    public $label='';
 
    public function getGalleryBlock() {
        return $this->rootId?Galleries::model()->genGalleryInfo($this->rootId):false;
    }
 
    protected function renderContent() {
        //if($this->rootId == 0)
            $this->render('galleries');
        //else
        //    $this->render('gallery');
    }

    public function init() {
        if($this->visible){

        }
    }
 
    public function run() {
        if($this->visible) {
            $this->renderContent();
            // отрендерить конец блока портлета
        }
    }
}