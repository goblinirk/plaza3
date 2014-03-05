<?php
Yii::import('zii.widgets.CPortlet');
 
class Gallery extends CWidget
{
    
    public $rootId=0;
    public $visible=true;
    public $showdesc=true;
    public $showlabel=true;
 
    public function getGalleryBlock() {
        return Galleries::model()->genGalleryInfo($this->rootId);
    }
 
    protected function renderContent() {
        $this->render('gallery');
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